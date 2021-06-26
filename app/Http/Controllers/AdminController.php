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
        $user = User::count('id');
        $admin = User::where('lever',0)->count('id');
        $category = Category::count('id');
        $type = Type::count('id');
        $game = Game::count('id');
        $app = App::count('id');
   
        $newGame = Game::join('types', 'games.types_id', '=', 'types.id')->
        join('categories','games.categories_id', '=','categories.id')->
        select('games.*','types.typeName','categories.catName')->
        orderByRaw('games.created_at Desc')->limit(5)->get();
        $newApp = App::join('types', 'apps.types_id', '=', 'types.id')->
        join('categories','apps.categories_id', '=','categories.id')->
        select('apps.*','types.typeName','categories.catName')->
        orderByRaw('created_at Desc')->limit(5)->get();
        $newUser = User::orderByRaw('created_at Desc')->limit(5)->get();
       return view('admin/layouts/indexAdmin',compact('user','admin','category','type','game','app','newGame','newApp','newUser'));
       }

}
