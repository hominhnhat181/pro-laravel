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

    public function types()
    {
        return $this->hasMany('App\Type');
    }
}

