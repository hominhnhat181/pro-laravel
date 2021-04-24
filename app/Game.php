<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table ='games';
    protected $fillable =[
        'name','title','desc' 
    ] ;
    protected function categories(){
        return $this->belongsTo(Category::class);
    }
    protected function types(){
        return $this->belongsToMany(Type::class);
    }
}
