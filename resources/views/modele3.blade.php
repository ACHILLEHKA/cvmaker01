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
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: none;
        }

        .container {
            display: flex;
            flex-wrap: nowrap;
            width: 100%;
            background: #797ee0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            height: 100%;
        }

        .left-column,
        .right-column {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-sizing: border-box;
        }

        .left-column {
            background-image: url('pexels-photo-4814061.webp');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 20px;
            width: 35%;
            height: 1000px;
            border-right: 1px solid black;

        }

        .right-column {
            padding: 20px;
            width: 65%;
            height: 1000px;
            color: #fff;
        }

        header {
            padding: 20px;
            text-align: flex-start;
            color: #f0f4f0;
            background-color: #19191a32;
        }

        header h1 {
            margin: 0;
            font-size: 1em;
        }

        .header p {
            margin-top: 10px;
        }

        .contact-info p {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        .contact-info i {
            margin-right: 10px;
        }

        .contact-info h2 {
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #fff;
            padding-bottom: 5px;
        }

        .section h2 {
            border-bottom: 1px solid #fff;
            padding-bottom: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* border: 1px solid #ccc; */
            border: 1px solid #ccc
        }

        .section ul {
            list-style: none;
            padding: 0;
        }

        .section ul li {
            padding: 5px 0;
        }

        .section p {
            margin: 10px 0;
        }

        .section {}

        .right-column .section h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right-column .section p {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="papier" style="@page{A4;margin:0}">
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
            </div>
        </label>
    </div>
</body>

</html>
