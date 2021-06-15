<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UserRepository extends EloquentRepository implements UserRepositoryInterface{


    //lấy model tương ứng
    public function getModel()
    {
        return \App\User::class;
    }


   



   
}





