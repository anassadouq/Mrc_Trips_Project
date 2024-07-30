<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\Reservation;
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

    public function create($id)
    {
        $voyage = Voyage::findOrFail($id); // Ensure that Voyage is the correct model
        return view('reservation.create', compact('voyage'));
    }   

    public function store(StoreReservationRequest $request)
    {
        // Create and save the reservation
        $reservation = new Reservation();
        $reservation->id_voyage = $request->input('id_voyage');
        $reservation->dateD = $request->input('dateD');
        $reservation->nom = $request->input('nom');
        $reservation->prenom = $request->input('prenom');
        $reservation->cin = $request->input('cin');
        $reservation->tel = $request->input('tel');
        $reservation->ville_depart = $request->input('ville_depart');
        $reservation->email = $request->input('email');
        $reservation->save();
    
        // Get the voyage name
        $voyage = Voyage::find($request->input('id_voyage'));
    
        // Prepare data for email
        $data = $request->only([
            'dateD', 'nom', 'prenom', 'cin', 'tel', 'ville_depart', 'email'
        ]);
        $data['nom_voyage'] = $voyage->nom;
    
        // Send email to sadouqanas1@gmail.com
        Mail::to('sadouqanas1@gmail.com')->send(new ContactFormMail($data));
    
        // Redirect to a specific page or route after saving
        return redirect()->route('slider.slider')->with('success', 'Réservation enregistrée avec succès');
    }          

    public function show($voyageId)
    {
        $voyage = Voyage::find($voyageId);
        $reservations = Reservation::where('id_voyage', $voyageId)->get();
        return view('reservation.show', compact('reservations', 'voyage'));
    }
}