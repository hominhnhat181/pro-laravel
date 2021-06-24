<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PageRequest;
use App\User;


use App\Repositories\interfaces\PageRepositoryInterface as PageInterface; 

class PageController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $pageRepository;

    public function __construct(PageInterface $pageRepository){
        // $this->middleware(['auth','verified']);
        $this->pageRepository = $pageRepository;
        $this->pageRepository->shareHeadFoot();
    }
    

    public function getIndex(){
        return view('layouts.index');
    }


    public function getObject(){
        return $this->pageRepository->getObject();
    }
    

    public function getContact(){
        return $this->pageRepository->getContact();
    }
    

    public function getGame($catId){
       return $this->pageRepository->getGame($catId);
    }
    

    public function getApp($catId){
        return $this->pageRepository->getApp($catId);
    }


    public function getType($catId,$id){
        return $this->pageRepository->getType($catId,$id);
    }


    public function getDetail($types_id,$id){
        return $this->pageRepository->getDetail($types_id,$id);
    }

    public function accountSetting($authId){
        $auth = User::where('id',$authId)->get();
        return view('auth.authSetting',compact('auth'));
    }




    // trả về dữ liệu khác nhau từ login socialize và register(img)
    // validation (origin password, new_password-confirm_password)
    public function authUpdate($auth_id, PageRequest $request)
    {
        $password = User::where('id',$auth_id)->value('password');
        $attributes = $request->except('_token','_method','new_password','avatar_origin','confirm_password');

        if(Auth::user()->provider == null || Auth::user()->provider == 2){
            // k cập nhật mk
            if($request->avatar == null){
                $attributes['avatar'] = $request->avatar_origin;
                if (Auth::user()->password == 'nothing') {
                    if($request->password == null ){
                        $attributes['password'] = Auth::user()->password;
                    }else{
                        if($request->password == $request->confirm_password){
                            $attributes['password'] = bcrypt($request->password);
                        }
                        else{
                            return redirect('account'.$auth_id)->with('config_password_false', 'Config password is not correct , Update failed');
                        }
                    }
                // mk != nothing
                }else{
                    // check origin mk
                    if($request->password == null ){
                        $attributes['password'] = Auth::user()->password;
                    }else{
                        if(Hash::check($request->password,Auth::user()->password)) {
                            // config mk mới trùng nhau
                            if($request->new_password == $request->confirm_password){
                                $attributes['password'] = bcrypt($request->new_password);
                            }
                            else{
                                return redirect('account'.$auth_id)->with('config_password_false', 'Config password is not correct , Update failed');
                            }
                        }
                        else{
                            return redirect('account'.$auth_id)->with('origin_password', 'Password is not correct , Update failed');
                        }
                    }
                }
            }
            else{
                $attributes['avatar'] = $request->avatar;
                if (Auth::user()->password == 'nothing') {
                    if($request->password == null ){
                        $attributes['password'] = Auth::user()->password;
                    }else{
                        if($request->password == $request->confirm_password){
                            $attributes['password'] = bcrypt($request->password);
                        }
                        else{
                            return redirect('account'.$auth_id)->with('config_password_false', 'Config password is not correct , Update failed');
                        }
                    }
                // mk != nothing
                }else{
                    // check origin mk
                    if($request->password == null ){
                        $attributes['password'] = Auth::user()->password;
                    }else{
                        if(Hash::check($request->password,Auth::user()->password)) {
                            // config mk mới trùng nhau
                            if($request->new_password == $request->confirm_password){
                                $attributes['password'] = bcrypt($request->new_password);
                            }
                            else{
                                return redirect('account'.$auth_id)->with('config_password_false', 'Config password is not correct , Update failed');
                            }
                        }
                        else{
                            return redirect('account'.$auth_id)->with('origin_password', 'Password is not correct , Update failed2');
                        }
                    }
                }
            }
        }
        else{
            // provider 1 chưa có mk
            if ($request->password == null) {
                $attributes['password'] = Auth::user()->password;
                // p1 k có avatar
                if($request->avatar == null){
                    $attributes['avatar'] = $request->avatar_origin;
                }
                else{
                    // provider phai = 2
                    $attributes['avatar'] = $request->avatar;
                    $attributes['provider'] = 2;
                }
            }
            // p1 có request mk
            else{
                // p1 k có avatar
                if($request->avatar == null){
                    $attributes['avatar'] = $request->avatar_origin;
                    // p1 nhập mk đúng mk cũ
                    if( Auth::user()->password == 'nothing'){
                        // nhập lại mk chính xác
                        if($request->password == $request->confirm_password){
                            $attributes['password'] = bcrypt($request->password);
                        }
                        else{
                            return redirect('account'.$auth_id)->with('config_password_false', 'Config password is not correct , Update failed');
                        }
                    }else{
                        // p1 đã thây đổi mk
                        if(Hash::check($request->password,Auth::user()->password)) {
                            // config mk mới trùng nhau
                            if($request->new_password == $request->confirm_password){
                                $attributes['password'] = bcrypt($request->new_password);
                            }
                            else{
                                return redirect('account'.$auth_id)->with('config_password_false', 'Config password is not correct , Update failed');
                            }
                        }
                        else{
                            return redirect('account'.$auth_id)->with('origin_password', 'Password is not correct , Update failed');
                        }
                    }
                }
                // p1 có ảnh, có mk
                else{
                    $attributes['avatar'] = $request->avatar;
                    $attributes['provider'] = 2;
                    if( Auth::user()->password == 'nothing'){
                        // nhập lại mk chính xác
                        if($request->password == $request->confirm_password){
                            $attributes['password'] = bcrypt($request->password);
                        }
                        else{
                            return redirect('account'.$auth_id)->with('config_password_false', 'Config password is not correct , Update failed');
                        }
                    }
                    else{
                        // p1 đã thây đổi mk
                        if(Hash::check($request->password,Auth::user()->password)) {
                            // config mk mới trùng nhau
                            if($request->new_password == $request->confirm_password){
                                $attributes['password'] = bcrypt($request->new_password);
                            }
                            else{
                                return redirect('account'.$auth_id)->with('config_password_false', 'Config password is not correct , Update failed');
                            }
                        }
                        else{
                            return redirect('account'.$auth_id)->with('origin_password', 'Password is not correct , Update failed');
                        }
                    }
                }
            }
        }
        $this->pageRepository->update($auth_id, $attributes);
        return redirect('account'.$auth_id)->with('update', 'Update success');
    }
}
