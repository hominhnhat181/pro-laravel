<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\GameRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\game;



class GameRepository extends EloquentRepository implements GameRepositoryInterface{

    
    public function getModel()
    {
        return \App\Game::class;
    }
    


    public function getAll(){
        return DB::table('games')
        ->join('types', 'games.types_id', '=', 'types.id')
        ->select('types.*','games.*')
        ->get();
    }


    public function fillType(){
        return DB::table('types')
        ->join('categories','types.categories_id','=','categories.id')
        ->join('games','games.categories_id','=','types.categories_id')
        ->select('types.typeName','types.id')
        ->DISTINCT()->get();
    }

    
    public function fillEdit($id)
    {
        $super = DB::table('games')
        ->join('types', 'games.types_id', '=', 'types.id')
        ->join('categories', 'games.categories_id', '=','categories.id')
        ->select( 'games.desc','games.image','games.link','types.typeName','types.id', 'games.name','games.image', 'games.link', 'games.title',  'games.types_id', 'games.id', 'games.categories_id','categories.catName')->where('games.id', $id) ->limit(12)->get();
        return $super;
    }

   
    public function fillTypeName($id){
       
        // catch types_id
        $typeId = DB::table('games')->where('games.id','=',$id)->value('types_id');
        // catch typeName not have
        $typeList =  DB::table('types')
        ->join('categories','types.categories_id','=','categories.id')
        ->join('games','games.categories_id','=','types.categories_id')
        ->select('types.typeName','types.id')->DISTINCT()
        ->where('types.id','!=', $typeId)
        ->get();
        return $typeList ;
    }
    public function update($id, array $attributes){
       return DB::table('games')
        ->where('games.id', $id)
        ->update($attributes);
    }
    


    
    

   

   
}


