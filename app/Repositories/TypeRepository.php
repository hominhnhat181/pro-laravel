<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\TypeRepositoryInterface;
use App\Type;
use App\Category;


class TypeRepository extends EloquentRepository implements TypeRepositoryInterface{


    //lấy model tương ứng
    public function getModel()
    {
        return \App\Type::class;
    }
    
    public function getAll(){
        return Type::join('categories', 'types.categories_id', '=', 'categories.id')
        ->select('categories.*','types.*')
        ->get();
    }
    public function fillCategory(){
        return Category::get();
    }


   
}


