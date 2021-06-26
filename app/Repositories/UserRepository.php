<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;
use App\Category;
use App\Type;
use App\Game;
use App\App;


class UserRepository extends EloquentRepository implements UserRepositoryInterface{


    //lấy model tương ứng
    public function getModel()
    {
        return \App\User::class;
    }

    



   
}





