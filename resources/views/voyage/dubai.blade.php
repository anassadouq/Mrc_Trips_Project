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
                <h1 class="text-center" style="font-weight :bold;">Welcome to Dubai Luxury Summer Trip</h1>
                <p>🛥 Offrez-vous un voyage de rêves à la découverte de Dubai en compagnie de MRC Trips, vous serez éblouis par tant de Magie et Beauté</p>
                <h2 class="text-danger">2 Excursions Incluses + Visa</h2>
                <p class="text-danger">– Dubai City Tour</p>
                <p class="text-danger">– Desert Safari en 4x4 & Diner Barbecue</p>

                <p>💕  A Partir de 10 500 Dhs / Package 08 Jours 07 Nuits</p>
                <p>Limited Editions ( Juillet Aout ) </p>

                <h2 class="text-warning">Summer 2024 📆</h2>
                <p>➡ Du 05 au 12 Juillet</p>
                <p>➡ Du 07 au 14 Juillet</p>
                <p>➡ Du 12 au 19 Juillet</p>
                <p>➡ Du 14 au 21 Juillet</p>
                <p>➡ Du 19 au 26 Juillet</p>
                <p>➡ Du 21 au 28 Juillet  ( + 500 Dhs ) </p>
                <p>➡ Du 26 Juillet au 02 Aout </p>
                <p>➡ Du 28 Juillet au 04 Aout ( + 500 Dhs )</p>
                <p>➡ Du 04 au 11 Aout</p>
                <p>➡ Du 11 au 18 Aout ( + 500 Dhs )</p>
                <p>➡ Du 18 au 25 Aout</p>
                <p>➡ Du 25 Aout au 01 Sept</p>

                <h2 class="text-warning">Programme</h2>
                <h3 class="text-primary">Jour 1 : Casablanca - Dubai</h3>
                <p>Vol Casablanca – Dubai </p> 
                <p>Arrivée et Accueil à l’Aéroport par un correspondant de l’Agence.</p> 
                <p>Arrivée et Accueil à l’Aéroport par un correspondant de l’Agence.</p> 
                <p>check-in.</p> 

                <h3 class="text-primary">Jour 2 : Dubai City Tour ( Inclus )</h3>
                <p>- Départ pour une première visite de la ville de Dubaï … Commencez par la visite de Khor Dubaï qui représente le développement de la fin du 19ème et du début du 20ème siècle autour de la crique de Dubai, Il montre la transformation de la ville en un centre commercial.</p>
                <p>- Découverte du souk de l'or qui a le charme traditionnel d'un souk arabe qui reflète le riche héritage du commerce régional de l'or, ensuite, arrêtez-vous devant la voile emblématique de la tour Burj Al Arab, visitez Palm Jumeirah, connu dans le monde entier comme un synonyme de beauté et d'élégance, où se trouve l'incroyable hôtel Atlantis.</p>

                <h3 class="text-primary">Jour 3 : Desert Safari & Diner Barbecue  ( Inclus ) </h3>
                <p>Matinée libre, L’après-midi, départ pour une excursion « Désert Safari & Diner Barbecue ». Cette sortie consiste à un voyage à travers le désert en véhicules 4x4, vous profitez des Dunes de sable d'Al Aweer suivi par un accueil de bienvenue oriental avec des dattes et café turc dans un camp bédouin traditionnel	</p>

                <h3 class="text-primary">Jour 4 : Dubai - Journée Libre </h3>
                <p>- Profitez de votre journée à Dubai </p> 
                <p>- Divertissement </p> 
                <p>- Shopping.</p>

                <h3 class="text-primary">Jour 5 : Abu Dhabi City Tour ( Extra ) </h3>
                <p>Au Programme : Abu Dhab City Touri (1h de route de Dubai).</p>
                <p>La journée sera consacrée à la visite des incontournables :</p>
                <p>- La Mosquée Cheikh Zayed. </p>
                <p>- Qasr Al-Hosn (palais/fort)</p>
                <p>La Corniche</p>
                <p>Héritage Village…</p>

                <h3 class="text-primary">Jour 6 : Dubai – Journée Libre </h3>
                <p>- Profitez de votre journée à Dubai  </p>
                <p>- Divertissement </p>
                <p>- Shopping</p>

                <h3 class="text-primary">Jour 7 : Dhow Cruise Dubai ( Extra )</h3>
                <p>- Matinée Libre, Le soir départ pour un dîner à bord de « Dhow Cruise »</p>
                <p>- Une croisière agréable de 2H à bord avec un style traditionnel et une vue spectaculaire sur la crique de Dubai</p>

                <h3 class="text-primary">Jour 08 : Dernier jour à Dubai</h3>
                <p>- Check out</p>
                <p>- Transfert à l’Aéroport</p>
                <p>- Vol Dubai Casablanca</p>
                <p>- Arrivée à Mirleft / Installation à l’Auberge du Nid d’Aigle.</p>
                <p>* Activité du Parapente en Extra</p>
                <p>- Dîner / Dernière soirée en groupe / Nuitée.</p>
                <p>Vol Dubai Casablanca </p>

                <h2 class="text-warning">Tarifs par Personne :</h2>
                <p>➡ Du 04 au 11 Aout</p>
                <p>➡ Du 11 au 18 Aout ( + 500 Dhs )</p>
                <p>➡ Du 18 au 25 Aout</p>
                <p>➡ Du 25 Aout au 01 Sept</p>
                <p>➡ Du 05 au 12 Juillet</p>
                <p>➡ Du 07 au 14 Juillet</p>
                <p>➡ Du 12 au 19 Juillet</p>
                <p>➡ Du 14 au 21 Juillet</p>
                <p>➡ Du 19 au 26 Juillet</p>
                <p>➡ Du 21 au 28 Juillet  ( + 500 Dhs ) </p>
                <p>➡ Du 26 Juillet au 02 Aout </p>
                <p>➡ Du 28 Juillet au 04 Aout ( + 500 Dhs )</p>

                <center>
                    <img src="/images/dubai_table.jpg" alt="">
                </center>

                <h2 class="text-warning">Services Compris :</h2>
                <p>- Vol International Aller-Retour Casa –Dubai – Casa sur la RAM</p>
                <p>- 7 Nuits avec Petit déjeuner à Dubai dans l’hôtel de votre choix</p>
                <p>- Transferts Aéroports Hôtels – Aller-Retour.</p>
                <p>- Frais de Visa</p>
                <p>Excursions :</p>
                <p class="text-danger">1 – Dubai City Tour</p>
                <p class="text-danger">2 – Desert Safari en 4x4 & Diner Barbecue</p>
                <p>- Assistance </p>

                <h2 class="text-warning">En Option :</h2>
                <p>- Diner croisière avec animation 900 dhs par personne.</p>
                <p>- Abu Dhabi City tour : 900 dhs par personne.</p>
                <p>- Ticket Burj khalifa : 600 dhs par personne.</p>

                <h2 class="text-warning">Documents Pour Visa :</h2>
                <p>- 01 photo Fond blanc scannées (format passeport).</p>
                <p>- Passeport Scanné</p>

                <h2 class="text-warning">Plan de Vols :</h2>
                <table width="30%" class="text-center">
                    <tr>
                        <td>AT 246   CMNDXB    0230 1320</td>
                    </tr>
                    <tr>
                        <td>AT 247   DXBCMN    1520 2045</td>
                    </tr>
                </table><br>

                <h2 class="text-warning">N.B : Tourism Dirham must be paid directly to hotel by the guests!!</h2>
                <p>- 3* Hotels 10 AED per room per night (around 3 USD)</p>
                <p>- 4* Hotels 15 AED per room per night (around 4,5 USD)</p>
                <p>- 5* Hotels 20 AED per room per night (around 6 USD)</p>
            </div><br><br>

            <h2 class="text-center">RESERVATION : </h2>
            <form method="post" action="{{ route('reservation.store') }}" class="form-container">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="trip_name" value="dubai-istanbul-summer-trip">
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