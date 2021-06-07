<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\interfaces\UserRepositoryInterface as UserInterface;
use App\Http\Requests\UserRequest;
use Validator;
use Redirect;
use User;//user model can kiem tra
use Auth; //use thư viện auth
use DB;

use Carbon\Carbon;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserInterface $userRepository){
        $this->userRepository = $userRepository;
    }
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
        $arr = $request->only('email','password');
        return $this->userRepository->checkLogin($arr);
    }


    // SIGN UP
    public function getSignUpAdmin(){
        return view('login.signUp');
    }


    public function createAdmin(UserRequest $request){
        $attributes = $request->except('_token','confirm_password');
        $attributes['password'] = bcrypt($request->password);
        DB::table('users')->insert($attributes);
        return redirect('login')->with('create', 'Create account success, Login now');
    }
}
