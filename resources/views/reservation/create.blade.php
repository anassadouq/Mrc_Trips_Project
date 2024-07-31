@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="{{ route('reservation.store') }}" class="my-form">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="nom_voyage" value="{{ $voyage->nom }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date debut :</label>
                        <input type="date" name="dateD" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom :</label>
                        <input type="text" name="prenom" placeholder="Prenom" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="cin" class="form-label">CIN :</label>
                        <input type="text" name="cin" placeholder="CIN" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Telephone :</label>
                        <input type="text" name="tel" placeholder="Telephone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ville_depart" class="form-label">Ville de départ :</label>
                        <input type="text" name="ville_depart" placeholder="Ville de départ" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" name="email" placeholder="exemple@gmail.com" class="form-control" required>
                    </div>
                    <button type="submit" class="my-1 form-control btn btn-dark text-light">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection