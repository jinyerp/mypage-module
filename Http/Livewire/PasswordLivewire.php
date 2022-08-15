<?php
namespace Modules\Mypage\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class PasswordLivewire extends Component
{
    public $form;
    public $user_id;

    public function mount()
    {
        $user = Auth::user();
        $this->user_id = $user->id;
    }

    public function render()
    {
        return view('mypage::password.form');
    }

    public function update()
    {
        $user = Auth::user();
        $row = DB::table('users')->where('id', $user->id)->first();

        if(isset($this->form['current'])) {
            if (Hash::check($this->form['current'], $row->password))
            {
                //dd("일치");
            } else {
                //dd("불일치");
                session()->flash('message',"현재 비밀번호가 일치하지 않습니다.");
                return;
            }
        } else {
            session()->flash('message',"현재 비밀번호를 입력해 주세요.");
            return;
        }

        if(isset($this->form['password'] )) {
            $password = $this->form['password'] ;
        } else
        {
            session()->flash('message',"비밀번호를 입력해 주세요.");
            return;
        }

        if(isset($this->form['confirm'] )) {
            $confirm = $this->form['confirm'] ;
        } else
        {
            session()->flash('message',"확인 비밀번호를 입력해 주세요.");
            return;
        }

        if($password == $confirm) {
            // dd($this->form);
            //$current = Hash::make($this->form['password']);
            //$password = bcrypt($password);
            DB::table('users')->where('id',$user->id)->update([
                'password' => bcrypt($password),
                'updated_at' => date("Y-m-d H:i:s")
            ]);

        } else {
            session()->flash('message',"확인 비밀번호가 일치하지 않습니다.");
        }






    }

}
