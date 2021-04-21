<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'room_id', 'start_date', 'end_date'];

    public function Room() {
        return $this->belongsTo(Room::class);
    }

    public function Client() {
        return $this->belongsTo(Client::class);
    }
}
