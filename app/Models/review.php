<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $fillable=[
        'customer_id',
        'service_center_id',
        'rating',
        'review',
    ];

    public function customer(){
        return $this->belongsTo(customer::class);
    }

    public function service_center(){
        return $this->belongsTo(service_center::class);
    }
}
