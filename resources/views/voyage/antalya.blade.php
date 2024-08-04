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
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
            </style>

            <div class="mx-2">
                <h1 class="text-center" style="font-weight :bold;">Welcome to Antalya Istanbul All Inclusive Summer Trip</h1>
                <p>🛥 Offrez-vous un voyage de rêves à la découverte de Antalya & Istanbul en compagnie de MRC Trips, vous serez éblouis par tant de Magie et beauté </p>
                <h2 class="text-danger">2 Excursions Incluses !!</h2>
                <p>- Sortie en Bateau Pirates à Antalya avec Déjeuner</p>
                <p>- Visite d’Ortakoy & Venezia Mega Outlet à Istanbul</p>
                <p>A Partir de 19 500 Dhs / Package 10 Jours 9 Nuits</p>
                <p>Limited Editions ( Juillet Aout ) </p>

                <h2 class="text-warning">Summer 2024 📆</h2>
                <p>➡ Du 16 au 15 Aout</p>
                <p>➡ Du 13 au 22 Aout</p>
                <p>➡ Du 25 au 03 SEpt</p>

                <h3 class="text-warning">Programme</h3>
                <h3 class="text-primary">Jour 1 : Casablanca - Antalya Istanbul.</h3>
                <p>Vol Casablanca – Antalya via Istanbul </p> 
                <p>Arrivée et Accueil à l’Aéroport par un correspondant de l’Agence.</p> 
                <p>Transfert à l’hôtel de votre choix à Antalya Kemer</p> 
                <p>check-in</p> 

                <h3 class="text-primary">Jour 2 : Expérience Bateau Pirates à Kemer.</h3>
                <p>- Sortie pour une magnifique balade en Bateau Pirates avec déjeuner Inclus, une ambiance de folie durant toute la journée, animation et divertissements !! ( Inclus )</p>

                <h3 class="text-primary">Jour 3 : Antalya All Inclusive Stay</h3>
                <p>- Profitez de votre séjour en All Inclusive</p>
                <p>- Visite d’une journée à Sapanca avec déjeuner ( En Extra )</p>

                <h3 class="text-primary">Jour 4 : Antalya All Inclusive Stay</h3>
                <p>- Profitez de votre séjour en All Inclusive</p> 

                <h3 class="text-primary">Jour 5 : Aqua Land</h3>
                <p>- ( En Extra ) Direction la fameuse cité Aquatique Aqua Land, puis Déjeuner, par la suite la visite de la vieille ville d’Antalya pour la découvrir et ses ruelles et marchés</p>

                <h3 class="text-primary">Jour 6 : Antalya – Istanbul</h3>
                <p>- Check out </p>
                <p>- Transfert à l’Aéroport d’Antalya </p>
                <p>- Vol Antalya – Istanbul</p>
                <p>Arrivée et Accueil à l’Aéroport par un correspondant de l’Agence.</p>
                <p>Transfert et installation à votre Hôtel à Istanbul</p>

                <h3 class="text-primary">Jour 7 : Palais Dolmabahce – Ortakoy – Venezia Mega Outlet</h3>
                <p>- Visite du fameux palais Dolmabahce et son Jardin Impérial  (En Extra ) </p>
                <p>- par la suite la Corniche d’Ortakoy, à ne pas rater, dégustation du Kumpir et les délicieuses gaufres aux fruits ! ( Inclus ) </p>
                <p>- Destination Venezia Mega Outlet pour une expérience Shopping unique ( Inclus )</p>

                <h3 class="text-primary">Jour 8 : Excursion Sapanca</h3>
                <p>- Visite d’une journée à Sapanca et ses paysages extraordinaires ( en Extra )</p>

                <h3 class="text-primary">Jour 9 : Istanbul – Diner Spectacle en Croisière </h3>
                <p>- Journée libre </p>
                <p>- ( En Extra ) Début de soirée ; départ pour un magnifique diner spectacle en croisière ( Turkish Night )</p>

                <h3 class="text-primary">Jour 10 : Dernier jour au Pays des Merveilles</h3>
                <p>- Check out</p>
                <p>- Transfert à l’Aéroport</p>
                <p>- Vol Istanbul Casablanca</p>

                <h3 class="text-warning">Tarifs par Personne :</h3>
                <table width='90%' class="text-center">
                    <tr>
                        <th colspan="5">Miarosa kemer Beach Antalya 5* &  The Parma downtown Istanbul 4*</th>
                    </tr>
                    <tr>
                        <th>Chambre Double</th>
                        <th>Chambre Triple</th>
                        <th>Chambre Single</th>
                        <th>Enf 2-5 ans</th>
                        <th>Enf 5-11ans</th>
                    </tr>
                    <tr>
                        <td>19 500 DHS</td>
                        <td>19 500 DHS</td>
                        <td>27 800 DHS</td>
                        <td>10 800 DHS</td>
                        <td>11 900 DHS</td>
                    </tr>
                </table><br><br>

                <table width='90%' class="text-center">
                    <tr>
                        <th colspan="5">Mirage Park Resort Antalya 5*  & Piya sport à Istanbul 4*</th>
                    </tr>
                    <tr>
                        <th>Chambre Double</th>
                        <th>Chambre Triple</th>
                        <th>Chambre Single</th>
                        <th>Enf 2-5 ans</th>
                        <th>Enf 5-11ans</th>
                    </tr>
                    <tr>
                        <td>22 700 DHS</td>
                        <td>22 700 DHS</td>
                        <td>32 700 DHS</td>
                        <td>10 800 DHS</td>
                        <td>15 500 DHS</td>
                    </tr>
                </table>

                <h3 class="text-warning">Services Compris :</h3>
                <p>- Vol International Aller-Retour Casa – Istanbul - Casa sur Royal Air Maroc</p>
                <p>- Vol Interne Istanbul Antalya Istanbul</p>
                <p>- 5 Nuits en All Inclusive à Antalya à Kemer dans l’hôtel de votre choix</p>
                <p>- 4 Nuits avec petit déjeuner à Istanbul dans l’hôtel de votre choix.</p>
                <p>- Transferts Aéroports Hôtels – Aller-Retour.</p>
                <p>- Excursions :</p>
                <p class="text-danger">1 - Sortie en Bateau Pirates à Antalya avec Déjeuner</p>
                <p class="text-danger">2 - Visite d’Ortakoy & Venezia Mega Outlet à Istanbul</p>

                <h3 class="text-warning">En Option :</h3>
                <p>- Aqua Land : 500 dhs.</p>
                <p>- Excursion Sapanca : 350 dhs</p>
                <p>- Diner Spectacle : 450 dhs</p>
                <p>- Ticket Dolmabahce : à prendre sur place</p>
            </div><br><br>

            <h2 class="text-center">RESERVATION : </h2>
            <form method="post" action="{{ route('reservation.store') }}" class="form-container">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="trip_name" value="antalya-istanbul-summer-2024">
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