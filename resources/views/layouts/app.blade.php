<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>MRC TRIPS</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        @media (max-width: 768px) {
            .hero-bg-image {
                background-size: contain;
                height: 50vh;
            }
            .btn {
                padding: 8px 16px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .hero-bg-image {
                height: 30vh;
            }
            .btn {
                padding: 6px 12px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body style="background-color: #F0F0F0;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="/images/logo.png" width="100px">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">A PROPOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">POURQUOI MRC TRIPS ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">NOS VOYAGES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">NOS OFFRES</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div>
        @yield('content')
    </div>
</body>
</html>