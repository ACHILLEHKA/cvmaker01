<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ public_path('assets/css/choix_modele.css') }}">
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            width: 100vw;
            height: 100vh;
            overflow-x: hidden;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: none;
            transform: scale(0.55);
        }

        .containerX {
            display: flex;
            max-width: 900px;
            width: 950px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 10980px;
            min-height: 1098px;
            position: relative;
        }

        .left-columnX {
            background-color: black;
            color: #fff;
            width: auto;
            padding: 20px;
            box-sizing: border-box;
            height: 1auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .left-columnX .photoX {
            text-align: center;
            display: flex;
            justify-content: center;
            display: flex;
        }

        .left-columnX .photoX img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;

        }

        .contact-infoX {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            padding: 20px;
        }

        .sectionX {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            padding: 20px;
        }

        .sectionX li {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .left-columnX h2 {
            margin-top: 0;
        }

        .left-columnX ul,
        .right-columnX ul {
            list-style: none;
            padding: 0;
        }

        .right-columnX {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            height: auto;
            flex-direction: column;
            justify-content: space-between;
            color: #000000;
        }

        .right-columnX .headerX {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .headerX {
            background-color: #000;
        }

        .right-columnX .headerX h1,
        .right-columnX .headerX p {
            margin: 0;
        }

        .right-columnX .header-contentX {
            display: flex;
            flex-direction: column;
        }

        .header-contentX {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .headerX h1,
        .headerX h2,
        .headerX h4 {
            color: #ffffff !important;
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
</body>

</html>
