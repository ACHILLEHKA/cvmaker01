<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('assets/css/coming_soon.css') }}">
    <title>Jobs</title>
</head>

<body>
    <div class="containerer">
        <div class="navbar">
            <div class="nav">Jobii</div>
            <div class="menu">
                <form method="POST" action="{{ route('logout') }}" >
                    @csrf
                    <button type="submit" class="btn-logout">Déconnexion</button>
                </form>
            </div>
        </div>
    </div>
    <div class="middle-container">
        <aside class="sidebar">
            <nav class="nave">
                <a href="dashboard" class="nav-item">
                    <p> <i class="material-icons">person</i></p>
                    <p>Mon compte</p>
                </a>
                <a href="{{ route('profile.coming_soon') }}" class="nav-item">
                    <p> <i class="material-icons">C</i></p>
                    <p>Criteres</p>
                </a>
                <a href="{{ route('profile.jobs') }}" class="nav-item">
                    <p> <i class="material-icons">work</i></p>
                    <p>Jobs</p>
                </a>
                <a href="{{ route('profile.parametres') }}" class="nav-item">
                    <p> <i class="material-icons">settings</i>Parametre</p>
                </a>

            </nav>
        </aside>
        <div class="container-personnaliser">
            <div class="comming-text">COMMING SOON</div>
        </div>
    </div>
</body>
