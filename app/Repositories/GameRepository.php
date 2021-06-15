<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\GameRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Game;
use App\Type;



class GameRepository extends EloquentRepository implements GameRepositoryInterface{

    
    public function getModel()
    {
        return \App\Game::class;
    }
    


    public function getAll(){
        return Game::join('types', 'games.types_id', '=', 'types.id')
        ->select('types.*','games.*')->orderBy('games.id')
        ->get();
    }


    public function fillType(){
        return Type::join('categories','types.categories_id','=','categories.id')
        ->join('games','games.categories_id','=','types.categories_id')
        ->select('types.typeName','types.id')
        ->DISTINCT()->get();
    }

    
    public function fillEdit($id)
    {
        $super = Game::join('types', 'games.types_id', '=', 'types.id')
        ->join('categories', 'games.categories_id', '=','categories.id')
        ->select('games.desc','games.image','games.link','types.typeName','types.id', 'games.name','games.image', 'games.link', 'games.title',  'games.types_id', 'games.id', 'games.categories_id','categories.catName')->where('games.id', $id) ->limit(12)->get();
        return $super;
    }

   
    public function fillTypeName($id){
        // catch types_id
        $typeId = Game::where('games.id','=',$id)->value('types_id');
        // catch typeName not have
        $typeList =  Type::join('categories','types.categories_id','=','categories.id')
        ->join('games','games.categories_id','=','types.categories_id')
        ->select('types.typeName','types.id')->DISTINCT()
        ->where('types.id','!=', $typeId)
        ->get();
        return $typeList ;
    }
    public function update($id, array $attributes){
       return Game::where('games.id', $id)
        ->update($attributes);
    }
    


    
    

   

   
}


