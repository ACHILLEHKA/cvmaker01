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
            <h2>Etape <span>2</span> sur 5</h2>
            <p>
                <strong>Formation |</strong> Ajoutez les formations qui mettront vos compétences en valeur. Cela
                permettra d’en savoir plus sur votre parcours éducatif. Vos formations seront automatiquement filtrées
                du plus récent au plus ancien.
            </p>
            <div class="formation-container">
                <div class="formation-container-title">
                    <h3>Ajouter une formation (0/4)</h3>
                    <p>
                        Ajoutez jusqu'à 4 formations. De préférence les formations en rapport avec le poste pour lequel
                        vous postulez.
                    </p>
                </div>
                <div class="formation-container-btn">
                    <a href="{{ route('etape2suivant') }}">
                        <button>Ajouter <strong>+</strong></button>
                    </a>
                </div>
            </div>
            <div class="btns">
                <a href="{{ route('etape1') }}" style="text-decoration: none">
                    <button class="submit-button submitBtn2">
                        <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow">
                            <path
                                d="M109.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L157.2 256l157.6-157.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z">
                            </path>
                        </svg>
                        Précédent
                    </button>
                </a>
                <a href="{{ route('etape3') }}" style="text-decoration: none">
                    <button class="submit-button submitBtn3">
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
