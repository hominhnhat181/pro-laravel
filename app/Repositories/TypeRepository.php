<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\TypeRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Type;

class TypeRepository extends EloquentRepository implements TypeRepositoryInterface{


    //lấy model tương ứng
    public function getModel()
    {
        return \App\Type::class;
    }



   
}


