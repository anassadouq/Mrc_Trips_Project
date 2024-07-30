<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            label {
                font-weight: bold;
            }

            input {
                width: 350px;
            }
            
            .my-form {
                width: 100%;
                max-width: 600px;
                margin: auto;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('voyage.store') }}" class="my-form">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom :</label>
                            <input type="text" placeholder="Voyage" name="nom" class="form-control" required>
                        </div>
                        <button type="submit" class="form-control btn text-light" style="background-color:#C19A6B">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>