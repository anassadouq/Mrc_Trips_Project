@extends('layouts.app')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dreamy 5 Stars Destination Summer 2024</title>
</head>
<body>
    <style>
        h3, h2{
            font-weight:bold;
        }
        @media (max-width: 576px) {
            .mx-2 {
                padding: 10px;
            }
            h1 {
                font-size: 24px;
            }
            h2 {
                font-size: 18px;
            }
            h3 {
                font-size: 16px;
            }
            p {
                font-size: 14px;
            }
        }

        /* Tablet styles */
        @media (min-width: 577px) and (max-width: 768px) {
            .mx-2 {
                padding: 15px;
            }
            h1 {
                font-size: 28px;
            }
            h2 {
                font-size: 20px;
            }
            h3 {
                font-size: 18px;
            }
            p {
                font-size: 16px;
            }
        }

        /* Desktop styles */
        @media (min-width: 769px) {
            .mx-2 {
                padding: 20px;
            }
            h1 {
                font-size: 32px;
            }
            h2 {
                font-size: 24px;
            }
            h3 {
                font-size: 20px;
            }
            p {
                font-size: 18px;
            }
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
    </div>
</body>
</html>
@endsection