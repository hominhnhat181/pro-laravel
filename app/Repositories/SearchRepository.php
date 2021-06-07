<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\SearchRepositoryInterface;
use Illuminate\Http\Request;
use App\Category;
use App\Type;
use App\Game;
use App\App;

class SearchRepository extends EloquentRepository implements SearchRepositoryInterface{

    //lấy model tương ứng
    public function getModel()
    {
        return \App\Category::class;
    }

    
    public function searchLogic($attributes){
        $cat = Category::get();
        $typ = Type::join('categories','categories.id','=','types.categories_id')->get();

        $resultGame = Game::join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.name','games.image','games.desc','games.title', 'games.link','games.types_id', 'games.id')
        ->where('name','LIKE','%'.$attributes.'%')
        ->orWhere('types.typeName','LIKE','%'.$attributes.'%')
        ->paginate(5);

        $resultApp = App::join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.name','apps.image','apps.desc','apps.title', 'apps.link','apps.types_id', 'apps.id')
        ->where('name','LIKE','%'.$attributes.'%')
        ->orWhere('types.typeName','LIKE','%'.$attributes.'%')
        ->paginate(5);
        
        return view('layouts.search', compact('resultGame','resultApp','cat','typ'));
    }
}

