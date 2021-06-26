<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\SearchRepositoryInterface;
use App\User;
use App\Game;
use App\App;

class SearchRepository extends EloquentRepository implements SearchRepositoryInterface{

    //lấy model tương ứng
    public function getModel()
    {
        return \App\Category::class;
    }

    
    public function pageSearch($attributes){
      
        $resultApp = App::join('types', 'apps.types_id', '=', 'types.id')
        ->join('categories','categories.id','=','apps.categories_id')
        ->select( 'types.typeName','categories.catName', 'apps.*')
        ->where('name','LIKE','%'.$attributes.'%')
        ->orWhere('types.typeName','LIKE','%'.$attributes.'%');

        $allResult = Game::join('types', 'games.types_id', '=', 'types.id')
        ->join('categories','categories.id','=','games.categories_id')
        ->select( 'types.typeName','categories.catName', 'games.*')
        ->where('name','LIKE','%'.$attributes.'%')
        ->orWhere('types.typeName','LIKE','%'.$attributes.'%')->union($resultApp)
        ->paginate(5);
        
        return view('layouts.search', compact('allResult','typ'));
    }
    public function adminSearch($attributes){

        $resultApp = App::join('types', 'apps.types_id', '=', 'types.id')
        ->join('categories','categories.id','=','apps.categories_id')
        ->select( 'types.typeName','categories.catName', 'apps.*')
        ->where('name','LIKE','%'.$attributes.'%')
        ->orWhere('types.typeName','LIKE','%'.$attributes.'%');

        $allResult = Game::join('types', 'games.types_id', '=', 'types.id')
        ->join('categories','categories.id','=','games.categories_id')
        ->select( 'types.typeName','categories.catName', 'games.*')
        ->where('name','LIKE','%'.$attributes.'%')
        ->orWhere('types.typeName','LIKE','%'.$attributes.'%')->union($resultApp)
        ->paginate(8);
        
        return view('admin.layouts.searchAdmin', compact('allResult'));
    }
}

      