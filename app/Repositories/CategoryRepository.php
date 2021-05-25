<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Category;

class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface{

    
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Category::class;
    }







   
}


