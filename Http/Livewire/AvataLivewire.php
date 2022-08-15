<?php
namespace Modules\Mypage\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;

class AvataLivewire extends Component
{
    public $user_id;

    use WithFileUploads;
    public $photo;

    public function mount()
    {
        $user = Auth::user();
        $this->user_id = $user->id;
    }

    public function render()
    {
        $profile = DB::table('user_profile')->where('user_id',$this->user_id)->first();
        return view('mypage::profile.avata',['profile'=>$profile]);
    }


    public function updatedPhoto()
    {
        if($this->photo) {
            $this->validate([
                'photo' => 'image|max:1024',
            ]);

            $filename = $this->photo->store('photos');
            // $this->photo->getClientOriginalName()

            $profile = DB::table('user_profile')->where('user_id',$this->user_id)->first();
            if($profile) {
                DB::table('user_profile')->where('id',$this->user_id)->update([
                    'image' => $filename
                ]);
            } else {
                DB::table('user_profile')->insert([
                    'user_id' => $this->user_id,
                    'image' => $filename
                ]);
            }
        }
    }

    /*
    protected $listeners = ['reflashRender'=>"reflashRender"];
    public function reflashRender()
    {
        // 화면 갱신 호출용
    }
    */

}
