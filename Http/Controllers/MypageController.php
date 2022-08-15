<?php

namespace Modules\Mypage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MypageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('mypage::index');
    }

    public function profile()
    {
        return view('mypage::profile.index');
    }

    public function password()
    {
        return view('mypage::password.index');
    }

    public function billing()
    {
        return view('mypage::billing.index');
    }

}
