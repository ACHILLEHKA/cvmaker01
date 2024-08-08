<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <title>Dashboard</title>
</head>

<body>
    <div class="containerer">
        <div class="navbar">
            <div class="nav">CV-MAKER</div>
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
                <a href="{{route('profile.coming_soon')}}" class="nav-item">
                    <p> <i class="material-icons">C</i></p>
                    <p>Criteres</p>
                </a>
                <a href="{{route('profile.jobs')}}" class="nav-item">
                    <p> <i class="material-icons">work</i></p>
                    <p>Jobs</p>
                </a>
                <a href="{{route('profile.parametres')}}" class="nav-item">
                    <p> <i class="material-icons">settings</i>Parametre</p>
                </a>

            </nav>
        </aside>

        <div class="container-personnaliser">
            <div class="container">
                <div class="phone-container">
                    <img src="{{ asset('assets/images/choix1pink.20ff2f6.jpg') }}" alt="Image de CV">
                    <div class="buttons">
                        <button class="btn-apercue">Aperçu</button>
                        <button class="btn-modifier">Modifier</button>
                    </div>
                </div>
                <section class="content">
                    <div class="slt-name">
                        <h1>Bonjour <span>{{ Auth::user()->name }}</span></h1>
                    </div>
                    <div class="cv-section">
                        <h2>Exporter le CV en fichier PDF</h2>
                        <button class="btn-download">Télécharger</button>
                    </div>
                    <div class="share-section">
                        <div class="share-text">
                            <h2>PARTAGER</h2>
                            <p>Soyez écologique et partagez votre CV avec un code QR.</p>
                        </div>
                        <div class="qr-code">
                            <input type="text" placeholder="Code QR privé">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
