<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/choix_modele.css') }}">
</head>

<body style="overflow-y:hidden">
    <div class="containerer">
        <div class="navbar">
            <div class="nav">CV-MAKER</div>
            <div class="menu" style="font-size:20px;text-decoration:underline; "> Choisissez un modèle
            </div>
        </div>
    </div>
    <div class="slider">
        <input type="radio" name="testimonial" id="t-1">
        <input type="radio" name="testimonial" id="t-2">
        <input type="radio" name="testimonial" id="t-3" checked>
        <input type="radio" name="testimonial" id="t-4">
        <input type="radio" name="testimonial" id="t-5">
        <div class="testimonials">
            <label class="item" for="t-4">
                <div class="containerX">
                    <div class="left-columnX">
                        @if (isset($info['image']) && $info['image'] && $info['image'] !== '')
                            <div class="photoX">
                                <img src="{{ asset('storage/' . $info['image']) }}" alt="Photo">
                            </div>
                        @endif
                        <div class="contact-infoX" style="border-bottom: 1px solid #fff">
                            <h2>Contact</h2>
                            <p><i class="fas fa-phone"></i> {{ $info->telephone }}</p>
                            <p><i class="fas fa-envelope"></i> {{ $info->email }}</p>
                            <p><i class="fas fa-calendar"></i> {{ $info->date_de_naissance }}</p>
                            <p><i class="fas fa-map-marker-alt"></i> {{ $info->ville }}, {{ $info->pays_residence }}
                            </p>
                        </div>
                        <div class="sectionX" style="border-bottom: 1px solid #fff">
                            <h2>Compétences</h2>
                            <ul>
                                @if (isset($info->competences))
                                    @foreach ($info->competences as $competence)
                                        <li>{{ $competence->nom_competence }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="sectionX" style="border-bottom: 1px solid #fff">
                            <h2>Loisirs</h2>
                            <ul>
                                @if (isset($info->Loisirs))
                                    @foreach ($info->loisirs as $loisir)
                                        <li>{{ $loisir->nom_loisir }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="sectionX">
                            <h2>Langues</h2>
                            <ul>
                                @foreach ($info->langues as $langue)
                                    <li>{{ $langue->nom_langue }} <span>({{ $langue->niveau_langue }})</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="right-columnX">
                        <header class="headerX">
                            <div class="header-contentX">
                                <h2 style="">{{ $info->prenom }}</h2>
                                <h1>{{ $info->nom }}</h1>
                                <h4>{{ $info->profil->nom_fonction }}</h4>
                            </div>
                        </header>
                        <div class="sectionX">
                            <h2 style=""> <strong>PROFIL</strong></h2>
                            <p>{{ $info->profil->description_fonction }}</p>
                        </div>
                        <div class="section12">
                            <h2>Éducation</h2>
                            @foreach ($info->educations as $education)
                                <p>
                                    {{ \Carbon\Carbon::parse($education->date_debut_formation)->locale('fr')->translatedFormat('d/m/Y') }}-
                                    {{ \Carbon\Carbon::parse($education->date_fin_formation)->locale('fr')->translatedFormat('d/m/Y') }}
                                </p>
                                <p> <strong>
                                        <h3>{{ $education->titre_formation }}</h3>
                                    </strong>
                                </p>
                                <h4> <strong style="text-transform: uppercase">{{ $education->ecole }}</strong> | <span
                                        style="text-transform: capitalize">{{ $education->lieu_formation }}</span></h4>
                            @endforeach
                        </div>
                        <div class="sectionX" style="height:345px;display:flex;justify-content:space-evenly">
                            <h2 style="display: flex;justify-content:center;align-items:center;">Expériences</h2>
                            @foreach ($info->experiences as $experience)
                                <p>
                                    <strong
                                        style="text-transform:uppercase; background-color:rgb(240, 104, 55);padding:5px;border-radius:10px">{{ $experience->titre_du_poste }}</strong>
                                    {{ \Carbon\Carbon::parse($experience->date_debut_poste)->locale('fr')->translatedFormat('d/m/Y') }}
                                    -
                                    {{ \Carbon\Carbon::parse($experience->date_debut_poste)->locale('fr')->translatedFormat('d/m/Y') }}
                                </p>
                                <p><strong style="text-transform: uppercase">{{ $experience->nom_entreprise }}</strong>
                                    <strong> | </strong> {{ $experience->lieu_de_travail }}
                                </p>
                            @endforeach
                        </div>
                        <!-- Conteneur pour les boutons -->
                        <div class="button-container" style="">
                            <form action="{{ route('choix4') }}" method="GET" id="previewForm">
                                <button type="submit" class="btn-view"><i class="fas fa-eye"></i> Aperçu</button>
                            </form>
                            <form action="{{ route('dashboardchoix4') }}">
                                <button class="btn-select"><i class="fas fa-check"></i> Choisir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </label>
            <label class="item" for="t-3">
                <div class="container">
                    <div class="left-column">
                        @if (isset($info['image']) && $info['image'] && $info['image'] !== '')
                            <div class="photoX">
                                <img src="{{ asset('storage/' . $info['image']) }}" alt="Photo">
                            </div>
                        @endif
                        <div class="contact-info">
                            <h2 style=" border: 1px solid #ccc">Contact</h2>
                            <p><i class="fas fa-phone"></i> {{ $info->telephone }}</p>
                            <p><i class="fas fa-envelope"></i> {{ $info->email }}</p>
                            <p><i class="fas fa-calendar"></i> {{ $info->date_de_naissance }}</p>
                            <p><i class="fas fa-map-marker-alt"></i> {{ $info->ville }}, {{ $info->pays_residence }}
                            </p>
                        </div>
                        <div class="section" style="display:flex; flex-direction:column;justify-content:space-evenly">
                            <h2>Compétences</h2>
                            <ul>
                                @if (isset($info->competences))
                                    @foreach ($info->competences as $competence)
                                        <li>{{ $competence->nom_competence }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="section">
                            <h2>Langues</h2>
                            <p>
                                @foreach ($info->langues as $langue)
                                    <li style="text-transform: capitalize">{{ $langue->nom_langue }}
                                        <span>({{ $langue->niveau_langue }})</span>
                                    </li>
                                @endforeach
                            </p>
                        </div>
                        <div class="section">
                            <h2>Loisirs</h2>
                            <ul>
                                @if (isset($info->Loisirs))
                                    @foreach ($info->loisirs as $loisir)
                                        <li>{{ $loisir->nom_loisir }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="right-column">
                        <header>
                            <div class="header-content">
                                <h1>{{ $info->nom }}</h1>
                                <p>{{ $info->prenom }}</p>
                                <p>{{ $info->profil->nom_fonction }}</p>
                            </div>
                        </header>
                        <div class="section">
                            <h2>Profil</h2>
                            <p>{{ $info->profil->description_fonction }}</p>
                        </div>
                        <div class="section">
                            <h2>Éducation</h2>
                            @foreach ($info->educations as $education)
                                <p>
                                    <strong style="font-size: 15px">{{ $education->titre_formation }}</strong>
                                    {{ \Carbon\Carbon::parse($education->date_debut_formation)->locale('fr')->translatedFormat('d/m/Y') }}-
                                    {{ \Carbon\Carbon::parse($education->date_fin_formation)->locale('fr')->translatedFormat('d/m/Y') }}
                                </p>
                                <p>
                                    {{ $education->ecole }} | {{ $education->lieu_formation }}
                                </p>
                            @endforeach
                        </div>

                        <div class="section">
                            <h2>Expériences</h2>
                            @foreach ($info->experiences as $experience)
                                <p> {{ \Carbon\Carbon::parse($experience->date_debut_poste)->locale('fr')->translatedFormat('d/m/Y') }}-
                                    {{ \Carbon\Carbon::parse($experience->date_fin_poste)->locale('fr')->translatedFormat('d/m/Y') }}
                                    <br><strong>{{ $experience->titre_du_poste }}</strong><br>{{ $experience->nom_entreprise }}
                                    | {{ $experience->lieu_de_travail }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                    <div class="overlay">
                        <form action="{{ route('choix3') }}" method="GET" id="previewForm">
                            <button type="submit" class="btn-view"><i class="fas fa-eye"></i> Aperçu</button>
                        </form>

                        <form action="{{ route('dashboardchoix3') }}" method="GET">
                            <button class="btn-select">
                                <i class="fas fa-check"></i> Choisir
                            </button>
                        </form>

                    </div>
                </div>
            </label>

            <label class="item" for="t-1">
                <div class="container12">
                    <div class="left-column12">
                        @if (isset($info['image']) && $info['image'] && $info['image'] !== '')
                            <div class="photoX">
                                <img src="{{ asset('storage/' . $info['image']) }}" alt="Photo">
                            </div>
                        @endif
                        <div class="contact-info12">
                            <h2>Contact</h2>
                            <p><i class="fas fa-phone"></i> {{ $info->telephone }}</p>
                            <p><i class="fas fa-envelope"></i> {{ $info->email }}</p>
                            <p><i class="fas fa-calendar"></i> {{ $info->date_de_naissance }}</p>
                            <p><i class="fas fa-map-marker-alt"></i> {{ $info->ville }}, {{ $info->pays_residence }}
                            </p>
                        </div>
                        <div class="section12">
                            <h2>Compétences</h2>
                            <ul>
                                @if (isset($info->competences))
                                    @foreach ($info->competences as $competence)
                                        <li>{{ $competence->nom_competence }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="section12">
                            <h2>Langues</h2>
                            @foreach ($info->langues as $langue)
                                <p style="text-transform: capitalize">{{ $langue->nom_langue }}
                                    <span>({{ $langue->niveau_langue }})</span>
                                </p>
                            @endforeach
                        </div>
                        <div class="section12">
                            <h2>Loisirs</h2>
                            <ul>
                                @if (isset($info->loisirs))
                                    @foreach ($info->loisirs as $loisir)
                                        <li>{{ $loisir->nom_loisir }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="right-column12">
                        <header class="header12">
                            <div class="header-content12">
                                <h1>{{ $info->nom }}</h1>
                                <p>{{ $info->prenom }}</p>
                                <p>{{ $info->profil->nom_fonction }}</p>
                            </div>
                        </header>
                        <div class="section12">
                            <h2>Profil</h2>
                            <p>{{ $info->profil->description_fonction }}</p>
                        </div>
                        <div class="section12">
                            <h2>Éducation</h2>
                            @foreach ($info->educations as $education)
                                <p>
                                    <strong style="font-size: 15px">{{ $education->titre_formation }}</strong>
                                    {{ \Carbon\Carbon::parse($education->date_debut_formation)->locale('fr')->translatedFormat('d/m/Y') }}-
                                    {{ \Carbon\Carbon::parse($education->date_fin_formation)->locale('fr')->translatedFormat('d/m/Y') }}
                                </p>
                                <p>
                                    {{ $education->ecole }} | {{ $education->lieu_formation }}
                                </p>
                            @endforeach
                        </div>

                        <div class="section12">
                            <h2>Expériences</h2>
                            @foreach ($info->experiences as $experience)
                                <p> {{ \Carbon\Carbon::parse($experience->date_debut_poste)->locale('fr')->translatedFormat('d/m/Y') }}-
                                    {{ \Carbon\Carbon::parse($experience->date_fin_poste)->locale('fr')->translatedFormat('d/m/Y') }}
                                    <br><strong>{{ $experience->titre_du_poste }}</strong><br>{{ $experience->nom_entreprise }}
                                    | {{ $experience->lieu_de_travail }}
                                </p>
                            @endforeach
                        </div>
                        <div class="button-container2">
                            <form action="{{ route('choix1') }}" method="GET" id="previewForm">
                                <button type="submit" class="btn-view"><i class="fas fa-eye"></i> Aperçu</button>
                            </form>
                            <form action="{{ route('dashboardchoix1') }}">
                                <button class="btn-select"><i class="fas fa-check"></i> Choisir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </label>

            <label class="item" for="t-2">
                <div class="resume-main">
                    <div class="left-box">
                        <br><br>
                        <div class="content-box">
                            <h2>PROFIL</h2>
                            <hr class="hr1">
                            <p class="p1">{{ $info->profil->description_fonction }}</p>
                            <br>
                            <h2>CONTACT</h2>
                            <hr class="hr1">
                            <p class="p2">Tel: {{ $info->telephone }}</p>
                            <p class="p2">Email: {{ $info->email }}</p>
                            <p class="p2">Ville: {{ $info->ville }}</p>
                            <br>
                            <h2>LANGUES:</h2>
                            <hr class="hr1">
                            @foreach ($info->langues as $langue)
                                <li style="color: white; text-transform: capitalize">{{ $langue->nom_langue }}
                                    <span>({{ $langue->niveau_langue }})</span>
                                </li>
                            @endforeach
                            <br><br>
                            <h2>COMPETENCES</h2>
                            <hr class="hr1">
                            <br>
                            <div class="col-div-6">
                                @if (isset($info->competences))
                                    @foreach ($info->competences as $competence)
                                        <strong style="color: white">
                                            <li>{{ $competence->nom_competence }}</li>
                                        </strong>
                                    @endforeach
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <h2>LOISIRS</h2>
                            <hr class="hr1">
                            <br>
                            @if (isset($info->loisirs))
                                @foreach ($info->loisirs as $loisir)
                                    <div class="col-div-3 col3">
                                        <i class="fa fa-gamepad in"></i>
                                        <span class="inp">
                                            <p>{{ $loisir->nom_loisir }}</p><br>
                                        </span>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="qmtr">
                            <h1 style="color: black;">
                                {{ $info->nom }}<br>
                            </h1>
                            <span style="text-transform: initial">{{ $info->prenom }}</span>
                        </div>
                        <br>
                        <p class="p3">{{ $info->profil->nom_fonction }}</p>
                        <br>
                        <h2 class="heading">Experience</h2>
                        <hr class="hr2">
                        <br>
                        <div class="col-div-4" style="width: auto;">
                            @foreach ($info->experiences as $experience)
                                <div class="col-div-8">
                                    <p class="p5"><strong>{{ $experience->titre_du_poste }}</strong></p>
                                </div>
                                <p>
                                    {{ \Carbon\Carbon::parse($experience->date_debut_poste)->locale('fr')->translatedFormat('d/m/Y') }}
                                    -
                                    {{ \Carbon\Carbon::parse($experience->date_fin_poste)->locale('fr')->translatedFormat('d/m/Y') }}
                                </p>
                                <p>
                                    <span class="span1">{{ $experience->nom_entreprise }}</span> <strong>|</strong>
                                    <span>{{ $experience->lieu_de_travail }}</span>
                                </p>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <h2 class="heading">Education</h2>
                        <hr class="hr2">
                        <br>
                        <div class="col-div-4" style="width: auto;">
                            @foreach ($info->educations as $education)
                                <p style="display: flex">
                                    <strong
                                        style="font-size: 15px; text-decoration: underline; text-underline-offset: 3px; text-transform: capitalize">{{ $education->titre_formation }}:
                                        <br></strong>
                                    {{ \Carbon\Carbon::parse($education->date_debut_formation)->locale('fr')->translatedFormat('d/m/Y') }}
                                    -
                                    {{ \Carbon\Carbon::parse($education->date_fin_formation)->locale('fr')->translatedFormat('d/m/Y') }}
                                </p>
                                <br>
                                <p>{{ $education->ecole }} | {{ $education->lieu_formation }}</p>
                            @endforeach
                        </div>
                    </div>
                    <!-- Conteneur pour les boutons -->
                    <div class="button-container3">
                        <form action="{{ route('choix2') }}" method="GET" id="previewForm">
                            <button type="submit" class="btn-view"><i class="fas fa-eye"></i> Aperçu</button>
                        </form>
                        <form action="{{ route('dashboardchoix2') }}" method="GET">
                            <button class="btn-select"><i class="fas fa-check"></i> Choisir</button>
                        </form>
                    </div>
                </div>
            </label>

            <label class="item" for="t-5">
                <div class="cvContainerNew">
                    <div class="cvLeftColumnNew">
                        @if (isset($info['image']) && $info['image'] && $info['image'] !== '')
                            <div class="photoX">
                                <img src="{{ asset('storage/' . $info['image']) }}" alt="Photo">
                            </div>
                        @endif
                        <div class="cvContactInfoNew">
                            <h2>Contact</h2>
                            <p><i class="fas fa-phone"></i> {{ $info->telephone }}</p>
                            <p><i class="fas fa-envelope"></i> {{ $info->email }}</p>
                            <p><i class="fas fa-calendar"></i> {{ $info->date_de_naissance }}</p>
                            <p><i class="fas fa-map-marker-alt"></i> {{ $info->ville }},
                                {{ $info->pays_residence }}
                            </p>
                        </div>
                        <div class="cvSectionNew">
                            <h2>Compétences</h2>
                            <ul>
                                @if (isset($info->competences))
                                    @foreach ($info->competences as $competence)
                                        <li>{{ $competence->nom_competence }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="cvSectionNew">
                            <h2>Langues</h2>
                            <ul>
                                <li>Néerlandais (<span>Langue maternelle</span>)</li>
                                <li>Français (<span>Langue maternelle</span>)</li>
                                <li>Anglais (<span>Professionnel</span>)</li>
                                <li>Espagnol (<span>Intermédiaire</span>)</li>
                            </ul>
                        </div>
                        <div class="cvSectionNew">
                            <h2>Loisirs</h2>
                            <ul>
                                @if (isset($info->Loisirs))
                                    @foreach ($info->loisirs as $loisir)
                                        <li>{{ $loisir->nom_loisir }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="cvRightColumnNew">
                        <header class="cvHeaderNew">
                            <div class="cvHeaderContentNew">
                                <h1>{{ $info->nom }}</h1>
                                <p>{{ $info->prenom }}</p>
                                <p>{{ $info->profil->nom_fonction }}</p>
                            </div>
                        </header>
                        <div class="cvSectionNew">
                            <h2>Profil</h2>
                            <p>{{ $info->profil->description_fonction }}</p>
                        </div>
                        <div class="cvSectionNew">
                            <h2>Éducation</h2>
                            @foreach ($info->educations as $education)
                                <div class="cvEducationEntry">
                                    <p>
                                        {{ \Carbon\Carbon::parse($education->date_debut)->format('Y') }} -
                                        {{ \Carbon\Carbon::parse($education->date_fin)->format('Y') }}<br>
                                        <strong>{{ $education->titre }}</strong><br>
                                        {{ $education->ecole }} | {{ $education->lieu }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        <div class="cvSectionNew">
                            <h2>Expériences</h2>
                            @foreach ($info->experiences as $experience)
                                <div class="cvExperienceEntry">
                                    <p>
                                        {{ \Carbon\Carbon::parse($experience->date_debut)->format('m-Y') }} -
                                        {{ \Carbon\Carbon::parse($experience->date_fin)->format('m-Y') }}<br>
                                        <strong>{{ $experience->intitule_poste }}</strong><br>
                                        {{ $experience->nom_entreprise }} | {{ $experience->lieu }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="button-container4">
                        <form action="{{ route('choix5') }}" method="GET" id="previewForm">
                            <button type="submit" class="btn-view"><i class="fas fa-eye"></i> Aperçu</button>
                        </form>
                        <form action="{{ route('dashboardchoix5') }}" method="GET">
                            <button class="btn-select"><i class="fas fa-check"></i> Choisir</button>
                        </form>
                    </div>
                </div>
            </label>
        </div>


    </div>
</body>

</html>
