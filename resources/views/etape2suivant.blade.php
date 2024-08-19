<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/etape_final.css') }}">
</head>

<body style="overflow-y: hidden">
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
            <form action="" method="POST">
                @csrf
                <div class="formation-container2">
                    <div class="field-wrapper">
                        <label for="formation">Formation:</label>
                        <select id="formation" name="formation">
                            <option value="Bachelier" {{ old('formation') == 'Bachelier' ? 'selected' : '' }}>Bachelier
                            </option>
                            <option value="Secondaire" {{ old('formation') == 'Secondaire' ? 'selected' : '' }}>
                                Secondaire</option>
                            <option value="Master" {{ old('formation') == 'Master' ? 'selected' : '' }}>Master</option>
                            <option value="Doctorat" {{ old('formation') == 'Doctorat' ? 'selected' : '' }}>Doctorat
                            </option>
                            <option value="Licence" {{ old('formation') == 'Licence' ? 'selected' : '' }}>Licence
                            </option>
                            <option value="BTS" {{ old('formation') == 'BTS' ? 'selected' : '' }}>BTS</option>
                        </select>
                        @error('formation')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-wrapper">
                        <label for="titre_formation">Titre de formation:</label>
                        <input type="text" id="titre_formation" name="titre_formation"
                            placeholder="ex: (Informatique)" value="{{ old('titre_formation') }}" maxlength="300"/>
                        @error('titre_formation')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-wrapper">
                        <label for="ecole">Ecole ou Organisation:</label>
                        <input type="text" id="ecole" name="ecole" placeholder="ex: (IAI-TOGO)"
                            value="{{ old('ecole') }}" maxlength="300" />
                        @error('ecole')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-wrapper">
                        <label for="lieu_formation">Lieu de Formation:</label>
                        <input type="text" id="lieu_formation" name="lieu_formation" placeholder="Pays ou ville"
                            value="{{ old('lieu_formation') }}" maxlength="300" />
                        @error('lieu_formation')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-wrapper">
                        <label for="date_debut_formation">Date-Début:</label>
                        <input type="date" id="date_debut_formation" name="date_debut_formation"
                            value="{{ old('date_debut_formation') }}"/>
                        @error('date_debut_formation')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-wrapper">
                        <label for="date_fin_formation">Date-fin:</label>
                        <input type="date" id="date_fin_formation" name="date_fin_formation"
                            value="{{ old('date_fin_formation') }}" />
                        @error('date_fin_formation')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="btns" >
                    <a href="{{ route('etape2') }}" style="text-decoration: none">
                        <button type="button" class="submit-button cancelBtn"
                            style="background-color: #dc3545; color: white;">
                            Annuler
                            <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow">
                                <path
                                    d="M109.8 233.4c-12.7 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L157.2 256l157.6-157.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z">
                                </path>
                            </svg>
                        </button>
                    </a>
                    <a href="{{ route('etape2') }}" style="text-decoration: none;">
                        <button type="submit" class="submit-button saveBtn"
                            style="background-color: #28a745; color: white;">
                            Enregistrer
                            <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow">
                                <path
                                    d="M109.8 233.4c-12.7 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L157.2 256l157.6-157.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z">
                                </path>
                            </svg>
                        </button>
                    </a>

                </div>
            </form>
        </div>
    </div>
</body>
</html>
