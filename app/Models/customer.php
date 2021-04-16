<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'profile_picture',
        'address',
        'phone_number',
    ];

    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}
