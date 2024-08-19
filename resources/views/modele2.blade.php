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

        :root {
    --background: #c3c0ba;
    --white: #fff;
    --one: #2665c3;
    --two: #8d0e69;
    --black: #19191a;
    --process: #a5a5a5;
}

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: system-ui;
}



.col-div-3 {
    width: 25%;
    float: left;
}

.col-div-7 {
    width: 75%;
    float: left;
}

.col-div-4 {
    width: 35%;
    float: left;
}

.col-div-8 {
    width: 65%;
    float: left;
}

.col-div-6 {
    width: 50%;
    float: left;
    position: relative;
}

.clearfix {
    clear: both;
    
}

.resume-main {
    width: 900px;
    height: 800px;
    background: linear-gradient(var(--one), var(--two));
    box-shadow: 5px 5px 5px 5px #54585d33;
    padding: 30px;
    height: 1100px;
    position: relative;
}

.left-box {
    width: 35%;
    float: left;
    height: 700px;
}

.qmtr {
    background-color: #8d0e69;
    border-radius: 10px;
    padding-bottom: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.right-box {
    width: 65%;
    float: left;
    background-color: rgb(240, 234, 234);
    height: 900px;
    margin: 50px 0px;
    border-radius: 50px 0px 0px 50px;
    padding: 30px 50px;
    box-shadow: -7px 2px 15px 2px #54585d52;
}


.profile {
    width: 150px;
    height: 150px;
    border: 3px solid var(--white);
    padding: 7px;
    border-radius: 50%;
    margin: 20px auto;
}

.profile img {
    width: 100%;
    border-radius: 50%;
}

.content-box {
    padding: 0px 40px 0px 45px;
}

.content-box h2 {
    text-transform: uppercase;
    font-weight: 500;
    color: var(--white);
    letter-spacing: 1px;
    font-size: 20px;
}

.hr1 {
    border: none;
    height: 1px;
    background: var(--white);
    margin-top: 3px;

}

.p1 {
    font-size: 11px;
    color: var(--white);
    letter-spacing: 1px;
    padding-top: 12px;
}

#progress {
    background: var(--process);
    border-radius: 13px;
    height: 8px;
    width: 100%;
}

#progress:after {
    content: '';
    display: block;
    background: var(--white);
    width: 50%;
    height: 100%;
    border-radius: 9px;
}

#progress1 {
    background: var(--process);
    border-radius: 13px;
    height: 8px;
    width: 100%;
}

#progress1:after {
    content: '';
    display: block;
    background: var(--white);
    width: 40%;
    height: 100%;
    border-radius: 9px;
}

.content-box h3 {
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding-top: 10px;
    color: white;
    font-weight: 500;
}

.p2 {
    font-size: 13px;
    margin-bottom: 5px;
    margin-top: 5px;
    color: var(--white);
}

.circle {
    color: var(--white);
    font-size: 14px !important;
    margin-top: 7px;
}

.circle1 {
    color: var(--process);
    font-size: 14px !important;
    margin-top: 7px;
}

.in {
    background: var(--white);
    padding: 8px;
    border-radius: 20px;
    font-size: 14px !important;

}

.inp {
    color: var(--white);
    font-size: 11px;
}

.col3 {
    text-align: center;
}

h1 {
    font-size: 50px;
    text-transform: uppercase;
    color: var(--black);
    line-height: 50px;
}

h1 span {
    color: black;
    text-decoration: none;
    text-transform: initial;
}

.p3 {
    letter-spacing: 4px;
    font-weight: 500;
}

.heading {
    text-transform: uppercase;
    font-weight: 500;
    color: var(--one);
    letter-spacing: 1px;
    font-size: 20px;
}

.hr2 {
    border: none;
    height: 1px;
    background: var(--black);
    margin-top: 3px;
}

.p5 {
    font-weight: 700;
    color: var(--black);
}

.span1 {
    font-size: 12px;
    color: var(--black);
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
</body>

</html>
