<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'number',
        'description',
        'type_id'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function booking_rooms(){
        return $this->hasMany(BookingRoom::class);
    }
}
