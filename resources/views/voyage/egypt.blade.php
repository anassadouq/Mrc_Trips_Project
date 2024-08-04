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
                <h1 class="text-center" style="font-weight :bold;">Welcome to Egypt Classic 5* Tour</h1>
                <h1 class="text-center" style="font-weight :bold;">Caire – Assouan – Luxor – Hurghada </h1>

                <p>🛥 Offrez-vous un voyage de rêves à la découverte du Caire, Assouan, Luxor & Hurghada en compagnie de MRC Trips, vous serez éblouis par tant d’histoire et beauté </p>
                <p>Hôtels de Luxe 5* 🏊 Séjour en All Inclusive 🏖 Plage 🚨 Croisière dans la mer rouge 🎶 Croisière 5* dans le Nile - Visite Gizeh - Pyramides – Assouan – Luxor – Hurghada All Inclusive 🕶 Meilleur Programme par Excellence</p>

                <h2 class="text-warning">Summer 2024 📆</h2>
                <p>➡ Du 29 Juillet au 07 Aout</p>
                <p>➡ Du 07 au 17 Aout</p>
                <p>➡ Du 14 au 24 Aout</p>
                <p>➡ Du 21 au 31 Aout</p>
                <p>➡ Du 03 au 13 Sept </p>

                <h3 class="text-warning">Programme</h3>
                <h3 class="text-primary">Jour 1 : Casablanca - Le Caire - Mosquée Hussein – Khan El Khalil</h3>
                <p>Vol Casablanca – Caire </p> 
                <p>Arrivée à l’aéroport International du Caire.</p> 
                <p>Accueil par notre correspondant local </p> 
                <p>Transfert à votre hôtel </p>
                <p>Départ pour la visite de la Mosquée El Hussein et les Souks de khan el khalil.</p>

                <h3 class="text-primary">Jour 2 : Le Caire – Gizeh – Pyramides – Papyrus</h3>
                <p>- Petit déjeuner à l’hôtel </p>
                <p>Départ pour une journée de visites qui commencera par la visite du Gizeh et ses fameux Pyramides et le Sphinx </p>
                <p>Rendez-vous par la suite au centre du Caire pour la visite de l’institut de papyrus et la fabrique du parfum. </p>
                <p>Ensuite transfert à la station de train du Caire pour partir en train couchette à Assouan. </p>
                <p>Dîner et nuit à bord du train.</p>

                <h3 class="text-primary">Jour 3 : Assouan </h3>
                <p>- Arrivée à Assouan </p>
                <p>- Petit déjeuner dans le train.</p>
                <p>- Embarquement dans votre Bateau croisière.</p>
                <p>- Déjeuner et visite d’une demi-journée de la ville d’Assouan</p>
                <p>Dîner et nuitée à bord.</p>

                <h3 class="text-primary">Jour 4 : Assouan – Kom Ombo</h3>
                <p>- Petit déjeuner en buffet à bord de votre Croisière</p>
                <p>Temps libre, Déjeuner, Ensuite Navigation vers Kom-ombo, visite du temple, navigation vers la ville d’Edfou. </p> 
                <p>Diner, soirée animée et nuitée </p>

                <h3 class="text-primary">Jour 5 : Edfou - Luxor</h3>
                <p>- Petit déjeuner en buffet à bord de votre Croisière </p>
                <p>Visite du temple d’Edfou, navigation vers Luxor, Déjeuner en buffet, traversée de l’écluse de l’Esna- visite du temple de Karnak</p>
                <p>Diner, soirée Animée et nuitée</p>

                <h3 class="text-primary">Jour 6 : Luxor - Hurghada</h3>
                <p>- Petit déjeuner en buffet à bord</p>
                <p>- Débarquement de la croisière, continuation de la visite de Luxor, départ par la suite en autocar climatisé vers Hurghada</p>
                <p>- Arrivée et installation dans votre hôtel</p>
                <p>- Diner et nuitée</p>

                <h3 class="text-primary">Jour 7 : Hurghada – Croisière </h3>
                <p>- Journée libre à Hurghada en all inclusive.</p>
                <p><b class="text-danger">En Option</b> Départ pour une magnifique sortie en croisière, et Embarquez à bord du sous-marin en verre pour une aventure inoubliable sous les eaux claires de la mer rouge.</p>

                <h3 class="text-primary">Jour 8 : Hurghada All Inclusive</h3>
                <p>- Petit déjeuner en buffet</p>
                <p>- Journée libre à Hurghada en all inclusive.</p>
                <p>- Le soir : Visite de ville de Hurghada</p>

                <h3 class="text-primary">Jour 9 : Hurghada – Caire  </h3>
                <p>- Petit déjeuner </p>
                <p>- check-out</p>
                <p>- Départ vers le Caire </p>
                <p>- Arrivée et installation dans votre hôtel et nuitée</p>

                <h3 class="text-primary">Jour 10 : Le Caire </h3>
                <p>- Petit déjeuner à votre hôtel.</p>
                <p>- Journée Libre </p>
                <p>- Shopping </p>
                <p>- Divertissement</p>

                <h3 class="text-primary">Jour 11 : Caire - Casablanca</h3>
                <p>- Petit déjeuner </p>
                <p>- check-out</p>
                <p>- Transfert à l’aéroport du Caire pour le vol de retour. </p>

                <h3 class="text-warning">Services Compris :</h3>
                - Vol International Aller-Retour Casa – Caire - Casa sur la RAM <br>
                - 3 Nuitées avec petit déjeuner au Caire <br>
                - Train Couchette entre Caire et Assouan en demi-pension<br>
                - 3 Nuitées en Croisière 5* en Pension Complète<br>
                - 3 Nuitées en All inclusive (Soft) à Hurghada<br>
                - Guide touristique durant les visites.<br>
                - Tous les transferts en transport touristique climatisé.<br>
                - Les visites mentionnées au programme<br><br>

                <h3>Proposition Hébergement 1</h3>
                <center>
                    <img src="/images/egypte_table1.jpg" alt="" width="60%">
                </center><br>

                <h3>Proposition Hébergement 2</h3>
                <center>
                    <img src="/images/egypte_table2.jpg" alt="" width="60%">
                </center><br>

                <h3 class="text-warning">Le prix ne comprend pas :</h3>
                <p>- Frais de visa : 500 Dhs</p>
                <p>- Les extras </p>
                <p>- Les pourboires, les bagagistes. (10 USD)</p>

                <h3 class="text-warning">Documents visa :</h3>
                <p>- Il faut remettre le dossier 10 jours avant la date du départ </p>
                <p>- 2 photos + Copie CIN + Relevés bancaires des 3 derniers mois + Attestation de travail</p>
                <p>- Passeport encore valable au moins 6 mois après la date d’entrée.</p>

                <h3 class="text-warning">Les Excursions en option :</h3>
                <p>Croisière Mer Rouge à Hurghada (50 USD)</p>

                <h3 class="text-danger">A Noter :</h3>
                <p>Selon la loi du bureau de change, l'agence déduit un montant de la dotation Touristique des clients pour régler le paiement des hôtels et des services internationaux</p>
            </div><br><br>

            <h2 class="text-center">RESERVATION : </h2>
            <form method="post" action="{{ route('reservation.store') }}" class="form-container">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="trip_name" value="egypt-classic-5-tour">
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