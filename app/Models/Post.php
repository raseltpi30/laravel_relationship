<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'status',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function tags(){
        return $this->belongsToMany('App\Models\Tag','post_tags','post_id','tag_id');
    }
}
