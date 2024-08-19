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
    <!-- Bouton Fermer -->
    <form action="{{ route('choix_modele') }}" method="GET">
        <button class="btn-close" type="submit">
            <i class="fas fa-times">FERMER</i>
        </button>
    </form>

</body>

</html>
