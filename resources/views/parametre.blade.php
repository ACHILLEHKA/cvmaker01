<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{asset('assets/css/parametre.css')}}">

    <title>Document</title>
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
                <div class="profile-header">
                    <img src="https://via.placeholder.com/80" alt="Profile Picture">
                    <div>
                        <h1>{{ $info->nom }} {{ $info->prenom }}</h1>
                        <p>Date de naissance: {{$info->date_de_naissance}}</p>
                    </div>
                    <button>Modifier</button>
                </div>
                <div class="profile-info">
                    <div>
                        <p><strong>Sexe</strong></p>
                        <p>{{$info->sexe}}</p>
                    </div>
                    <div>
                        <p><strong>Nationalité</strong></p>
                        <p>{{$info->nationalite}}</p>
                    </div>
                    <div>
                        <p><strong>Résidence</strong></p>
                        <p>{{$info->ville}}, {{$info->pays_residence}}</p>
                    </div>
                </div>
                <div class="contact-info">
                    <p><strong>Contact</strong></p>
                    <p>Téléphone: {{$info->telephone}}</p>
                    <p>Email: {{$info->email}}</p>
                </div>
                <div class="settings-section">
                    <h3>Mon compte</h3>
                    <div class="setting">
                        <label>
                            <span>Langue de l'interface</span>
                            <input type="checkbox" checked>
                        </label>
                        <div class="description">
                            Changer la langue de l'interface Jobii.
                        </div>
                    </div>
                    <div class="setting">
                        <label>
                            <span>Supprimer mon compte</span>
                            <a href="supprimer.html"> <button class="delete-account"><i
                                        class="fa fa-trash"></i>Supprimer</button>
                            </a>
                        </label>
                        <div class="description">
                            Supprimer définitivement votre compte ainsi que votre CV de Jobii.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

























    <script>
        function toggleSelect(element) {
            element.classList.toggle('select-active');
        }

        function changeFlag(select) {
            const selectedOption = select.options[select.selectedIndex];
            const flagClass = selectedOption.getAttribute('data-flag');
            const flagIcon = select.parentNode.querySelector('.flag-icon');
            flagIcon.className = 'flag-icon ' + flagClass;
        }
    </script>
</body>

</html>