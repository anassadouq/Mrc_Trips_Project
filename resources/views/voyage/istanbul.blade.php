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
                <h1 class="text-center" style="font-weight :bold;">Welcome to Istanbul Magical Holidays Summer 2024</h1>

                <p>🛥 Offrez-vous un voyage de rêves à la découverte de Istanbul la Cité Enthousiasmante à cheval sur deux Continents en compagnie de MRC Trips, vous serez éblouis par tant d’histoire et beauté </p>

                <h2 class="text-danger">- Sortie en Croisière dans le Bosphore</h2>
                <p class="text-danger">- Visite Iles des Princesses avec Déjeuner</p>
                <p class="text-danger">- Diner Spectacle en Croisière ( Turkish Night )</p>

                <h3 class="text-warning">Summer 2024</h3>
                ➡ Du 16 au 23 Aout <br>
                ➡ Du 23 au 30 Aout <br>
                ➡ Du 30 Aout au 06 Sept <br>
                ➡ Du 06 au 13 Sept <br>
                ➡ Du 13 au 20 Sept <br>
                ➡ Du 20 au 27 Sept <br>
                ➡ Du 27 Sept au 04 Oct <br>
                ➡ Du 28 Sept au 05 Oct <br><br>

                <h3 class="text-warning">Programme</h3>
                <h3 class="text-primary">Jour 1 : Casablanca - Istanbul</h3>
                <p>Vol Casablanca – Istanbul </p> 
                <p>Arrivée et Accueil à l’Aéroport par un correspondant de l’Agence.</p> 
                <p>Transfert à l’hôtel de votre choix </p> 
                <p>check-in</p>

                <h3 class="text-primary">Jour 2 : Expérience Croisière en Bosphore  ( Incluse )</h3>
                <p>Sortie pour une magnifique balade en Croisière tout au long du Bosphore, un paysage magnifique au rendez-vous.</p>

                <h3 class="text-primary">Jour 3 : Sapanca </h3>
                <p>Visite d’une journée à Sapanca avec déjeuner ( En Extra )</p>

                <h3 class="text-primary">Jour 4 : Expérience Romantique – Iles des Princesses  ( Incluse )</h3>
                <p>- Visite des Iles des Princesses avec déjeuner, un archipel d’iles situé dans la mer de Marmara, un endroit unique.</p>
                <p>- Arrêt à l’Ile Principale Buyukada.</p> 

                <h3 class="text-primary">Jour 5 : Journée Libre / Divertissement / Shopping</h3>
                <p>Journée libre à Istanbul</p>

                <h3 class="text-primary">Jour 6 : Bursa</h3>
                <p>Visite d’une journée à Bursa avec déjeuner ( En Extra )</p>

                <h3 class="text-primary">Jour 7 : Diner Spectacle en Croisière</h3>
                <p>- Journée libre </p>
                <p>Journée libre </p>

                <h3 class="text-primary">Jour 8 : Dernier jour au Pays des Merveilles</h3>
                <p>- Check out </p>
                <p>- Transfert à l’Aéroport</p>
                <p>- Vol Casablanca Istanbul</p>

                <h3 class="text-warning">Tarifs par Personne :</h3>
                <table width="90%" class="text-center">
                    <tr>
                        <th>Hotels</th>
                        <th>Quartier</th>
                        <th>Double</th>
                        <th>Triple Extra BED</th>
                        <th>Single</th>
                        <th>2-5 ans</th>
                        <th>5-11 ans</th>
                    </tr>
                    <tr class="bg-info">
                        <td>ALFA HOTEL 3*</td>
                        <td>OLD CITY</td>
                        <td>9900 DH</td>
                        <td>9900 DH</td>
                        <td>12300 DH</td>
                        <td>6800 DH</td>
                        <td>8800 DH</td>
                    </tr>
                    <tr>
                        <td>THE BIANCHO 4*</td>
                        <td>OLD CITY</td>
                        <td>10900 DH</td>
                        <td>10900 DH</td>
                        <td>13300 DH</td>
                        <td>6800 DH</td>
                        <td>8900 DH</td>
                    </tr>
                    <tr class="bg-info">
                        <td>THE BIANCHO 4*</td>
                        <td>PERA TAKSIM</td>
                        <td>11500  DH</td>
                        <td>11500  DH</td>
                        <td>14700  DH</td>
                        <td>6800  DH</td>
                        <td>9500 DH</td>
                    </tr>
                    <tr>
                        <td>SEMINAL HOTEL 4*</td>	
                        <td>TAKSIM</td>
                        <td>11900  DH</td>
                        <td>11900  DH</td>
                        <td>15500  DH</td>
                        <td>6800  DH</td>
                        <td>9600 DH</td>
                    </tr>
                    <tr class="bg-info">
                        <td>DARKHIL 4*</td>
                        <td>OLD CITY</td>
                        <td>11900  DH</td>
                        <td>11900  DH</td>
                        <td>14900  DH</td>
                        <td>6800  DH</td>
                        <td> 9600 DH</td>
                    </tr>
                    <tr>
                        <td>SORRISO DUE 4*</td>
                        <td>OLD CITY</td>
                        <td>11900  DH</td>
                        <td>11900  DH</td>
                        <td>15500  DH</td>
                        <td>6800  DH</td>
                        <td>9600 DH</td>
                    </tr>
                    <tr class="bg-info">
                        <td>GOLDEN AGE 4*</td>
                        <td>TAKSIM</td>
                        <td>13500 DH</td>
                        <td>12800 DH</td>
                        <td>18400 DH</td>
                        <td>6800  DH</td>
                        <td>10400 DH</td>
                    </tr>
                    <tr>
                        <td>NOVA PLAZA ORION 4* <br>NOVA PLAZA CRYSTAL  4* </td>
                        <td>TAKSIM</td>
                        <td>13500 DH</td>
                        <td>13400 DH</td>
                        <td>18400 DH</td>
                        <td>6800  DH</td>
                        <td>10400 DH</td>
                    </tr>
                </table><br>

                <h3 class="text-warning">Services Compris :</h3>
                <p>- Vol International Aller-Retour Casa – Istanbul - Casa sur Royal Air Maroc</p>
                <p>- 10 Kg de Bagage à main</p>
                <p>- 23 + 23 Kg Bagage en soute</p>
                <p>- 7 Nuits avec petit déjeuner à Istanbul dans l’hôtel de votre choix.</p>
                <p>- Transfert Aéroport Istanbul Hôtel – Aller-Retour.</p>
                <p>3 Excursion :</p>
                <p class="text-danger">1 - Sortie en Croisière dans le Bosphore</p>
                <p class="text-danger">2 - Visite Iles des Princesses avec Déjeuner</p>
                <p class="text-danger">3 - Diner Spectacle en Croisière ( Turkish Night )</p>
                <p>- Assistance</p>

                <h3 class="text-warning">Plan de Vol : ( Royal Air Maroc  )</h3>
                <p>- Casablanca Istanbul : AT910 à 10h00 - Arrivée à Istanbul à 16h40</p>
                <p>- Istanbul Casablanca : AT911 à 18h10 - Arrivée à Casablanca à 21h00</p>
            </div><br><br>

            <h2 class="text-center">RESERVATION : </h2>
            <form method="post" action="{{ route('reservation.store') }}" class="form-container">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="trip_name" value="istanbul-magical-holiday-summer-2024">
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