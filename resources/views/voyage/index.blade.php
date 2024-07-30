@extends('layouts.app')
@section('content')
    <html>
        <head>
            <title>Voyage</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        </head>
        <body>

        <style>
            @media only screen and (max-width: 768px) {
                .row {
                    flex-direction: column;
                }

                .col-2 {
                    width: 100%;
                }

                .col-10 {
                    width: 100%;
                }
            }
        </style>
            <div class="mx-2">
                <a href="{{route('voyage.create')}}" >
                    <button class="btn btn-dark my-3 text-light" style="width:85px;">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </a>
                <table class="text-center" width="100%">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Show</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($voyages as $voyage)
                        <tr>
                            <td>{{ $voyage->nom }}</td>
                            <td>
                                @if ($voyage->id == 1)
                                    <a href="/Dakhla_Road_Trip_Best_Program_Morocco">
                                        <span class="material-symbols-outlined text-dark">ads_click</span>
                                    </a>
                                @elseif ($voyage->id == 2)
                                    <a href="/Taghazout_White_Beach_Resort">
                                        <span class="material-symbols-outlined text-dark">ads_click</span>
                                    </a>
                                @elseif ($voyage->id == 3)
                                    <a href="/Radisson_Blu_Al_Hoceima_5*_Premium_Package">
                                        <span class="material-symbols-outlined text-dark">ads_click</span>
                                    </a>
                                @elseif ($voyage->id == 4)
                                    <a href="/Dreamy_5*_Destination">
                                        <span class="material-symbols-outlined text-dark">ads_click</span>
                                    </a>
                                @elseif ($voyage->id == 5)
                                    <a href="/Radisson_Blu_Al_Hoceima_5*_Premium_Package_par_Vol">
                                        <span class="material-symbols-outlined text-dark">ads_click</span>
                                    </a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('voyage.destroy', $voyage->id) }}" method="POST" id="deleteForm{{ $voyage->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <ul class="navbar-nav ms-auto">
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                                </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a href="{{ route('voyage.edit', $voyage->id) }}" class="btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                        &nbsp;Editer
                                                    </a>

                                                    <button type="button" onclick="confirmDelete('{{ $voyage->id }}')" class="btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M10.354 8l3.823-3.823a.5.5 0 0 0-.708-.708L9.646 7.293 5.823 3.469a.5.5 0 0 0-.708.708L8.293 8l-3.82 3.823a.5.5 0 1 0 .708.708L9.647 8.707l3.824 3.824a.5.5 0 0 0 .708-.708L10.354 8z"/>
                                                        </svg>
                                                        &nbsp;Supprimer
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>    
            </div>
            
            <script>
                function confirmDelete(voyageId) {
                    if (confirm('Êtes-vous sûr de vouloir supprimer ce voyage ?')) {
                        document.getElementById('deleteForm' + voyageId).submit();
                    }
                }
            </script>
        </body>
    </html>
@endsection