<?php

namespace App\Http\Controllers;
use App\Repositories\interfaces\UserRepositoryInterface as UserInterface;
use App\User;
use App\Category;
use App\Type;
use App\Game;
use App\App;
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
        $this->middleware(['auth','admin']);
        $this->adminRepository = $adminRepository;
        $this->adminRepository->sidebar();
    }
    
    // Access
    public function index()
    {
        return view('admin.layouts.indexAdmin');
    }


    public function listAdmin()
    {
        $data_ad = $this->adminRepository->getAll();
        return view('admin.user.list_admin', compact('data','data_ad'));
    }


    public function addAdmin()
    { 
        $data_ad = $this->adminRepository->getAll();
        return view('admin.user.add_admin', compact('data','data_ad'));
    }


    public function store(UserRequest $request)
    { 
        $attributes = $request->all();
        $attributes['password'] = bcrypt($request->password);
        $this->adminRepository->store($attributes);
        return redirect('list-admin')->with('create', 'Create User success');
    }


    public function get($admin_id)
    {
        $data_ed = $this->adminRepository->find($admin_id);
        return view('admin.user.edit_admin', compact('data', 'data_ed'));
    }


    public function update($admin_id, UserRequest $request)
    {
        $attributes = $request->except('_token','_method','password_confirmation');

        if($request->password == null){
            $attributes['password'] = User::where('id',$admin_id)->value('password');
        }
        if($request->avatar == null){
            $attributes['avatar'] = User::where('id',$admin_id)->value('avatar');
        }
        $this->adminRepository->update($admin_id, $attributes);
        return redirect('list-admin')->with('update', 'Update User success');
    }
    

    public function delete($id)
    {
        $this->adminRepository->delete($id);
        return redirect('list-admin')->with('delete', 'Delete User success');
    }

    // 100%

    public function overView(){
        return $this->adminRepository->overView();
    }

}
