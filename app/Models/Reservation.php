<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $casts = [
        'start_date' => 'date', // date = Carbon instance
        'end_date' => 'date',
    ];
    protected $fillable = ['client_id', 'room_id', 'start_date', 'end_date'];

    public function Room() {
        return $this->belongsTo(Room::class);
    }

    public function Client() {
        return $this->belongsTo(Client::class);
    }
}
