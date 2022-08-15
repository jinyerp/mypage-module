<?php
namespace Modules\Mypage\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileLivewire extends Component
{
    public $form;
    public $user_id;

    public function mount()
    {
        $user = Auth::user();
        $this->user_id = $user->id;

        $form = DB::table('users')->where('id',$this->user_id)->first();

        $this->form['name'] = $form->name;
        $this->form['email'] = $form->email;
    }

    public function render()
    {
        return view('mypage::profile.form');
    }

    public function update()
    {
        $form =  $this->form;
        DB::table('users')->where('id',$this->user_id)->update($form);
    }

}
