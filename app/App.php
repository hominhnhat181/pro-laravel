<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table ='apps';
    protected $fillable =[
        'appName', 'categories_id'
    ] ;
    protected function categories(){
        return $this->belongsTo(Category::class);
    }
}
