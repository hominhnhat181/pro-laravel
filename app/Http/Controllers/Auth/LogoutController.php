<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class LogoutController extends Controller
{

    public function getLogoutAdmin(){
        Auth::logout();
        return redirect('luis')->with('notice', 'Bạn đã đăng xuất thành công khỏi hệ thống');
    }

    public function getLogoutPage(){
        Auth::logout();
        return redirect('luis');
    }

}
