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
                    width: 100%;
                    max-width: 600px;
                    margin: 20px auto;
                    padding: 15px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    background-color: #f9f9f9;
                }
            </style>

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
            </div><br><br>

            <h2 class="text-center">RESERVATION : </h2>

            <form method="post" action="{{ route('reservation.store') }}" style="width:30%;" class="form-container">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="trip_name" value="Hoceima 3">
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                    </div>
                    <div class="col mb-3">
                        <label for="prenom" class="form-label">Prenom :</label>
                        <input type="text" name="prenom" placeholder="Prenom" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cin" class="form-label">CIN :</label>
                    <input type="text" name="cin" placeholder="CIN" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Telephone :</label>
                    <input type="text" name="tel" placeholder="Telephone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date de départ :</label>
                    <input type="date" name="dateD" class="form-control" required>
                </div>                
                <div class="mb-3">
                    <label for="ville_depart" class="form-label">Ville de départ :</label>
                    <input type="text" name="ville_depart" placeholder="Ville de départ" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" name="email" placeholder="exemple@gmail.com" class="form-control" required>
                </div>
                <button type="submit" class="my-1 form-control btn btn-dark text-light">Réserver</button>
            </form>
        </body>
    </html>
@endsection