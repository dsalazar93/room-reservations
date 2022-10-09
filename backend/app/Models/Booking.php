<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'user_fullname',
        'email',
        'price'
    ];

    public function booking_rooms(){
        return $this->hasMany(BookingRoom::class);
    }
}
