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
        <h1 class="text-center" style="font-weight :bold;">Welcome to Dreamy 5 Stars Destination Summer 2024</h1>
        
        <h2 class="text-danger">All Inclusive 5 Jours 4 Nuits Exclusivement par MRC Trips Tarif Promotionnel pour les 10 Premières Réservations</h2>

        <p>❤️ Al Hoceima 💚 Saidia ❤️ Radisson Blu Resorts 5*  💚 Be Live Collection Saidia 5*
            🛥 Hotels de Luxe 5* Pieds sur Mer 🏊 Sejour en All Inclusive 🏖 Plages Privées 🚨 Animation non Stop 🎶 Activités 🍹 Baignade dans les Plus belles plages du Maroc 🕶 Meilleur Programme par Excellence
        </p>

        <h2 class="text-warning">Limited Editions : Summer 2024</h2>
        <p>Du 16 au 21 Aout  ( Spécial Jour Férié )</p> 
        <p>Du 03 au 08 Septembre </p>
        <p>Du 17 au 22 Septembre </p>

        <h3 class="text-primary">Jour 1 : Départ</h3>
        <p><b>21h00 :</b> Départ depuis Casablanca.</p>
        <p><b>21h45 :</b> Départ depuis Mohamedia.</p>
        <p><b>23h00 :</b> Départ depuis Rabat</p>


        <h3 class="text-primary">Jour 2 : Frontières - Saidia Be Live 5* Club</h3>
        <p><b>07h00 :</b> Arrivée à Oujda / Petit Déjeuner Libre/ Pause photo au Frontières Marocaines / Algériennes.</p>
        <p>Arrivée et Installation à votre Majestueux Hôtel Be Live 5* à Saidia pieds sur mer.</p>
        <p>Séjour en formule All Inclusive dès le Déjeuner du Mercredi au Petit déjeuner du Vendredi</p>
        <p>Profitez de votre Club en bénéficiant de l’Accès à toutes les activités qui feront de votre Séjour une expérience inoubliable.</p>
        <p>Restauration en Pension Complète / Restaurants & Snacks</p>
        <p>Boissons et Cocktails à volonté ( avec et sans Alcool ) …</p>
        <p>Accès aux Piscines / Plage privée / Beach Bar / Activités Sportives / Animation Non-Stop / Spectacle.</p>

        <h3 class="text-primary">Jour 3 : Be Live 5* Hôtel Club – Marina Saidia – ParaSailing</h3>
        <p>Profitez de votre Séjour en formule All Inclusive.</p>
        <p>Visite de la Marina de Saidia</p>
        <p>Activité recommandée sur place : Parasailing</p>
        <p>Retour à l’hôtel / Continuation de votre séjour All Inclusive</p>
        <p>Animation Non-Stop</p>

        <h2 class="text-warning">Jour 4 : Hoceima - Radisson Blu Resorts 5*.</h2>
        <p>- Petit Déjeuner à l’hôtel / Check-out.</p>
        <p>- <b>09h00 :</b> Départ vers Hoceima / Visite de Cap de l’Eau.</p>
        <p>- Arrivée et Installation à votre Luxueux Hôtel Radisson Blu Resort 5*, le Plus Prestigieux des Hôtels à Hoceima, Pieds sur mer situé dans un paradis de merveilleux contraste entre Luxe et Bleu de mer méditerranée.</p>
        <p>- Séjour en formule All Inclusive dès le Déjeuner du Vendredi au Petit déjeuner du Dimanche. </p>
        <p>- Profitez de votre Resort en bénéficiant de l’Accès à toutes les activités qui feront de votre Séjour une expérience inoubliable</p>
        <p>- Restauration en Pension Complète / Restaurants & Snacks</p>
        <p>- Boissons et Cocktails à volonté ( avec et sans Alcool ) …</p>
        <p>- Accès aux Piscines / Plage privée / Beach Bar / Activités Sportives / Animation Non-Stop / Spectacle.</p>
        <p>- Radisson Blu sera le témoin de vos plus beaux moments ! tout y est réuni pour passer un Séjour de Qualité.</p>

        <h2 class="text-warning">Jour 5 : Calabonita Beach – Bateau - Plongée Sous-Marine – Pool Party</h2>
        <p>Votre journée commencera par une Sortie à la Fameuse Plage de Calabonita, connue par la clarté et la beauté de son eau, des Sublimes moments de Bronzette et Baignade vous attend.</p>
        <p class="text-danger">En Extra :</p>
        <p>- Rendez-vous avec l’incontournable Activité à Al Hoceima, une magnifique Sortie en Bateau en pleine mer Méditerranée à la découverte de la Baie et ses Criques Paradisiaques.</p>
        <p>- Pour découvrir plus la transparence de l’eau, l’expérience de la Plongée sous-Marine est accessible à seulement 300 Dhs avec vidéo incluse en compagnie des moniteurs professionnels.</p>
        <p>- Retour à votre Resort pour terminer votre Journée en All Inclusive.</p>
        <p>Pool Party Time …. Dj Set.</p>
        <p> Profitez Pleinement de votre Séjour en All Inclusive</p>
        <p>Spectacle / Animation.</p>

        <h3 class="text-primary">Jour 6 : Radisson Blu - Retour à la Maison</h3>
        <p>Profitez de votre dernière matinée en All Inclusive.</p>
        <p>Piscines / Plage privée …</p>
        <p>Retour à la Maison.</p>
        <p>Arrivée à Rabat.</p>
        <p>Arrivée à Mohamedia</p>
        <p>Arrivée à Casablanca.</p>
        <p>Chaque Voyage a une fin, mais avec MRC Trips, chaque Fin promet un nouveau départ</p>

        <h2 class="text-warning">Services Compris :</h2>
        <p> Transport Touristique climatisé.</p>
        <p>- 2 Nuitées à Be Live Collection 5* à Saidia.</p>
        <p>- 2 Nuitées à Radisson Blu Resort 5* à Al Hoceima.</p>
        <p>Hébergement en chambres Doubles ou Triples.</p>
        <b>Restauration en Formule All Inclusive à Saidia & Hoceima</b>
        <p>- Toutes les visites et sorties mentionnées sur le programme.</p>
        <p>- Accompagnement MRC Trips</p>

        <h2 class="text-danger">Tarif Promotionnel pour les 10 Premières Réservations</h2>
        <h3>Alerte Promotion Aout !! <b class="text-danger">Spécial Jour Férié</b></h3>
        <p>➡ Du 16 au 21 Aout  <b class="text-danger">5899 Dhs</b> au lieu de 6500 Dhs en Chambre Double</p>
        <h3>Alerte Promotion Septembre</h3>
        <p>➡ Du 03 au 08 Septembre !! <b class="text-danger">4 500 Dhs</b> au lieu de 5200 Dhs en Chambre Double</p>
        <p>➡ Du 17 au 22 Septembre !!  <b class="text-danger">4 200 Dhs</b> au lieu de 4800 Dhs en Chambre Doublee</p>

        <p>( Renseignez-vous sur les disponibilités )</p>
        <p>*Places très limitées !!!</p>
    </div>
</body>
</html>
@endsection