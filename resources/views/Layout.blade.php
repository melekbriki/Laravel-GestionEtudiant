<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Des Etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="d-flex flex-column flex-md-row justify-content-between align-items-center py-3">
    <div class="mb-3 mb-md-0">
    </div>
    <ul class="nav">
        @auth
            <li class="nav-item">
                <a class="nav-link text-decoration-none" href="#">Les Missions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-decoration-none" href="#">Mes conversations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-decoration-none" href="#">Mon compte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-decoration-none" href="{{ route('etudiant')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se Deconnecter</a>
            </li>
            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <li class="nav-item">
                <a class="nav-link text-decoration-none" href="{{ route('login') }}">Se connecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-decoration-none" href="{{ route('register') }}">S'enregistrer</a>
            </li>
        @endauth
    </ul>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>