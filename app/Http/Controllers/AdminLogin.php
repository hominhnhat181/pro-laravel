<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use User;//user model can kiem tra
use Auth; //use thư viện auth
use DB;
use Carbon\Carbon;

class AdminLogin extends Controller
{
    // LOGIN
    public function getLoginAdmin(){
        return view('login.adLogin');
    }
    public function getLogoutAdmin(){
        Auth::logout();
        return redirect('login')->with('notice', 'Bạn đã đăng xuất thành công khỏi hệ thống');
       
    }
    public function getLogoutPage(){
        Auth::logout();
        return redirect('luis');
       
    }
    public function postLoginAdmin(Request $request){
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::attempt($arr)) {
            return redirect('luis')->with('success', 'Login Success');


        } else {

            return redirect('login')->with('success', 'Incorrect Email or Password');

        }
    }
    // SIGN UP
    public function getSignUpAdmin(){
        return view('login.signUp');
    }


    public function createAdmin(Request $request){ 

        $attributes = array();
        $attributes['email'] = $request->email;
        $attributes['password'] = $request->password;
        $confirm_password = $request->confirm_password;
        $attributes['lever'] = '1';
        $attributes['created_at'] = Carbon::now();
        $attributes['updated_at'] = Carbon::now();
        
        $alreadyAcc = DB::table('users')->where('email', $request->email)->first();

        if($attributes['email'] == null || $attributes['password'] == null || $confirm_password == null){
            return redirect('sign-up')->with('error', 'Create Admin Failure, Email or Password cannot be empty');

        }else{
           
            if($attributes['password'] != $confirm_password){

                return redirect('sign-up')->with('error', 'Create Admin Failure, Passwords do not match');

            }else{
                if($alreadyAcc){

                    return redirect('sign-up')->with('error1', 'Create Admin Failure, email have already use');

                }else{

                    $attributes['password'] = bcrypt($request->password);
                    DB::table('users')->insert($attributes);
                    return redirect('login')->with('create', 'Create account success, Login now');

                }
            }
        }
    }
}
