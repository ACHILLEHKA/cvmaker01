<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ public_path('assets/css/choix_modele.css') }}"> --}}
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            position: relative;
            margin: 0;
            padding: 0;
            flex: 1 1 100%;
                /* display: flex;
            justify-content: center;
            align-items: center;
            background: none; */

        }

        .container12 {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            height: 100%;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            position: relative;

        }

        .left-column12 {
            background: linear-gradient(5deg, rgba(56, 28, 241, 0.785), rgba(225, 121, 139, 0.861));
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 20px;
            width: 30%;
            box-sizing: border-box;
            height: 1000px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;

        }

        .right-column12 {
            padding: 20px;
            width: 70%;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .header12 {
            padding: 20px;
            text-align: flex-start;
            color: #f0f4f0;
            background: linear-gradient(5deg, rgba(56, 28, 241, 0.785), rgba(225, 121, 139, 0.861));

        }

        .header12 h1 {
            margin: 0;
            font-size: 1em;
        }

        .header12 p {
            margin-top: 10px;
        }

        .contact-info12 p {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        .contact-info12 i {
            margin-right: 10px;
        }

        .contact-info12 h2 {
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #fff;
            padding-bottom: 5px;
        }

        .section12 h2 {
            border-bottom: 1px solid #fff;
            padding-bottom: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section12 ul {
            list-style: none;
            padding: 0;
        }

        .section12 ul li {
            padding: 5px 0;
        }

        .section12 p {
            margin: 10px 0;
        }

        .right-column12 .section12 h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right-column12 .section12 p {
            margin: 10px 0;
        }
    </style>
</head>

<body>
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
                    <p><i class="fas fa-map-marker-alt"></i> {{ $info->ville }}, {{ $info->pays_residence }}</p>
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
            </div>
        </div>
    </label>
</body>

</html>
