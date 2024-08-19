@extends('dashboard')

@section('content')

    <label class="item" for="t-3">
        <div class="container0">
            <div class="left-column0">
                @if (isset($info['image']) && $info['image'] && $info['image'] !== '')
                    <div class="photoX">
                        <img src="{{ asset('storage/' . $info['image']) }}" alt="Photo">
                    </div>
                @endif
                <div class="contact-info0">
                    <h2 style=" border: 1px solid #ccc">Contact</h2>
                    <p><i class="fas fa-phone"></i> {{ $info->telephone }}</p>
                    <p><i class="fas fa-envelope"></i> {{ $info->email }}</p>
                    <p><i class="fas fa-calendar"></i> {{ $info->date_de_naissance }}</p>
                    <p><i class="fas fa-map-marker-alt"></i> {{ $info->ville }}, {{ $info->pays_residence }}
                    </p>
                </div>
                <div class="section0" style="display:flex; flex-direction:column;justify-content:space-evenly">
                    <h2>Compétences</h2>
                    <ul>
                        @if (isset($info->competences))
                            @foreach ($info->competences as $competence)
                                <li>{{ $competence->nom_competence }}</li>
                            @endforeach
                        @endif
                </div>
                <div class="section0">
                    <h2>Langues</h2>
                    <p>
                        @foreach ($info->langues as $langue)
                            <li style="text-transform: capitalize">{{ $langue->nom_langue }}
                                <span>({{ $langue->niveau_langue }})</span>
                            </li>
                        @endforeach
                    </p>
                </div>
                <div class="section0">
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
            <div class="right-column0">
                <header>
                    <div class="header-content0">
                        <h1>{{ $info->nom }}</h1>
                        <p>{{ $info->prenom }}</p>
                        <p>{{ $info->profil->nom_fonction }}</p>
                    </div>
                </header>
                <div class="section0">
                    <h2>Profil</h2>
                    <p>{{ $info->profil->description_fonction }}</p>
                </div>
                <div class="section0">
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

                <div class="section0">
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
@endsection

@section('telecharger')
<h2>Exporter le CV en fichier PDF</h2>
<a href="{{ route('modele3.download') }}">
    <button class="btn-download">Télécharger</button>
</a>@endsection
