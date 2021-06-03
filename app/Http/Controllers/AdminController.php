<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepository;
use App\Repositories\interfaces\UserRepositoryInterface as UserInterface;; 
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Auth;

class AdminController extends Controller
{

    protected $userRepository;

    public function __construct(UserInterface $userRepository){

        $this->userRepository = $userRepository;

    }

    public function index(){
        $data = $this->userRepository->sidebar();

        if ((Auth::user()->lever) < 1) {
            return view('admin.layouts.indexAdmin', compact('data'));
        }else
            return view('login.accessDenied')->with('error','Access Denied');
    }

    public function addAdmin(){ 
        $data = $this->userRepository->sidebar();
        $data_ad = $this->userRepository->getAll();
        return view('admin.user.add_admin', compact('data','data_ad'));

    }


    public function listAdmin(){
        $data = $this->userRepository->sidebar();
        $data_ad = $this->userRepository->getAll();
        return view('admin.user.list_admin', compact('data','data_ad'));
        
    }


    public function store(Request $request){ 

        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $attributes = array();
        $attributes['email'] = $request->email;
        $attributes['password'] = $request->password;
        $attributes['lever'] = '1';
        $attributes['created_at'] = Carbon::now();
        $attributes['updated_at'] = Carbon::now();
        $attributes['password'] = bcrypt($request->password);

        $this->userRepository->store($attributes);
        return redirect('list-admin')->with('create', 'Create Admin success');
    }


    public function get($id){
        $data = $this->userRepository->sidebar();
        $data_ed = $this->userRepository->find($id);
        return view('admin.user.edit_admin', compact('data', 'data_ed'));
    }


    public function update($id, Request $request){

        $attributes = array();
        $attributes['email'] = $request->email;

        // catch user who update
        $us = DB::table('users')->select('email')->where('users.id',$id)->value('email');
        // if use unique before: This cannot update an unedited email 
        if($attributes['email'] == $us){

            $validatedData = $request->validate([ 'password' => 'required|min:8']);
          
            $attributes['password'] = bcrypt($request->password);
            $this->userRepository->update($id, $attributes);
            return redirect('list-admin')->with('update', 'Update Admin success');

        }else{

            $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            ]);
            $attributes['email'] = $request->email;
            $this->userRepository->update($id, $attributes);
            return redirect('list-admin')->with('update', 'Update Admin success');

        }
    }

    public function delete($id)
    {
        $this->userRepository->delete($id);
        return redirect('list-admin')->with('delete', 'Delete Admin success');
    }
}
