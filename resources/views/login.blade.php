<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <div class="container-principale">
        <div class="container">
            <div class="navbar">
                <div class="nav">Jobii</div>
                <div class="menu">
                    <div class="menu-item">
                            <span class="icon-home">
                                <img src="{{ asset('assets/images/télécharger-removebg-preview.png') }}" alt="">
                            </span>
                    </div>
                        <div class="menu-item1">Créer mon CV</div>
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
    </div>
    <div class="container-login-container">
        <div class="login-container">
            <h1>SE CONNECTER</h1>
            <p>Vous n'avez pas encore de compte? <span><a href="{{ route('signup') }}">Créez-en un!</a></span></p>
            <button class="google-btn">
                <img src="{{ asset('assets/images/google-removebg-preview.png') }}" alt="Google logo">
                Google
            </button>
            <div class="divider">
                <span></span> OU <span></span>
            </div>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="input-group">
                    <label for="email"><img src="{{ asset('assets/images/email.jpeg') }}" alt="Email icon"></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <label for="password"><img src="{{ asset('assets/images/password-removebg-preview.png') }}" alt="Password icon"></label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="forgot-password">
                    <span><a href="{{route('')}}">Mot de passe oublié?</a></span>
                </div>
                <button type="submit" class="login-btn">Connexion</button>
            </form>
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