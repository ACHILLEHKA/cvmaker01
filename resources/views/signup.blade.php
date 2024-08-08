<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
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

    <div class="contenaire-contenaireX">
        <div class="containerX">
            <h1>CRÉER MON CV</h1>
            <p>En continuant, vous acceptez les <a href="#">Conditions d'utilisation</a>, la <a href="#">Politique de confidentialité</a> et l'<a href="#">Utilisation des cookies</a> de Jobii.</p>
            <button class="google-btn">
                <img src="{{ asset('assets/images/google-removebg-preview.png') }}" alt="Google Logo"> S'inscrire avec Google
            </button>
            <div class="divider">
                <span></span>
                <p>OU</p>
                <span></span>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group">
                    <label for="name"><img src="{{ asset('assets/images/icons8-homme-48.png') }}" alt="Person icon"></label>
                    <input type="text" id="name" name="name" placeholder="Nom" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="email"><img src="{{ asset('assets/images/email-removebg-preview.png') }}" alt="Email icon"></label>
                    <input type="email" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="password"><img src="{{ asset('assets/images/password-removebg-preview.png') }}" alt="Password icon"></label>
                    <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="password_confirmation"><img src="{{ asset('assets/images/password-removebg-preview.png') }}" alt="Password icon"></label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
                    @error('password_confirmation')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="signup-btn">S'inscrire avec e-mail</button>
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
