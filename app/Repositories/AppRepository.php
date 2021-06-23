<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\AppRepositoryInterface;
use App\App;
use App\Type;




class AppRepository extends EloquentRepository implements AppRepositoryInterface{

    
    public function getModel()
    {
        return \App\App::class;
    }
    


    public function getAll(){
        return App::join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.name','apps.image', 'apps.link', 'apps.title','apps.types_id','apps.id','apps.categories_id')->orderBy('apps.id')
        ->get();
    }


    public function fillType(){
        return Type::join('categories','types.categories_id','=','categories.id')
        ->join('apps','apps.categories_id','=','types.categories_id')
        ->select('types.typeName','types.id')
        ->DISTINCT()->get();
    }

    public function fillEdit($id)
    {
        $super = App::join('types', 'apps.types_id', '=', 'types.id')
        ->join('categories', 'apps.categories_id', '=','categories.id')
        ->select( 'apps.desc','apps.image','apps.link','types.typeName','types.id', 'apps.name','apps.image', 'apps.link', 'apps.title',  'apps.types_id', 'apps.id', 'apps.categories_id','categories.catName')->where('apps.id', $id) ->limit(12)->get();
        return $super;
    }


    public function fillTypeName($id){

        $typeId = App::where('apps.id','=',$id)->value('types_id');

        // catch typeName not have
        $typeList =  Type::join('categories','types.categories_id','=','categories.id')
        ->join('apps','apps.categories_id','=','types.categories_id')
        ->where('types.id','!=', $typeId)
        ->select('types.typeName','types.id')
        ->DISTINCT()
        ->get();
        return $typeList ;
    }


    public function update($id, array $attributes){
       return App::where('apps.id', $id)
        ->update($attributes);
    }
    


    
    

   

   
}


