<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\AppRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\App;



class AppRepository extends EloquentRepository implements AppRepositoryInterface{

    
    public function getModel()
    {
        return \App\App::class;
    }
    


    public function getAll(){
        return DB::table('apps')
        ->join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.name','apps.image', 'apps.link', 'apps.title','apps.types_id','apps.id','apps.categories_id')
        ->get();
    }


    public function fillType(){
        return DB::table('types')
        ->join('categories','types.categories_id','=','categories.id')
        ->join('apps','apps.categories_id','=','types.categories_id')
        ->select('types.typeName','types.id')
        ->DISTINCT()->get();
    }

    public function fillEdit($id)
    {
        $super = DB::table('apps')
        ->join('types', 'apps.types_id', '=', 'types.id')
        ->join('categories', 'apps.categories_id', '=','categories.id')
        ->select( 'apps.desc','apps.image','apps.link','types.typeName','types.id', 'apps.name','apps.image', 'apps.link', 'apps.title',  'apps.types_id', 'apps.id', 'apps.categories_id','categories.catName')->where('apps.id', $id) ->limit(12)->get();
        return $super;
    }


    public function fillTypeName($id){

        $typeId = DB::table('apps')->where('apps.id','=',$id)->value('types_id');

        // catch typeName not have
        $typeList =  DB::table('types')
        ->join('categories','types.categories_id','=','categories.id')
        ->join('apps','apps.categories_id','=','types.categories_id')
        ->where('types.id','!=', $typeId)
        ->select('types.typeName','types.id')
        ->DISTINCT()
        ->get();
        return $typeList ;
    }


    public function update($id, array $attributes){
       return DB::table('apps')
        ->where('apps.id', $id)
        ->update($attributes);
    }
    


    
    

   

   
}


