<?php

namespace App\Http\Controllers;
use Redirect;
use Auth;

class UserController extends Controller
{


    public function getLogoutAdmin(){
        Auth::logout();
        return redirect('login')->with('notice', 'Bạn đã đăng xuất thành công khỏi hệ thống');
    }

    public function getLogoutPage(){
        Auth::logout();
        return redirect('luis');
    }

}
