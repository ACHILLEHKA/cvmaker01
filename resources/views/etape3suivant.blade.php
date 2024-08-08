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
            <h2>Etape <span>3</span> sur 5</h2>
            <p>
                <strong>Expériences |</strong> Ajoutez uniquement les expériences qui ont un lien avec le job pour
                lequel vous postulez. Un stage, un petit boulot ou le bénévolat est également une expérience. Vos
                expériences seront automatiquement filtrées du plus récent au plus ancien.
            </p>
            <form action="{{ route('etape3suivant') }}" method="POST">
                @csrf
                <div class="formation-container2">
                    <div class="field-wrapper">
                        <label for="titre_du_poste">Titre du poste:</label>
                        <input type="text" id="titre_du_poste" name="titre_du_poste" placeholder="ex:(Développeur web)" />
                        @error('titre_du_poste')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-wrapper">
                        <label for="nom_entreprise">Entreprise:</label>
                        <input type="text" id="nom_entreprise" name="nom_entreprise" placeholder="ex: (SPARK-CORPORATION)" />
                        @error('nom_entreprise')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-wrapper">
                        <label for="lieu_de_travail">Lieu de travail:</label>
                        <input type="text" id="lieu_de_travail" name="lieu_de_travail" placeholder="Pays ou ville" />
                        @error('lieu_de_travail')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-wrapper">
                        <label for="date_debut_poste">Date-Début:</label>
                        <input type="date" id="date_debut_poste" name="date_debut_poste" />
                        @error('date_debut_poste')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-wrapper">
                        <label for="date_fin_poste">Date-Fin:</label>
                        <input type="date" id="date_fin_poste" name="date_fin_poste" />
                        @error('date_fin_poste')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="btns">
                    <a href="{{ route('etape3') }}">
                        <button type="button" class="submit-button cancelBtn" style="background-color: #dc3545; color: white;">
                            Annuler
                            <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow">
                                <path d="M109.8 233.4c-12.7 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L157.2 256l157.6-157.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                            </svg>
                        </button>
                    </a>
                    <button type="submit" class="submit-button saveBtn" style="background-color: #28a745; color: white;">
                        Enregistrer
                        <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow">
                            <path d="M109.8 233.4c-12.7 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L157.2 256l157.6-157.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                        </svg>
                    </button>
                </div>
            </form>
            
        </div>
        </form>
    </div>
</body>

</html>
