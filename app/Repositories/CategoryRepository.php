<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface{

    //lấy model tương ứng
    public function getModel()
    {
        return \App\Category::class;
    }

}


