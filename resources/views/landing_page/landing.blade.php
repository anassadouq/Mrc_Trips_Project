@extends('layouts.app')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MRC TRIPS</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .image-container {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 20px;
            }
            .image-container img {
                width: 100%;
                max-width: 400px;
                height: auto;
            }
            .btn-detail {
                position: absolute;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 image-container">
                    <img src="images/P Dakhla.jpg" alt="Dakhla">
                    <a href="/trip/dakhla-road-trip" class="btn btn-light btn-detail">Detail</a>
                </div>
                <div class="col-md-6 image-container">
                    <img src="images/P Taghazout.jpg" alt="Taghazout">
                    <a href="/trip/taghazout-white-beach" class="btn btn-light btn-detail">Detail</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 image-container">
                    <img src="images/P Hoceima 3.jpg" alt="Hoceima">
                    <a href="/trip/hoceima3" class="btn btn-light btn-detail">Detail</a>
                </div>
                <div class="col-md-6 image-container">
                    <img src="images/P Saidia.jpg" alt="Saidia">
                    <a href="/trip/saidia-hoceima-5stars" class="btn btn-light btn-detail">Detail</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 image-container">
                    <img src="images/P Hoceima 2.jpg" alt="Hoceima">
                    <a href="/trip/radisson-package-vol" class="btn btn-light btn-detail">Detail</a>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection