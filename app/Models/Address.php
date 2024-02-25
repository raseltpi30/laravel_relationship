<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $table = 'addresses';
    protected $fillable = [
        'user_id',
        'state',
        'country',
        'city',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
