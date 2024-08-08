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

        <form action="" method="POST">
            @csrf
            <div class="form-container">
                <h2>Etape <span>1</span> sur 5</h2>
                <div class="info">
                    <div class="photo-input-wrapper">
                        <label for="photo">
                            <img src="https://via.placeholder.com/150" alt="Photo" id="photoPreview">
                            <div class="upload-icon">+</div>
                        </label>
                        <input type="file" id="photo" name="photo" accept="image/*"
                            onchange="loadPhoto(event)">
                        @error('photo')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="infop">
                        <label for="firstName">Nom:</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Entrez votre Nom"
                            value="{{ old('firstName') }}" />
                        @error('firstName')
                            <div class="error-message">{{ $message }}</div>
                        @enderror

                        <label for="lastName">Prenom:</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Entrez votre Prenom"
                            value="{{ old('lastName') }}" />
                        @error('lastName')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="infogrid">
                    <!-- Date of Birth -->
                    <div class="field-wrapper">
                        <label for="dob">Date de Naissance:</label>
                        <input type="date" id="dob" name="dob" value="{{ old('dob') }}" />
                        @error('dob')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Nationality -->
                    <div class="field-wrapper">
                        <label for="nationality">Nationalité:</label>
                        <select id="nationality" name="nationality">
                            <option value="">Sélectionnez la nationalité</option>
                            <!-- Options can be dynamically populated here -->
                        </select>
                        @error('nationality')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Gender -->
                    <div class="field-wrapper">
                        <label for="gender">Sexe:</label>
                        <select id="gender" name="gender">
                            <option value="">Sélectionnez le sexe</option>
                            <option value="M" {{ old('gender') == 'M' ? 'selected' : '' }}>Masculin</option>
                            <option value="F" {{ old('gender') == 'F' ? 'selected' : '' }}>Féminin</option>
                            <option value="X" {{ old('gender') == 'X' ? 'selected' : '' }}>Autre</option>
                        </select>
                        @error('gender')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- City -->
                    <div class="field-wrapper">
                        <label for="city">Ville:</label>
                        <input type="text" id="city" name="city" placeholder="Entrez votre ville"
                            value="{{ old('city') }}" />
                        @error('city')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Residence Country -->
                    <div class="field-wrapper">
                        <label for="residenceCountry">Pays de Résidence:</label>
                        <select id="residenceCountry" name="residenceCountry">
                            <option value="">Sélectionnez le pays</option>
                            <!-- Options can be dynamically populated here -->
                        </select>
                        @error('residenceCountry')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Phone Number -->
                    <div class="field-wrapper">
                        <label for="phone">Numéro de Téléphone:</label>
                        <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone"
                            value="{{ old('phone') }}" />
                        @error('phone')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Email -->
                    <div class="field-wrapper">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre email"
                            value="{{ old('email') }}" />
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Bouton ajouté -->
                <button class="submitBtn">
                    Suivant
                    <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow">
                        <path
                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        // Function to preview the uploaded photo
        function loadPhoto(event) {
            const photoPreview = document.querySelector("#photoPreview");
            photoPreview.src = URL.createObjectURL(event.target.files[0]);
        }

        // Function to populate countries and sort them alphabetically
        document.addEventListener('DOMContentLoaded', function() {
            fetch('https://restcountries.com/v3.1/all')
                .then(response => response.json())
                .then(data => {
                    data.sort((a, b) => a.name.common.localeCompare(b.name.common));
                    const nationalitySelect = document.querySelector("#nationality");
                    const residenceCountrySelect = document.querySelector("#residenceCountry");
                    data.forEach(country => {
                        const option = document.createElement("option");
                        option.value = country.cca2;
                        option.textContent = country.name.common;
                        nationalitySelect.appendChild(option.cloneNode(true));
                        residenceCountrySelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching countries:', error));
        });

        // Initialize intl-tel-input for the phone number field
        document.addEventListener('DOMContentLoaded', function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                initialCountry: "auto",
                geoIpLookup: function(success, failure) {
                    fetch('https://ipinfo.io/json')
                        .then(response => response.json())
                        .then(data => success(data.country))
                        .catch(error => success('US'));
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });
        });
    </script>
</body>

</html>
