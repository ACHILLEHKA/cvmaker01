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
            <h2>Etape <span>4</span> sur 5</h2>
            <p>
                <strong> Compétences </strong>Ajoutez les langues et les compétences que vous maitrisez afin de vous
                démarquer des autres candidats.
            </p>
            <form action="{{ route('etape4') }}" method="POST">
                @csrf
                <div class="formation-container4">
                    <div class="languages-section">
                        <div class="field-wrapper">
                            <label for="language"><strong>Langues (1/5)*:</strong></label>
                            <select id="language" class="select-one" name="language">
                                <option value="" disabled selected>Choisir une langue</option>
                                <option value="mandarin">Mandarin</option>
                                <option value="spanish">Espagnol</option>
                                <option value="english">Anglais</option>
                                <option value="hindi">Hindi</option>
                                <option value="arabic">Arabe</option>
                                <option value="bengali">Bengali</option>
                                <option value="portuguese">Portugais</option>
                                <option value="russian">Russe</option>
                                <option value="japanese">Japonais</option>
                                <option value="punjabi">Punjabi</option>
                                <option value="german">Allemand</option>
                                <option value="javanese">Javanais</option>
                                <option value="korean">Coréen</option>
                                <option value="french">Français</option>
                                <option value="turkish">Turc</option>
                                <option value="vietnamese">Vietnamien</option>
                                <option value="telugu">Telugu</option>
                                <option value="marathi">Marathi</option>
                                <option value="wuzhounese">Wuzhounese</option>
                                <option value="malay">Malais</option>
                                <option value="thai">Thaï</option>
                                <option value="italian">Italien</option>
                                <option value="cantonese">Cantonais</option>
                                <option value="swahili">Swahili</option>
                                <option value="sundanese">Sundanese</option>
                                <option value="ukrainian">Ukrainien</option>
                                <option value="burmese">Birman</option>
                                <option value="persian">Persan</option>
                                <option value="polish">Polonais</option>
                                <option value="pashto">Pashto</option>
                                <option value="portuguese-brazilian">Portugais (Brésil)</option>
                                <option value="romanian">Romain</option>
                                <option value="serbo-croatian">Serbo-Croate</option>
                                <option value="nigerian-pidgin">Pidgin Nigérian</option>
                                <option value="hakka">Hakka</option>
                                <option value="greek">Grec</option>
                                <option value="hungarian">Hongrois</option>
                                <option value="kurdish">Kurde</option>
                                <option value="chichewa">Chichewa</option>
                                <option value="nepali">Népalais</option>
                                <option value="czech">Tchèque</option>
                                <option value="somali">Somali</option>
                                <option value="malagasy">Malagasy</option>
                                <option value="tamil">Tamoul</option>
                                <option value="slovak">Slovaque</option>
                                <option value="bosnian">Bosniaque</option>
                                <option value="sinhalese">Cinghalais</option>
                                <option value="lithuanian">Lituanien</option>
                                <option value="khmer">Khmer</option>
                                <option value="maltese">Maltais</option>
                                <option value="lao">Laotien</option>
                                <option value="tigrinya">Tigrinya</option>
                                <option value="georgian">Géorgien</option>
                                <option value="yoruba">Yoruba</option>
                                <option value="mongolian">Mongol</option>
                                <option value="dutch">Néerlandais</option>
                                <option value="zulu">Zoulou</option>
                                <option value="twi">Twi</option>
                                <option value="kannada">Kannada</option>
                                <option value="hawaiian">Hawaïen</option>
                                <option value="aragonese">Aragonais</option>
                                <option value="catalan">Catalan</option>
                                <option value="uyghur">Ouïghour</option>
                                <option value="samoan">Samoan</option>
                                <option value="turkmen">Turkmène</option>
                                <option value="fijian">Fidjien</option>
                                <option value="chechen">Tchétchène</option>
                            </select>
                            @error('language')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="field-wrapper">
                            <label for="niveau_langue">Niveau:</label>
                            <select id="niveau_langue" class="select-two" name="niveau_langue">
                                <option value="" disabled selected>Choisir un niveau</option>
                                <option value="basics">Les bases</option>
                                <option value="good-notions">Bonne notions</option>
                                <option value="fluent">Courant</option>
                                <option value="experienced">Expérimenté</option>
                                <option value="native">Langue Maternelle</option>
                            </select>
                            @error('niveau_langue')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="competence-section">
                        <div class="field-wrapper">
                            <label for="competence"><strong>Compétence:*</strong></label>
                            <input type="text" id="competence" class="input1" name="competence"
                                placeholder="ex: (Excel, PHP, ...)" />
                            <div class="note">Le minimum est de 2 compétences.</div>
                            @error('competence')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="formation-container-btn1">
                        <button type="submit" class="add-btn">Ajouter <strong>+</strong></button>
                    </div>
                </div>
            </form>
            <div class="btns">
                <a href="{{ route('etape3') }}">
                    <button type="button" class="submit-button submitBtn2">
                        <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow">
                            <path
                                d="M109.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L157.2 256l157.6-157.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z">
                            </path>
                        </svg>
                        Précédent
                    </button>
                </a>
                <a href="{{ route('etape5') }}">
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
