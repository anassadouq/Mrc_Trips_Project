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
                <h1 class="text-center" style="font-weight :bold;">Welcome to Radisson Blu Al Hoceima 5* Premium Package par Vol.</h1>
                
                <h2 class="text-danger">Spécial Jour Férié : du 18 au 21 Aout</h2>
                <h2 class="text-danger">4 Jours 3 Nuits</h2>

                <p>❤️ Al Hoceima 💚 Radisson Blu Resorts 5* ❤️ Vol Aller-Retour 🕶 Transferts 🛥 Hotels de Luxe 5* Pieds sur Mer 🏊 Sejour en All Inclusive 🏖 Plages Privées 🚨 Animation non Stop 🎶 Activités 🍹 Baignade dans l’une des Plus belles plages du Maroc 🕶 Meilleur Programme par Excellence</p>

                <h2 class="text-warning">Au Programme :</h2>

                <h3 class="text-primary">Dimanche 18 Aout : Casablanca - Hoceima par Vol</h3>
                <p><b>15h35 :</b> Vol Casablanca – Hoceima depuis l’Aéroport Med V.</p>
                <p><b>18h30</b>Arrivée à Hoceima</p>
                <p>Transfert Aéroport Hoceima – Radisson Blu Hoceima 5*</p>
                <p>Arrivée et installation à votre Luxueux Hôtel Radisson Blu Resort 5*, le Plus Prestigieux des Hôtels à Al Hoceima, Pieds sur mer situé dans un paradis de Merveilleux contraste entre Luxe et Bleu de mer méditerranée.</p>
                <p>Séjour en formule All Inclusive </p>

                <h3 class="text-primary">Lundi 19 Aout  : Radisson Blu Resorts 5* Al Hoceimag</h3>
                <p>Profitez de votre Resort en bénéficiant de l’Accès à toutes les activités qui feront de votre Séjour une expérience inoubliable..</p>
                <p>Restauration en Pension Complète / Restaurants & Snacks</p>
                <p>Boissons et Cocktails à volonté ( avec et sans Alcool ) …</p>
                <p>Accès aux Piscines / Plage privée / Beach Bar / Activités Sportives / Animation Non-Stop</p>
                <p>Radisson Blu sera le témoin de vos plus beaux moments ! tout y est réuni pour passer un Séjour de Qualité</p>
                <p>Plusieurs Activités disponibles : </p>
                <p>Sortie en Bateau</p>
                <p>Plongée sous-marine</p>
                <p>Tour en Quad</p>
                <p>Pédalo</p>

                <h2 class="text-warning">Mardi 20 Aout : Radisson Blu Resorts 5* Al Hoceima</h2>
                <p><b>17h00 : </b>Transfert Radisson Blu Resort – Aéroport Hoceima</p>
                <p><b>09h00 :</b> Départ vers Hoceima / Visite de Cap de l’Eau.</p>
                <p><b>19h10 :</b> Vol Hoceima Casablanca</p>
                <p><b>21h55 :</b> Arrivée à Casablanca</p>

                <h2 class="text-warning">Mercredi : Radisson Blu Resort 5* Al Hoceima – Home Sweet Home</h2>
                <p>Profitez de votre dernière Journée en All Inclusive</p>
                <p><b>18h30 :</b> Transfert Radisson Blu Resort – Aéroport Hoceima</p>
                <p><b>20h50 :</b> Vol Hoceima Casablanca</p>
                <p><b>22h25 :</b> Arrivée à Casablanca</p>
                <p>Chaque Voyage a une fin, mais avec MRC Trips, chaque Fin promet un nouveau départ</p>

                <h2 class="text-warning">Services Compris :</h2>
                <p>- Vol Aller-Retour Casablanca – Hoceima sur Royal Air Maroc</p>
                <p>- Bagage à main : 1 Pièce de 10 Kg</p>
                <p>- Bagage en Soute : 1 Pièce de 20 Kg.</p>
                <p>- Transfert Aéroport Hoceima – Radisson Hoceima Aller-Retour</p>
                <b>- Hébergement pour 3 Nuitées en Chambres Doubles à Hôtel Radisson Blu Resort 5* à Al Hoceima.</b>
                <p>- Séjour en All Inclusive à Radisson Blu Resorts 5*</p>
                <p>- Animation / Divers Loisirs…</p>
                <p>- Accès à toutes les activités au Club / Plage Privée.</p>

                <h2 class="text-warning">Tarif Promotionnel : <b class="text-danger">5100 Dhs</b> <b class="text-dark">en Chambre Double </b></h2>
                <h2>TOUT COMPRIS !! </h2>

                <p>( Renseignez-vous sur les disponibilités )</p>
                <p>*Places très limitées !!!</p>
            </div><br><br>

            <h2 class="text-center">RESERVATION : </h2>

            <form method="post" action="{{ route('reservation.store') }}" class="form-container">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="trip_name" value="radisson-package-vol">
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