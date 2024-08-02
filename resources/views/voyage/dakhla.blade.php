@extends('layouts.app')
@section('content')
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>

            <style>
                h3, h2{
                    font-weight:bold;
                }
                .form-container {
                    max-width: 500px;
                    margin: auto;
                    padding: 10px;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                    background-color: white;
                }
            </style>

            <div class="mx-2">
                <h1 class="text-center" style="font-weight :bold;">Dakhla Road Trip Best Program Morocco </h1>
                
                <h2 class="text-danger">Expérience Unique à La Découverte du Grand Sud  !!</h2>
                <p>Un Voyage de Rêve à faire au moins une fois dans la vie!! </p>
                <p>Célébrez votre été 2024 en Rejoignant la Meilleure Aventure de MRC Trips par Excellence Un Merveilleux Séjour de 
                    <b>8 Jours / 7 Nuits </b>
                </p>
                <p>🏁 Rabat - Casablanca - Marrakech - Agadir - Legzira - Tantan - Chbika Beach - Trou du Diable - Akhfennir - Laayoune - Terfaya - Boujdour - Dakhla - Dune Blanche  🏁</p>

                <h2 class="text-warning">Limited Editions : Summer 2024 📆</h2>
                <p>➡ Du 17 au 25 Aout</p>
                <p>➡ Du 07 au 15 Septembre</p>

                <h3 class="text-primary">Jour 1 - Que l’Aventure Commence !!</h3>
                <p><b>21 h 00 :</b> Départ depuis Rabat.</p> 
                <p><b>21 h 45 :</b> Départ depuis Mohammedia.</p> 
                <p><b>23 h 00 :</b> Départ depuis Casablanca.</p> 
                <p><b>03 h 00 :</b> Départ depuis Marrakech.</p> 
                <p><b>06 h 00 :</b> Départ depuis Agadir.</p> 

                <h3 class="text-primary">Jour 2 - Mirleft - Legzira - Tantan - Akhfennir.</h3>
                <p>- Petit Déjeuner au Nid d’Aigle à proximité de Mirleft. </p>
                <p>- Déjeuner à Legzira / Continuation vers Akhfennir </p>
                <p>- Arrivée à Akhfennir / Installation à Hôtel Sahara Beach 3*.</p> 
                <p>- Diner / Nuitée.</p>

                <h3 class="text-primary">Jour 3 - Tantan Plage - Boujdour - Dakhla.</h3>
                <p>- Petit Déjeuner / Départ vers Dakhla. </p>
                <p>- Déjeuner à Boujdour. </p>
                <p>- Arrivée à Dakhla / Installation à Hotel Al Baraka 3* en plein Centre-ville Dakhla</p>
                <p>- Diner et Nuitée.</p>

                <h3 class="text-primary">Jour 4 - Dakhla - La Dune Blanche - Source Asmaa.</h3>
                <p>- Petit Déjeuner / Départ vers La Dune Blanche en 4x4.</p> 
                <p>- Arrivée à la Dune Blanche / Relaxation / Baignade.</p> 
                <p>- Arrivée à la Source d’Asmaa / Source d'eau chaude naturelle. </p>
                <p>- Déjeuner à Boutalha / Visite de la Ferme des Autruches. </p>
                <p>- Diner / Sortie Nocturne / Jeux de société / Nuitée.</p>

                <h3 class="text-primary">Jour 5 - Port de Dakhla - Plage PK25 / ile de Dragon.</h3>
                <p>- Petit Déjeuner / Visite du Port de Dakhla. </p>
                <p>- Départ vers la fabuleuse Plage 25. </p>
                <p>- Déjeuner / Possibilité de se rendre à l’ile du Dragon quand la marée est basse / Activités / Baignade ... </p>
                <p>- Diner / Sortie Nocturne / Jeux de société / Nuitée.</p>

                <h3 class="text-primary">Jour 6 – Quads Adventure - Journée Bronzette / Baignade</h3>
                <p>- Petit Déjeuner / </p>
                <p>- Départ pour une journée 100% Plage / Activités</p>

                En Extra :
                <p>- Quads / Buggy Adventure pour un magnifique Circuit plein d’Adrénaline et découverte</p>
                <p>- Diner / Sortie Nocturne / Jeux de société / Nuitée.</p>

                <h3 class="text-primary">Jour 7 - Dakhla - Laayoune  / Retour par Avion</h3>
                <p>- Petit Déjeuner / Départ vers Terfaya. </p>
                <p>- Déjeuner</p>
                <p>- Arrivée à Laayoune Mersa / Installation à Hôtel Beau Port. </p>
                <p>- Visite à Laayoune. </p>
                <p>- Diner et Nuitée.</p>

                <h3 class="text-primary">Jour 8 – Laayoune - Trou du Diable - Chbika - Mirleft.</h3>
                <p>- Petit Déjeuner / Départ vers Mirleft. </p>
                <p>- Pause Photo au Trou du Diable & Chbika Beach.</p>
                <p>- Déjeuner.</p>
                <p>- Arrivée à Mirleft / Installation à l’Auberge du Nid d’Aigle.</p>
                <p>* Activité du Parapente en Extra</p>
                <p>- Dîner / Dernière soirée en groupe / Nuitée.</p>

                <h3 class="text-primary">Jour 9 – Fin de l’Aventure & Retour à la réalité.</h3>
                <p>- Petit Déjeuner / Détente / Piscine ... </p>
                <p>- Retour à Agadir, Marrakech, Casablanca, Mohammedia et Rabat. </p>
                <p>- Arrivée à la Maison avec plein de beaux souvenirs gravés à Jamais</p>
                <b>Chaque Voyage a une fin, mais avec MRC Trips, chaque Fin promet un nouveau départ ! </b><br><br>

                <h2 class="text-warning">Services Compris :</h2>
                <p>- Transport en Mini Bus Touristique Climatisé.</p>
                <p>- 1 Nuitée à Akhfennir à Hotel Sahara Beach 3*</p>
                <p>- 4 Nuitée à Dakhla à hotel Al Baraka 3*</p>
                <p>- 1 Nuitée à Hotel BeauPort 3* à El Marsa Laayoune</p>
                <p>- 1 Nuitée à Auberge Le Nid d’Aigle de Luxe à Mirleft</p>
                <b>Hébergement en Chambres Doubles ou Triples </b><br><br>

                <h2 class="text-warning">Restauration en Demi-Pension :</h2>
                <p>- Tous les Diners et les Petit déjeuners du Séjour.</p>

                <h2 class="text-warning">Activités / Excursions:</h2>
                <p>- Excursion en 4x4 à Dakhla : Dune Blanche / Source Asmaa / Ferme des Autruches ... </p>
                <p>- Excursion PK 25 / Ile de Dragon.</p>
                <p>- Visite du Port de Dakhla.</p>
                <p>- Accompagnement / Animation MRC Trips</p>

                <b>5 400 Dhs en Demi-Pension  / Road Trip</b><br>
                <b>Pack avec retour par avion depuis Dakhla 5 750 Dhs en Demi-Pension </b><br>
                <b>La Bonne Humeur / Esprit d’Aventure sont exigés !!!</b> 
            </div><br><br>

            <h2 class="text-center">RESERVATION : </h2>
            <form method="post" action="{{ route('reservation.store') }}" class="form-container">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="trip_name" value="dakhla-road-trip">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom" class="form-label">Prenom :</label>
                        <input type="text" name="prenom" placeholder="Prenom" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cin" class="form-label">CIN :</label>
                    <input type="text" name="cin" placeholder="CIN" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tel" class="form-label">Telephone :</label>
                    <input type="text" name="tel" placeholder="Telephone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Date de départ :</label>
                    <input type="date" name="dateD" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="ville_depart" class="form-label">Ville de départ :</label>
                    <input type="text" name="ville_depart" placeholder="Ville de départ" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" name="email" placeholder="exemple@gmail.com" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-dark btn-block">Réserver</button>
            </form>
        </body>
    </html>
@endsection