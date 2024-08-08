<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/etape_final.css') }}">
</head>

<body>
    <div class="main-container">
        <div class="animation-container">
            <div class="custom-container">
                <div class="custom-dot custom-dot-1"></div>
                <div class="custom-dot custom-dot-2"></div>
                <div class="custom-dot custom-dot-3"></div>
            </div>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur result="blur" stdDeviation="10" in="SourceGraphic"></feGaussianBlur>
                        <feColorMatrix values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7" mode="matrix"
                            in="blur">
                        </feColorMatrix>
                    </filter>
                </defs>
            </svg>
        </div>
        <div class="form-container">
            <h2>Etape <span>5</span> sur 5</h2>
            <p>
                <strong> Profil | </strong>Aidez les recruteurs à comprendre qui vous êtes et précisez l'objectif que
                vous souhaitez atteindre. Si vous n'avez pas d'expérience, cette rubrique est l'occasion idéale pour
                vous mettre en valeur.
            </p>
<!-- Formulaire pour ajouter une fonction -->
<form action="{{ route('saveFonction') }}" method="POST">
    @csrf
    <div class="formation-container5">
        <div class="profil">
            <label for="nom_fonction"><strong>Profil*</strong></label>
            <input type="text" id="nom_fonction" name="nom_fonction" class="profil-input" placeholder="Fonction actuel (ex:Etudiant,Vendeur)">
            @error('nom_fonction')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <textarea name="description_fonction" id="description_fonction" class="texte-area" placeholder="Décrivez vos objectifs professionnel et vos compétences en quelques lignes"></textarea>
        @error('description_fonction')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <div class="formation-container-btn5">
            <button type="submit">Ajouter <strong>+</strong></button>
        </div>
    </div>
</form>

<!-- Formulaire pour ajouter un loisir -->
<form action="{{ route('saveLoisir') }}" method="POST">
    @csrf
    <div class="competence-section">
        <div class="field-wrapper5">
            <label for="nom_loisir"><strong>Centres d'intérêt (0/6)</strong></label>
            <input type="text" id="nom_loisir" name="nom_loisir" class="input1" placeholder="ex:(Football)">
            @error('nom_loisir')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <div class="note">
                Ajoutez un ou plusieurs centres d'intérêts (optionnel)
            </div>
        </div>
        <div class="formation-container-btn5">
            <button type="submit">Ajouter <strong>+</strong></button>
        </div>
    </div>
</form>

            <div class="btnse">
                <a href="{{ route('etape4') }}">
                    <button type="button" class="submit-button submitBtn2">
                        <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow">
                            <path
                                d="M109.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L157.2 256l157.6-157.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z">
                            </path>
                        </svg>
                        Précédent
                    </button>
                </a>
                <a href="{{ route('choix_modele') }}">
                    <button type="" class="submit-button submitBtn3">
                        Suivant
                        <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h306.7L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                            </path>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
