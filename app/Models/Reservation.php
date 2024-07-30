<?php

namespace App\Models;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable= [
        'id_voyage',
        'dateD',
        'nom',
        'prenom',
        'cin',
        'tel',
        'ville_depart',
        'email'
    ];

    public function voyage()
    {
        return $this->belongsTo(Voyage::class, 'id_voyage');
    }
}