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
                <h1 class="text-center" style="font-weight :bold;">Welcome to Taghazout White Beach Resort Ultra All Inclusive 5*</h1>
                
                <h2 class="text-danger">Programme Exclusif MRC Trips – Adults Only !</h2>
                <p>❤️ Taghazout Bay 💚 White Beach Resort ❤️ Ultra All Inclusive 💚  
                    🛥 Hotels de Luxe 5* Pieds sur Mer 🏊 Sejour en All Inclusive 🏖 Plage 🚨 Animation non Stop 🎶 Activités 🍹 Baignade dans l’une des Plus belles plages du Maroc 🕶 Meilleur Programme par Excellence.
                </p>
                <p>  Votre Hôtel de Luxe !
                    <a href="https://www.whitebeachtaghazout.com" target="_blank">whitebeachtaghazout</a>  ( Adults Only )
                </p>

                <h2 class="text-warning">Limited Editions : Summer 2024 📆</h2>
                <p>➡ Du 19 au 21 Juillet</p>
                <p>➡ Du 19 au 21 Juillet</p>
                <p>➡ Du 18 au 21 Aout</p>

                <p class="text-danger">Spécial Jour Férié - Départ Dimanche Retour Mercredi</p>
                <p>➡ Du 05 au 08 Septembre</p>
                <p>➡ Du 19 au 22 Septembre</p>

                <h3 class="text-primary">Jeudi : Que l’Aventure Commence.</h3>
                <p><b>22 h 00 :</b> Départ depuis Rabat.</p> 
                <p><b>22 h 45 :</b> Départ depuis Mohammedia.</p> 
                <p><b>23 h 45 :</b> Départ depuis Casablanca.</p> 
                <p><b>04 h 00 :</b> Départ depuis Marrakech.</p> 

                <h3 class="text-primary">Vendredi : Agadir – Taghazout Bay – White Beach Resort 5* - Ultra All Inclusive</h3>
                <p>- Arrivée à Agadir / Pause Déjeuner libre à la Marina d’Agadir Profitez de votre matinée libre à Agadir / Plage / Bronzette.</p>
                <p>
                    <b>12h00 : </b>
                    Arrivée / Installation à votre Luxueux Hôtel White Beach Resort 5* <b>Ultra All Inclusive </b>( Adults Only ), situé idéalement sur le front de mer à la station balnéaire Taghazout Bay, parfaitement aménagée pour vous offrir une grande variété de loisirs et de services top !! 
                </p>
                <p>- Séjour en formule <b>Ultra All Inclusive </b> dès le Déjeuner du Vendredi au Petit déjeuner du Dimanche.</p>
                <p>- Profitez de votre Resort en bénéficiant de l’Accès à toutes les activités qui feront de votre Séjour une expérience inoubliable</p>
                <p>- Restauration en Pension Complète / Restaurants & Snacks </p>
                <p>- Boissons et Cocktails à volonté ( avec et sans Alcool ) … </p>
                <p>- Accès aux Piscines / Plage privée / Beach Bar / Activités Sportives / Animation Non-Stop </p>
                <p>- White Beach Resort sera le témoin de vos plus beaux moments ! tout y est réuni pour passer un Séjour de Qualité.</p>

                <h3 class="text-primary">Samedi : Taghazout Bay – White Beach Resort 5* - Ultra All Inclusive</h3>
                <p>- Profitez de votre Resort en bénéficiant de l’Accès à toutes les activités qui feront de votre Séjour une expérience inoubliable.</p>
                <p>- Restauration en Pension Complète / Restaurants & Snacks </p>
                <p>- Boissons et Cocktails à volonté ( avec et sans Alcool ) … </p>
                <p>- Accès aux Piscines / Plage / Beach Bar / Activités Sportives / Animation Non-Stop / Profitez Pleinement de votre Séjour en All Inclusive/ Live Spectacle / Animation.</p>

                <h3 class="text-primary">Dimanche : White Beach Resort – Dania Land Téléphérique Expérience</h3>
                <p>- Profitez de votre dernière matinée en All Inclusive.</p> 
                <p>- Piscine / Plage …</p> 
                <p>- <b>12h00 : </b>Check-out / Destination Agadir</p>
                <p>- <b>En Extra : </b>Téléphérique Expérience à Dania Land Agadir/ Pause-déjeuner libre à Agadir.</p>
                <p>- Retour à la Maison</p>
                <p>- Arrivée à Marrakech</p>
                <p>- Arrivée à Casablanca</p>
                <p>- Arrivée à Mohamedia</p>
                <p>- Arrivée à Rabat</p>
                <b>Chaque Voyage a une fin, mais avec MRC Trips, chaque Fin promet un nouveau départ !</b><br><br>

                <h2 class="text-warning">Services Compris :</h2>
                <p>- Transport Touristique climatisé.</p>
                <p>- Hébergement pour 2 Nuitées en Chambres Doubles Deluxe Garden View à White Beach Resort 5* Ultra All Inclusive à Taghazout Bay.</p>
                <p>- Séjour en <b>Ultra All Inclusive</b> à Taghazout White Beach 5*</p>
                <p>- Animation / Divers Loisirs…</p>
                <p>- Accès à toutes les activités au Resort</p>
                <b>Accompagnement MRC Trips.</b><br><br>

                <h2 class="text-warning">Tarif Promotionnel à partir de : <b>3600 DHs</b></h2>
                <p> ➡ Du 19 au 21 Juillet ( 2 Nuits )  :  <b>3600 Dhs </b>en Chambre Double</p>
                <p>➡ Du 01 au 04 Aout ( 2 Nuits ) :  <b>4200 Dhs</b> en Chambre Double</p>
                <p>➡ Du 18 au 21 Aout ( 2 Nuits ) : <b>4200 Dhs</b> en Chambre Double Spécial Jour Férié </p>
                <p>➡ Du 05 au 08 Septembre ( 2 Nuits ) :  <b>3900 Dhs</b> Dhs par en Chambre Double</p>
                <p>➡ Du 19 au 22 Septembre ( 2 Nuits ) :  <b>3900 Dhs</b> Dhs par en Chambre Double</p><br>

                <p>( Renseignez-vous sur les disponibilités )</p>
                <p>*Places très limitées !!!</p>
            </div><br><br>

            <h2 class="text-center">RESERVATION : </h2>
             <form method="post" action="{{ route('reservation.store') }}" class="form-container">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="trip_name" value="taghazout-white-beach">
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