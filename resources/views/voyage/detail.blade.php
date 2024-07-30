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

        <center>
            <a href="{{ route('reservation.create', ['id' => $voyage->id]) }}" class="btn btn-dark text-light my-3">Réservez maintenant</a>
        </center>
        
        @if($voyage->id == 1)
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
        </div>

        @elseif($voyage->id == 2)
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
            </div>

        @elseif($voyage->id == 3)
            <div class="mx-2">
                <h1 class="text-center" style="font-weight :bold;">Welcome to Radisson Blu Al Hoceima 5* Premium Package</h1>
                    
                <h2 class="text-danger">2 Sorties en Bateau Incluses Exclusivement par MRC Trips A PARTIR DE 2999 DHS TOUT COMPRIS !!</h2>

                <p>❤️ Al Hoceima 💚 Radisson Blu Resorts 5* ❤️ Calabonita 💚 Al Jabha 
                    🛥 Hotels de Luxe 5* Pieds sur Mer 🏊 Sejour en All Inclusive 🏖 Plages Privées 🚨 Animation non Stop 🎶 Activités 🍹 Baignade dans l’une des Plus belles plages du Maroc 🕶 Meilleur Programme par Excellence
                </p>

                <h2 class="text-warning">Next Editions : Summer 2024</h2>
                <p>➡ Départ chaque Semaine ( Jeudi Soir ) Juillet – Aout – Septembre</p>

                <h2 class="text-warning">Au Programme :</h2>

                <h3 class="text-primary">Jeudi : Que l’Aventure Commence.</h3>
                <p><b>20 h 00 :</b> Départ depuis Casablanca.</p> 
                <p><b>20 h 45 :</b> Départ depuis Mohammedia.</p> 
                <p><b>22 h 00 :</b> Départ depuis Rabat.</p> 

                <h3 class="text-primary">Vendredi : El Jebha Beach – Radisson Blu Resorts 5* Al Hoceima</h3>
                <p>- Arrivée à El Jabha / Puerto Capaz, réputé par ses plages Extraordinaires et la pureté et la transparence de son eau</p>
                <p>- Après un Bon petit déjeuner Jebli, votre 1ere journée commencera par l’activité indispensable à El Jabha, une Magnifique sortie en Bateau à la découverte des plages de Mers eddar, Playa Monica, Haouad et la Fameuse Grotte de Abdelkrim Elkhattabi.</p>
                <p>- Cerise sur Gâteau ! Superbe Bronzette et Baignade dans une des plages Cristallines.</p>
                <p>- Retour au port de El Jabha et Continuation vers Al Hoceima, un paysage formidable tout au long du chemin.</p>
                    <p>- <b>13h00 :</b> Arrivée à votre Luxueux Hôtel Radisson Blu Resort 5*, le Plus Prestigieux des Hôtels à Al Hoceima, Pieds sur mer situé dans un paradis de Merveilleux contraste entre Luxe et Bleu de mer méditerranée. </p>
                    <p>- Séjour en formule All Inclusive dès le Déjeuner du Vendredi au Petit déjeuner du Dimanche.</p>
                    <p>- Profitez de votre Resort en bénéficiant de l’Accès à toutes les activités qui feront de votre Séjour une expérience inoubliable.</p>
                    <p>- Restauration en Pension Complète / Restaurants & Snacks</p>
                    <p>- Boissons et Cocktails à volonté ( avec et sans Alcool ) …</p>
                    <p>- Accès aux Piscines / Plage privée / Beach Bar / Activités Sportives / Animation Non- Stop</p>
                    <p>- Radisson Blu sera le témoin de vos plus beaux moments ! tout y est réuni pour passer un Séjour de Qualité.</p>

                    <h3 class="text-primary">Samedi : Radisson – Calabonita Beach – Bateau - Plongée Sous-Marine – Pool Party</h3>
                    <p>- Votre journée commencera par une Sortie à la Fameuse Plage de Calabonita, connue par la clarté et la beauté de son eau, des Sublimes moments de Bronzette et Baignade vous attend.</p>
                    <p>- Rendez-vous avec l’incontournable Activité à Al Hoceima, une magnifique Sortie en Bateau en pleine mer Méditerranée à la découverte de la Baie et ses Criques Paradisiaques.</p>
                    <p>- Pour découvrir plus la transparence de l’eau, l’expérience de la Plongée sous-Marine est accessible à seulement 300 Dhs avec vidéo incluse en compagnie des moniteurs professionnels.</p>
                    <p>- Retour à votre Resort pour terminer votre Journée en All Inclusive / Pool Party Time …. Dj Set.</p>
                    <p>- Profitez Pleinement de votre Séjour en All Inclusive</p>
                    <p>- Live Spectacle / Animation.</p>

                    <h3 class="text-primary">Dimanche : Radisson Blu – Retour à la Maison</h3>
                    <p>- Profitez de votre dernière matinée en All Inclusive.</p> 
                    <p>- Piscines / Plage privée …</p> 
                    <p>- Retour à la Maison</p>
                    <p>- Arrivée à Rabat</p>
                    <p>- Arrivée à Mohamedia</p>
                    <p>- Arrivée à Casablanca</p>
                    <b>Chaque Voyage a une fin, mais avec MRC Trips, chaque Fin promet un nouveau départ !</b><br><br>

                    <h2 class="text-warning">Services Compris :</h2>
                    <p>- Transport Touristique climatisé.</p>
                    <p>- Hébergement pour 2 Nuitées en Chambres Doubles à Hôtel Radisson Blu Resort 5* à Al Hoceima.</p>
                    <p>- Séjour en All Inclusive à Radisson Blu Resorts 5*</p>
                    <p>- Restauration </p>
                    <p>- Petit Déjeuner à El Jabha</p>
                    <p>- Formule All Inclusive à Radisson Blu Hoceimat</p>

                    <h2 class="text-warning">Activités : </h2>
                    <p class="text-danger">- Sortie en Bateau dans la Baie de Hoceima.</p>
                    <p class="text-danger">- Sortie en Bateau à El Jebha.</p>
                    <p>- Animation / Divers Loisirs…</p>
                    <p>- Accès à toutes les activités au Club / Plage Privée.</p>
                    <p>- Accompagnement MRC Trips.</p>

                    <h2 class="text-warning">Tarif Promotionnel à partir de 2 999 Dhs TOUT COMPRIS !!</h2>
                    <h2>Alerte Promotion Aout !! <b class="text-danger">3399 Dhs</b> au lieu de 3790 Dhs en Chambre Double</h2>
                    <p>➡ Du 01 au 04 Aout</p>
                    <p>➡ Du 08 au 11 Aout</p>
                    <p>➡ Du 15 au 18 Aout</p>
                    <p>➡ Du 22 au 25 Aout</p><br>

                    <h2>Alerte Promotion Septembre !! <b class="text-danger">2999 Dhs</b> au lieu de 3490 Dhs en Chambre Double</h2>
                    <p>➡ Du 29 Aout au 01 Septembre</p>                                     
                    <p>➡ Du 05 au 08 Septembre</p>
                    <p>➡ Du 12 au 15 Septembre </p>   
                    <p>➡ Du 19 au 22 Septembre</p>
                    <p>➡ Du 26 au 29 Septembre</p>

                    <p>( Renseignez-vous sur les disponibilités )</p>
                    <p>*Places très limitées !!!</p>
                </div>

                @elseif($voyage->id == 4)
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

                    @elseif($voyage->id == 5)
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

        @endif
    </body>
    </html>
@endsection