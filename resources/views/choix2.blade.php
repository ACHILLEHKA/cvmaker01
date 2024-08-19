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
        </div>
    </label>
    <form action="{{ route('choix_modele') }}" method="GET">
        <button class="btn-close" type="submit">
            <i class="fas fa-times">FERMER</i>
        </button>
    </form>
</body>

</html>
