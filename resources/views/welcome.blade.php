<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cv-maker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">
</head>

<body>
    <div class="container-principale">
        <div class="container">
            <div class="navbar">
                <div class="nav">CV-MAKER</div>
                <div class="menu">
                    <a href="{{ route('login') }}">
                        <div class="menu-item">Connexion</div>
                    </a>
                    <a href="{{ route('dashboard') }}">
                        <div class="menu-item">Créer mon CV</div>
                    </a>
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

            <div class="container1">
                <div class="text1-creer-cv">
                    <p>CRéer UN CV</p>
                    <p>GRATUITEMENT</p>
                </div>
                <div class="text2-creer-cv">
                    Augmentez vos chances de trouver du travail en quelques minutes. Créez et téléchargez votre CV
                    professionnel gratuit en toute simplicité
                </div>
                <a href="{{ route('dashboard') }}">
                    <button type="button">Créer mon CV</button>
                </a>
            </div>
            <div class="card">
                <div class="container2">
                </div>
                <div class="card-head">
                    <header>
                        <h2>Prénom</h2>
                        <h2>NOM DE FAMILLE</h2>
                        <p>Fonction que vous occupez</p>
                    </header>
                </div>
                <div class="card-body">
                    <section class="profil">
                        <div class="profil-info">
                            <h2>Profil</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia justo at nibh
                                condimentum, at efficitur lorem aliquet.</p>
                        </div>
                        <div class="coordonnees">
                            <h2>Coordonnées</h2>
                            <ul>
                                <li><i class="fa fa-envelope"></i> email@example.com</li>
                                <li><i class="fa fa-phone"></i> +33 1 23 45 67 89</li>
                                <li><i class="fa fa-map-marker"></i> Adresse</li>
                            </ul>
                        </div>
                    </section>
                    <div class="separator-horizontal"></div>
                    <section class="experience-formation">
                        <div class="experience">
                            <h6>EXPERIENCES</h6>
                            <ul>
                                <li>Job 1 <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam,
                                        perferendis?</p>
                                </li>
                                <li>Job 2 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum,
                                        mollitia.</p>
                                </li>
                                <li>Job 3 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, vero!</p>
                                </li>
                            </ul>
                        </div>
                        <div class="formations">
                            <h6>FORMATION</h6>
                            <ul>
                                <li>Formation1 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, libero.
                                    </p>
                                </li>
                                <li>Formation2 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, libero.
                                    </p>
                                </li>
                                <li>Formation3 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, libero.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>

    <div class="autre-container">
        <div class="menu2"><span>comment</span> créer un cv</div>
    </div>
    <div class="carde-container">
        <hr class="dashe-lign">
        <div class="carde">
            <div class="icon">
                <div class="wht">
                    <img class="image-ronde" src="{{ asset('assets/images/choix_design.png') }}" alt="Icon">
                </div>
            </div>
            <div class="contente">
                <h1><span>1.</span> COMPLÉTER LE CV</h1>
                <p>Introduisez vos données personnelles, expériences, compétences, ...</p>
            </div>
        </div>

        <div class="carde">
            <div class="icon">
                <div class="wht">
                    <img class="image-ronde" src="{{ asset('assets/images/modifier.jpg') }}" alt="Icon">
                </div>
            </div>
            <div class="contente">
                <h1><span>2.</span> Choisir un design</h1>
                <p>Choisissez un exemple de CV correspondant à vos goûts</p>
            </div>
        </div>

        <div class="carde">
            <div class="icon">
                <div class="wht">
                    <img class="image-ronde" src="{{ asset('assets/images/pdf.webp') }}" alt="Icon">
                </div>
            </div>
            <div class="contente">
                <h1><span>3.</span> Télécharger</h1>
                <p>Exportez votre CV gratuit en format PDF et postulez sans plus attendre !</p>
            </div>
        </div>
    </div>



    <div class="custom-container-wrapper">
        <div class="custom-container">
            <input type="radio" name="custom-slider" id="custom-item-1" checked>
            <input type="radio" name="custom-slider" id="custom-item-2">
            <input type="radio" name="custom-slider" id="custom-item-3">
            <input type="radio" name="custom-slider" id="custom-item-4">
            <input type="radio" name="custom-slider" id="custom-item-5">

            <div class="custom-cards">
                <label class="custom-card" for="custom-item-1" id="custom-song-1">
                    <img src="{{ asset('assets/images/capture1.png') }}" alt="song">
                </label>
                <label class="custom-card" for="custom-item-2" id="custom-song-2">
                    <img src="{{ asset('assets/images/capture2.png') }}" alt="song">
                </label>
                <label class="custom-card" for="custom-item-3" id="custom-song-3">
                    <img src="{{ asset('assets/images/imagecopy7.png') }}" alt="song">
                </label>
                <label class="custom-card" for="custom-item-4" id="custom-song-4">
                    <img src="{{ asset('assets/images/image-copy2.png') }}" alt="song">
                </label>
                <label class="custom-card" for="custom-item-5" id="custom-song-5">
                    <img src="{{ asset('assets/images/image-copy.png') }}" alt="song">
                </label>
            </div>
        </div>
    </div>

    <div class="conteneurcard">
        <div class="conteneur-card-image">
            <div class="carte-credit">
                <div class="logo-jobii">CV-MAKER</div>
                <div class="logo-visa">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="VISA">
                </div>
                <div class="puce">
                    <img src="{{ asset('assets/images/puce.png') }}" alt="Puce">
                </div>
                <div class="trait">
                    <img src="{{ asset('assets/images/broken.ea7ebf9.png') }}" alt="Trait">
                </div>
                <div class="solde">
                    € 0,00
                </div>
            </div>

            <div class="texte-carte">
                <div class="titre-texte-carte">
                    <h1>C'est totalement <span>gratuit</span></h1>
                </div>
                <p>De nombreux sites de création de CV sont payants même s’ils affirment le contraire. Avec CV-MAKER, fini
                    les mauvaises surprises. N'ayez plus à payer le moindre centime pour télécharger votre CV après sa
                    création.</p>
            </div>
        </div>

        <div class="conteneur-card-pdfdownload">
            <div class="card-pdfdownload-text">
                <h1>Exportez en fichier <span>PDF</span></h1>
                <p>Téléchargez votre CV en format PDF. Les fichiers PDF peuvent être lus sur n’importe quel appareil
                    sans que la mise en page soit déformée. Par ailleurs, nous avons pris le soin d’assurer que votre CV
                    prenne le moins d’espace possible sur votre appareil.
                </p>
            </div>
            <div class="card-pdfdowload-image">
                <img src="{{ asset('assets/images/pdf.webp') }}" alt="Image pdf">
                <div class="titre-card-pdfdownload">Fichier pdf</div>
            </div>
        </div>
    </div>

    <div class="conteur-principale-card-codeQR">
        <div class="conteneur-card-codeQR">
            <div class="codeQr">
                <img src="{{ asset('assets/images/qrcode.jpeg') }}" alt="QR Code">
            </div>
            <div class="qr-title">
                SCANNEZ-MOI
            </div>

            <div class="codeQR-texte">
                <h1>Partagez avec un <span>code QR</span></h1>
                <p>Transférez votre CV sur n’importe quel appareil grâce au code QR. En plus d’être écologique, soyez
                    prêt à tout moment à partager votre CV au cas où une opportunité d’embauche se présenterait devant
                    vous.</p>
            </div>
        </div>
    </div>

    <div class="conteneurpr-creerCV">
        <div class="conteneurpr-creerCV-texte">
            <h1>Créez et modifiez
                <span>où que vous soyez</span>
            </h1>
            <p>CV-MAKER est adapté à de nombreux appareils. Créez et modifiez votre CV sur votre ordinateur, smartphone,
                tablette et bien plus encore.</p>
            <div class="btn-creerCV-conteneur"><a href="{{ route('dashboard') }}"><button>Créer mon CV</button></a>
            </div>
        </div>
        <div class="conteneurpr-creerCV-img">
            <img src="{{ asset('assets/images/capturecreercv.png') }}" alt="Creev img">
        </div>
    </div>

    <div class="avantagesdeJobii">
        <div class="avantagetexte">
            <h1>AUTRES <span>AVANTAGES</span> DE CV-MAKER</h1>
        </div>
        <div class="containerlisteavantages">
            <div class="avantage">
                <h1>Démarquez-vous</h1>
                <p>Un CV tape-à-l'œil est toujours un avantage lorsque l'on postule pour un job. Différenciez-vous avec
                    un design qui saura mettre tous vos atouts en valeur.</p>
            </div>
            <div class="avantage">
                <h1>De nouveaux modèles de CV</h1>
                <p>De nouveaux modèles de CV seront ajoutés régulièrement. Choisissez celui qui vous convient le plus
                    dans le lot et foncez décrocher le job de vos rêves !</p>
            </div>
            <div class="avantage">
                <h1>Gagnez du temps</h1>
                <p>Notre outil a été développé dans le but de réduire au maximum le temps de création d'un CV. Rapidité
                    et efficacité sont les mots d'ordre de CV-MAKER.</p>
            </div>
            <div class="avantage">
                <h1>Des conseils à disposition</h1>
                <p>Des conseils sont à votre disposition pour parfaire votre CV. Les normes du marché du travail sont
                    soigneusement respectées afin de mettre toutes les chances de votre côté.</p>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section about">
                <h2>À Propos</h2>
                <p>CV-MAKER est un outil puissant de création de CV qui permet à tout le monde de créer un CV professionnel
                    facilement et rapidement. Suivez-nous pour rester à jour avec les dernières fonctionnalités et
                    modèles.</p>
            </div>
            <div class="footer-section links">
                <h2>Liens Utiles</h2>
                <ul>
                    <li><a href="#home">confidentialités</a></li>
                    <li><a href="#features">Fonctionnalités</a></li>
                    <li><a href="#pricing">Tarification</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h2>Suivez-Nous</h2>
                <div class="social-links">
                    <a href="https://twitter.com/jobiiOff" target="_blank">Twitter</a>
                    <a href="https://facebook.com" target="_blank">Facebook</a>
                    <a href="https://instagram.com" target="_blank">Instagram</a>
                    <a href="https://linkedin.com" target="_blank">LinkedIn</a>
                </div>
            </div>
            <div class="footer-section contact">
                <h2>Contact</h2>
                <p>Email: thebestachille4@gmail.com</p>
                <p>Téléphone: +228 92 74 63 15</p>
                <p>Adresse: 123 Rue de la Réussite, djidogome, Lomé</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 CV-MAKER | Tous droits réservés.
        </div>
    </footer>


    <body>
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
