@extends('layouts.app')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MRC TRIPS</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Utilisation des CDN pour OwlCarousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <!-- Utilisation des CDN pour jQuery et OwlCarousel JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    </head>

    <body>

        <style>
            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;
                overflow: hidden;
            }

            .owl-carousel .item {
                height: 100vh;
                width: 100vw;
                background-size: cover;
                background-position: center;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Media queries for different screen sizes */
            @media (min-width: 1300px) {
                .owl-carousel .item {
                    height: 140vh;
                }
            }

            @media (min-width: 992px) and (max-width: 1199px) {
                .owl-carousel .item {
                    height: 70vh;
                }
            }

            @media (min-width: 768px) and (max-width: 991px) {
                .owl-carousel .item {
                    height: 60vh;
                }
            }

            @media (max-width: 767px) {
                .owl-carousel .item {
                    height: 50vh;
                }
            }

        </style>

        <div class="owl-carousel owl-theme">
            <div class="item" style="background-image: url('{{ asset('images/P Dakhla.jpg') }}');">
                <div class="text-center">
                    <a href="{{ route('voyage.detail', ['nom' => 'Dakhla_Road_Trip']) }}" class="text-dark text-center m-3 btn btn-light">View Details</a>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset('images/P Taghazout.jpg') }}');">
                <div class="text-center">
                    <a href="{{ route('voyage.detail', ['nom' => 'Dreamy_5_Stars_Destination']) }}" class="text-dark text-center m-3 btn btn-light">View Details</a>
                </div>            
            </div>
            <div class="item" style="background-image: url('{{ asset('images/P Hoceima 3.jpg') }}');">
            <div class="text-center">
                    <a href="{{ route('voyage.detail', ['nom' => 'Radisson_Blu_Al_Hoceima_5*_Premium_Package']) }}" class="text-dark text-center m-3 btn btn-light">View Details</a>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset('images/P Saidia.jpg') }}');">
            <div class="text-center">
                    <a href="{{ route('voyage.detail', ['nom' => 'Radisson_Blu_Al_Hoceima_5*_Premium_Package_par_Vol']) }}" class="text-dark text-center m-3 btn btn-light">View Details</a>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset('images/P Hoceima 2.jpg') }}');">
            <div class="text-center">
                    <a href="{{ route('voyage.detail', ['nom' => 'Taghazout_White_Beach_Resort']) }}" class="text-dark text-center m-5 btn btn-light">View Details</a>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    loop:true,
                    margin:0,
                    nav:false,
                    items:1,
                    autoplay:true,
                    autoplayHoverPause:true
                });
            });
        </script>

    </body>
    </html>
@endsection