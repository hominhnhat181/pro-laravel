<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    protected $table ='posts';
    protected $fillable =[
        'title', 'author', 'desc', 'text', 'categories_id'
    ] ;
    protected function categories(){
        return $this->belongsTo(Category::class);
    }
}
