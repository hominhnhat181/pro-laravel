<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;
use App\Category;
use App\Type;
use App\Game;
use App\App;


class UserRepository extends EloquentRepository implements UserRepositoryInterface{


    //lấy model tương ứng
    public function getModel()
    {
        return \App\User::class;
    }

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





