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
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userRepository;

    public function __construct(UserInterface $adminRepository){
        $this->middleware(['auth','verified']);
        $this->adminRepository = $adminRepository;

    }
    
    // Access
    public function index(){
        $data = $this->adminRepository->sidebar();
        return $this->adminRepository->accessLogin($data);
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
        return redirect('list-admin')->with('create', 'Create User success');
    }


    public function get($admin_id){
        $data = $this->adminRepository->sidebar();
        $data_ed = $this->adminRepository->find($admin_id);
        return view('admin.user.edit_admin', compact('data', 'data_ed'));
    }


    public function update($admin_id, UserRequest $request){
        $attributes = $request->except('_token','_method');
        $attributes['password'] = bcrypt($request->password);
        $this->adminRepository->update($admin_id, $attributes);
        return redirect('list-admin')->with('update', 'Update User success');
    }
    

    public function delete($id){
        $this->adminRepository->delete($id);
        return redirect('list-admin')->with('delete', 'Delete User success');
    }
}
