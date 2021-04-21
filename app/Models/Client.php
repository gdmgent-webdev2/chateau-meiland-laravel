<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'first_name', 'last_name', 'address', 'postal_code', 'city', 'county', 'email'];
    // alternative
    // protected $guarded = [];

    public function getFullNameAttribute() {
        return "{$this->first_name} {$this->last_name}";
    }
}
