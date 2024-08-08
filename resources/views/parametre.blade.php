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
                        <h1>Achille HODOME</h1>
                        <p>Date de naissance: 31/12/2004</p>
                    </div>
                    <button>Modifier</button>
                </div>
                <div class="profile-info">
                    <div>
                        <p><strong>Sexe</strong></p>
                        <p>M</p>
                    </div>
                    <div>
                        <p><strong>Nationalité</strong></p>
                        <p>Togolaise</p>
                    </div>
                    <div>
                        <p><strong>Résidence</strong></p>
                        <p>LOME, Togo</p>
                    </div>
                </div>
                <div class="contact-info">
                    <p><strong>Contact</strong></p>
                    <p>Téléphone: (+228) 92746315</p>
                    <p>Email: thebestachille4@gmail.com</p>
                </div>
                <div class="settings-section">
                    <div class="setting-section-titre">
                        <h3>Mon CV</h3>
                        <h4><i class="material-icons">save</i> Enregistrer</h4>
                    </div>
                    <div class="setting">
                        <label>
                            <span>Langue du CV</span>
                        </label>
                        <div class="description-item">
                            <div class="description">
                                <p>
                                    Les drapeaux seront ajoutés aux langues sélectionnées. Vous pouvez masquer les
                                    drapeaux
                                    à
                                    tout moment.

                            </div>
                        </p>
                        <div class="check"> <input type="checkbox" checked>
                        </div>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-item">

                            <div class="description">
                                Traduisez les gros titres du CV dans la langue que vous souhaitez (éducation,
                                expériences, ...)
                            </div>

                            <div class="langue-select" onclick="toggleSelect(this)">
                                <span class="flag-icon flag-icon-fr"></span>
                                <select onchange="changeFlag(this)">
                                    <option value="fr" data-flag="flag-icon-fr">FR</option>
                                    <option value="eng" data-flag="flag-icon-gb">ENG</option>
                                    <option value="nl" data-flag="flag-icon-nl">NL</option>
                                </select>
                            </div>
                        </div>
                    </div>
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