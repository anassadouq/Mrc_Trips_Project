<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable= [
        'trip_name',
        'nom',
        'prenom',
        'cin',
        'tel',
        'dateD',
        'ville_depart',
        'email'
    ];
}