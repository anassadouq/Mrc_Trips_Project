<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable= [
        'nom'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'id_voyage');
    }
}