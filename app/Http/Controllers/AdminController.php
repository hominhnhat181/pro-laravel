<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepository;
use App\Repositories\interfaces\UserRepositoryInterface as UserInterface;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Auth;
use App\Http\Requests\UserRequest;


class AdminController extends Controller
{

    protected $userRepository;

    public function __construct(UserInterface $adminRepository){

        $this->adminRepository = $adminRepository;

    }

    // Access
    public function index(){
        $data = $this->adminRepository->sidebar();
        return $this->adminRepository->accessLogin();
    }


    public function listAdmin(){
        $data = $this->adminRepository->sidebar();
        $data_ad = $this->adminRepository->getAll();
        return view('admin.user.list_admin', compact('data','data_ad'));
    }


    public function addAdmin(){ 
        $data = $this->adminRepository->sidebar();
        $data_ad = $this->adminRepository->getAll();
        return view('admin.user.add_admin', compact('data','data_ad'));
    }


    public function store(UserRequest $request){ 
        $attributes = $request->all();
        $attributes['password'] = bcrypt($request->password);
        $this->adminRepository->store($attributes);
        return redirect('list-admin')->with('create', 'Create Admin success');
    }


    public function get($id){
        $data = $this->adminRepository->sidebar();
        $data_ed = $this->adminRepository->find($id);
        return view('admin.user.edit_admin', compact('data', 'data_ed'));
    }


    public function update($id, UserRequest $request){
        $attributes = $request->except('_token');
        $attributes['password'] = bcrypt($request->password);
        $this->adminRepository->update($id, $attributes);
        return redirect('list-admin')->with('update', 'Update Admin success');
    }
    

    public function delete($id){
        $this->adminRepository->delete($id);
        return redirect('list-admin')->with('delete', 'Delete Admin success');
    }
}
