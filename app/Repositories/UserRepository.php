<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends EloquentRepository implements UserRepositoryInterface{


    //lấy model tương ứng
    public function getModel()
    {
        return \App\User::class;
    }




   
}





