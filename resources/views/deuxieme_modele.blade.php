@extends('dashboard')

@section('content')
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
@endsection

@section('telecharger')
<h2>Exporter le CV en fichier PDF</h2>
<a href="{{ route('modele2.download') }}">
    <button class="btn-download">Télécharger</button>
</a>@endsection