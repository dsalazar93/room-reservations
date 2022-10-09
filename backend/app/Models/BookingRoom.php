<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRoom extends Model
{
    use HasFactory;

    protected $table = 'booking_rooms';

    protected $fillable = [
        'booking_id',
        'room_id',
    ];

    public function rooms(){
        return $this->belongsTo(Room::class);
    }

    public function booking(){
        return $this->belongsTo(Booking::class);
    }
}
