<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Category extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='categories';
    protected $fillable = [
         'catName'
    ];

    // protected function posts(){
//     return $this->belongsToMany(Post::class);
// }
//     /**
//      * The attributes that should be cast to native types.
//      *
//      * @var array
//      */
//     protected $casts = [
//         'category_verified_at' => 'datetime',
//     ];
// }
}

