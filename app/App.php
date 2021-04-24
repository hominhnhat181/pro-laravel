<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table ='apps';
    protected $fillable =[
        'name', 'title','desc'
    ] ;
    protected function categories(){
        return $this->belongsTo(Category::class);
    }
    protected function types(){
        return $this->belongsToMany(Type::class);
    }
}
