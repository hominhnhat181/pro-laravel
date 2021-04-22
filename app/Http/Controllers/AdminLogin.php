<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use User;//user model can kiem tra
use Auth; //use thư viện auth
class AdminLogin extends Controller
{
    public function getLoginAdmin(){
        return view('login.adLogin');
    }
    public function getLogoutAdmin(){
        Auth::logout();
        return redirect('login')->with('notice', 'Bạn đã đăng xuất thành công khỏi hệ thống');
       
    }
    public function postLoginAdmin(Request $request){
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::attempt($arr)) {
            return redirect('admin');


        } else {

            return redirect('login');

        }
    }
}
