@extends('dashboard')

@section('content')
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
@endsection

@section('telecharger')
<h2>Exporter le CV en fichier PDF</h2>
<a href="{{ route('modele5.download') }}">
    <button class="btn-download">Télécharger</button>
</a>@endsection