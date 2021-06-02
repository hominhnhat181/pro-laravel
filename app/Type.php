<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table ='types';
    protected $fillable = [
         'typeName','categories_id',
    ];


    protected function categories(){
        return $this->belongsTo(Category::class);
    }

}

