<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreReservationRequest;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation.index', [
            'reservations' => Reservation::all()
        ]);
    }

    public function create()
    {
        return view('reservation.create');
    }      

    public function store(StoreReservationRequest $request)
    {
        // Prepare data for email
        $data = $request->only([
            'trip_name', 'nom', 'prenom', 'cin', 'tel', 'dateD', 'ville_depart', 'email'
        ]);
    
        // Send email to sadouqanas1@gmail.com
        Mail::to('sadouqanas1@gmail.com')->send(new ContactFormMail($data));
    
        // Redirect to a specific page or route after sending email
        return redirect()->route('landing_page.landing')->with('success', 'Réservation envoyée avec succès');
    }
}