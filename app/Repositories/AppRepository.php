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
        ->limit(12)
        ->get();
    }


    public function fillType(){
        return DB::table('types')->join('apps', 'types.id','=','apps.types_id')->select('types.typeName')->DISTINCT()->get();
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
         // catch types_id 
         $super = DB::table('apps')
        ->join('types', 'apps.types_id', '=', 'types.id')
        ->join('categories', 'apps.categories_id', '=','categories.id')
        ->select( 'apps.desc','apps.image','apps.link','types.typeName','types.id', 'apps.name','apps.image', 'apps.link', 'apps.title',  'apps.types_id', 'apps.id', 'apps.categories_id','categories.catName')->where('apps.id', $id) ->limit(12)->get();

        // catch types_id
        $typeId = DB::table('apps')->where('apps.id','=',$id)->value('types_id');

        // catch typeName not have
        $typeList = DB::table('apps')
        ->join('types','apps.types_id', '=', 'types.id')
        ->select('types.typeName')->DISTINCT()
        ->where('types.id','!=', $typeId)
        ->where('apps.id','!=', $super.'.types_id')->get();
        return $typeList ;
    }


    public function update($id, array $attributes){
       return DB::table('apps')
        ->join('types', 'apps.types_id','=','types.id')
        ->where('apps.id', $id)
        ->update($attributes);
    }
    


    
    

   

   
}


