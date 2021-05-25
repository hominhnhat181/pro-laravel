<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\ObjectRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\game;
use App\App;


class ObjectRepository extends EloquentRepository implements ObjectRepositoryInterface{

    
    //lấy model tương ứng
    
    public function __construct($categori_name){

        $this->categori_name = $categori_name;

    }

    public function getModel()
    {
        return \App\categori_name::class;
    }


    public function listObject($categori_name, $categori_id){
        $test1 = DB::table($categori_name)
        ->join('types', $categori_name.'.types_id', '=', 'types.id')
        ->select( 'types.typeName', $categori_name.'.name',$categori_name.'.image', $categori_name.'.link', $categori_name.'.title',  $categori_name.'.types_id', $categori_name.'.id', $categori_name.'.categories_id')
        ->limit(12)
        ->get();    
        return $test1;
    }

   
}


