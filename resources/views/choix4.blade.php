<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/choix_modele.css') }}">
        <style>
                    body {
            width: 100vw;
            height: 100vh;
            overflow-x: hidden;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: none;
            background-color: #020202;
            transform: scale(0.6);
        }

        .btn-close {
            position: fixed;
            bottom: 20px;
            padding: 10px;
            background-color: red;
            border-radius: 12px;
            bottom: 120%;
            left: 80%;
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
            .btn-close i {
                margin: 0;
            }
        </style>
    </head>
<body>
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
            </div>
        </div>
    </label>
    <form action="{{ route('choix_modele') }}" method="GET">
        <button class="btn-close" type="submit">
            <i class="fas fa-times">FERMER</i>
        </button>
    </form>
</body>
</html>