<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Mass Assignment
     */
    protected $fillable = [
        'user_id',
        'title', 
        'body', 
        'slug',
    ];

    /**
     * DB relations one to Many
     * posts - users 
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
