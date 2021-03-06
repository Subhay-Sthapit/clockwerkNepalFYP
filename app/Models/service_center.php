<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\booking;
use Laravel\Scout\Searchable;

class service_center extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'address',
        'phone_number',
        'display_picture',
        'description_picture',
        'short_description',
        'long_description',
    ];

    /**
     * @var mixed
     */


    public function user(){
        return $this->belongsTo('App\Models\user');
    }

    public function bookings(){
        return $this->hasMany(booking::class);
    }

    public function reviews(){
        return $this->hasMany(review::class);
    }
}
