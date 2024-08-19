<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
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

        .cvContainerNew {
            display: flex;
            max-width: 900px;
            width: 950px;
            margin: 20px auto;
            background: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            max-height: 10980px;
            min-height: 1098px;
            position: relative;
        }

        .cvLeftColumnNew,
        .cvRightColumnNew {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .cvLeftColumnNew {
            background: linear-gradient(to bottom, #b780f1 0%, #2575fc 100%);
            color: #fff;
            border-radius: 10px 0 0 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .cvProfilePic img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 0 auto 20px;
            display: block;
        }

        .cvContactInfoNew,
        .cvSectionNew {
            margin-bottom: 20px;
        }

        .cvContactInfoNew h2,
        .cvSectionNew h2 {
            font-size: 1.2em;
            margin-bottom: 10px;
            border-bottom: 2px solid #fff;
            padding-bottom: 5px;
            text-align: center;
        }

        .cvSectionNew ul {
            list-style-type: none;
            padding: 0;
        }

        .cvSectionNew ul li {
            margin: 5px 0;
        }

        .cvRightColumnNew {
            background-color: #fff;
            color: #333;
            border-radius: 0 10px 10px 0;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .cvHeaderNew {
            background-color: #2575fc;
            color: #fff;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .cvHeaderNew h1 {
            margin: 0;
            font-size: 2em;
        }

        .cvHeaderNew p {
            margin: 5px 0 0;
            font-size: 1.2em;
        }

        .cvSectionNew {
            margin-bottom: 20px;
        }

        .cvSectionNew h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            border-bottom: 2px solid #2575fc;
            padding-bottom: 5px;
        }

        .cvEducationEntry,
        .cvExperienceEntry {
            margin-bottom: 15px;
        }

        .cvEducationEntry p,
        .cvExperienceEntry p {
            margin: 0;
            font-size: 1em;
            color: #444;
        }
    </style>
</head>

<body>
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
                    <p><i class="fas fa-map-marker-alt"></i> {{ $info->ville }}, {{ $info->pays_residence }}</p>
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
        </div>
    </label>
</body>

</html>
