<?php

use App\Http\Controllers\coming_soonController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ParametreController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\etapescreationcvController;
use App\Models\Competence;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Info;
use App\Models\Langue;
use App\Models\Loisir;
use App\Models\profil;
use GuzzleHttp\Promise\Create;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Propaganistas\LaravelPhone\Rules\Phone;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/signup', function () {
    return view('signup');
})->name('signup');


Route::get('/dashboard', function () {
    if (Auth::user()->info != null) {
        return view('dashboard');
    };
    return view('etape1');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/dashboard', function (Request $request) {
    $validator = Validator::make(
        $request->all(),
        [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'dob' => 'required|date|before:today',
            'nationality' => 'required|string',
            'gender' => 'required|string',
            'city' => 'required|string|max:255',
            'residenceCountry' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email|max:255',
        ],
        [
            'firstName.required' => 'Le prénom est obligatoire.',
            'firstName.string' => 'Le prénom doit être une chaîne de caractères.',
            'firstName.max' => 'Le prénom ne doit pas dépasser 255 caractères.',
            'lastName.required' => 'Le nom est obligatoire.',
            'lastName.string' => 'Le nom doit être une chaîne de caractères.',
            'lastName.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'dob.required' => 'La date de naissance est obligatoire.',
            'dob.date' => 'La date de naissance doit être une date valide.',
            'nationality.required' => 'La nationalité est obligatoire.',
            'nationality.string' => 'La nationalité doit être une chaîne de caractères.',
            'gender.required' => 'Le sexe est obligatoire.',
            'gender.string' => 'Le sexe doit être une chaîne de caractères.',
            'city.required' => 'La ville est obligatoire.',
            'city.string' => 'La ville doit être une chaîne de caractères.',
            'city.max' => 'La ville ne doit pas dépasser 255 caractères.',
            'residenceCountry.required' => 'Le pays de résidence est obligatoire.',
            'residenceCountry.string' => 'Le pays de résidence doit être une chaîne de caractères.',
            'phone.required' => 'Le numéro de téléphone est obligatoire.',
            'phone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse email valide.',
            'email.max' => 'L\'email ne doit pas dépasser 255 caractères.',
        ]
    );

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = [
        'user_id' => Auth::id(),
        'prenom' => $request->input('firstName'),
        'nom' => $request->input('lastName'),
        'date_de_naissance' => $request->input('dob'),
        'nationalite' => $request->input('nationality'),
        'sexe' => $request->input('gender'),
        'ville' => $request->input('city'),
        'pays_residence' => $request->input('residenceCountry'),
        'telephone' => $request->input('phone'),
        'email' => $request->input('email'),
        'path' => null,
    ];

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $data['path'] = $photoPath;
    }

    Info::create($data);
    return redirect()->route('etape2');
});

route::get('/dashboard/etape1', function () {
    return view('etape1');
})->name("etape1");

Route::get('/dashboard/etape2', function () {
    return view('etape2');
})->name('etape2');
Route::get('/dashboard/etape2_suivant', function () {
    return view('etape2suivant');
})->name('etape2suivant');
Route::post('/dashboard/etape2_suivant', function (
    Request $request
) {
    $validator = Validator::make(
        $request->all(),
        [
            'formation' => 'required|string',
            'titre_formation' => 'required|string|max:255',
            'ecole' => 'required|string|max:255',
            'lieu_formation' => 'required|string|max:255',
            'date_debut_formation' => 'required|date|before:today',
            'date_fin_formation' => 'required|date|after:date_debut_formation',
        ],
        [
            'formation.required' => 'La formation est obligatoire.',
            'titre_formation.required' => 'Le titre de formation est obligatoire.',
            'ecole.required' => 'Le nom de l\'école ou de l\'organisation est obligatoire.',
            'lieu_formation.required' => 'Le lieu de formation est obligatoire.',
            'date_debut_formation.required' => 'La date de début est obligatoire.',
            'date_debut_formation.before_or_equal' => 'La date de début doit être inférieure ou égale à aujourd\'hui.',
            'date_fin_formation.required' => 'La date de fin est obligatoire.',
            'date_fin_formation.after' => 'La date de fin doit être après la date de début.',
        ]
    );

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = [
        'info_id' => Auth::user()->info->id,
        'formation' => $request->input('formation'),
        'titre_formation' => $request->input('titre_formation'),
        'ecole' => $request->input('ecole'),
        'lieu_formation' => $request->input('lieu_formation'),
        'date_debut_formation' => $request->input('date_debut_formation'),
        'date_fin_formation' => $request->input('date_fin_formation'),
    ];
    Education::create($data);
    return redirect()->route('etape2');
});

Route::get('/dashboard/etape3', function () {
    return view('etape3');
})->name("etape3");

Route::get('/dashboard/etape3suivant', function () {
    return view('etape3suivant');
})->name('etape3suivant');

Route::post('/dashboard/etape3suivant', function (
    Request $request
) {
    $validator = Validator::make(
        $request->all(),
        [
            'titre_du_poste' => 'required|string|max:50',
            'nom_entreprise' => 'required|string|max:50',
            'date_debut_poste' => 'required|date|before:today',
            'date_fin_poste' => 'required|date|after:date_debut_poste',
            'lieu_de_travail' => 'required|string|max:50',
        ],
        [
            'titre_du_poste.required' => 'Le titre du poste est obligatoire',
            'nom_entreprise.required' => 'Le nom de l\'entreprise est obligatoire',
            'date_debut_poste.required' => 'La date de début du poste est obligatoire',
            'date_debut_poste.before' => 'La date de début du poste doit être avant aujourd\'hui',
            'date_fin_poste.required' => 'La date de fin du poste est obligatoire',
            'date_fin_poste.after' => 'La date de fin du poste doit être après la date de début',
            'lieu_de_travail.required' => 'Le lieu de travail est obligatoire',
        ]
    );
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = [
        'info_id' => Auth::user()->info->id,
        'titre_du_poste' => $request->input('titre_du_poste'),
        'nom_entreprise' => $request->input('nom_entreprise'),
        'date_debut_poste' => $request->input('date_debut_poste'),
        'date_fin_poste' => $request->input('date_fin_poste'),
        'lieu_de_travail' => $request->input('lieu_de_travail'),
    ];
    Experience::create($data);
    return redirect()->route('etape3');
});

Route::get('dashboard/etape4', function () {
    return view('etape4');
})->name('etape4');


Route::post('dashboard/etape4', function (Request $request) {
    $validator = Validator::make(
        $request->all(),
        [
            'language' => 'required|string',
            'niveau_langue' => 'required|string',
            'competence' => 'required|string|max:50',
        ],
        [
            'language.required' => 'La langue est obligatoire.',
            'niveau_langue.required' => 'Le niveau de langue est obligatoire.',
            'competence.required' => 'La compétence est obligatoire.',
            'competence.max' => 'La compétence ne doit pas dépasser 50 caractères.',
            'info_id.required' => 'Le champ info_id est obligatoire.',
            'info_id.exists' => 'Le champ info_id doit être un identifiant valide dans la table infos.',
        ]
    );

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $dataLangue = [
        'nom_langue' => $request->input('language'),
        'niveau_langue' => $request->input('niveau_langue'),
        'info_id' => Auth::user()->info->id,
    ];

    $dataCompetence = [
        'nom_competence' => $request->input('competence'),
        'info_id' => Auth::user()->info->id,
    ];

    Langue::create($dataLangue);
    Competence::create($dataCompetence);

    return redirect()->route('etape4')->with('success', 'Les données ont été ajoutées avec succès!');
});



// Route pour afficher la vue etape5
Route::get('dashboard/etape5', function () {
    return view('etape5');
})->name('etape5');

// Route pour enregistrer la fonction
Route::post('dashboard/etape5/fonction', function (Request $request) {
    $validator = Validator::make(
        $request->all(),
        [
            'nom_fonction' => 'required|string|max:50',
            'description_fonction' => 'required|string|max:100',
        ],
        [
            'nom_fonction.required' => 'Le nom de la fonction est obligatoire.',
            'nom_fonction.string' => 'Le nom de la fonction doit être une chaîne de caractères.',
            'nom_fonction.max' => 'Le nom de la fonction ne doit pas dépasser 50 caractères.',
            'description_fonction.required' => 'La description de la fonction est obligatoire.',
            'description_fonction.string' => 'La description de la fonction doit être une chaîne de caractères.',
            'description_fonction.max' => 'La description de la fonction ne doit pas dépasser 100 caractères.',
        ]
    );

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = [
        'nom_fonction' => $request->input('nom_fonction'),
        'description_fonction' => $request->input('description_fonction'),
        'info_id' => Auth::user()->info->id,
    ];

    Profil::create($data);

    return redirect()->route('etape5');
})->name('saveFonction');

// Route pour enregistrer le loisir
Route::post('dashboard/etape5/loisir', function (Request $request) {
    $validator = Validator::make(
        $request->all(),
        [
            'nom_loisir' => 'string|max:50',
        ],
        [
            'nom_loisir.string' => 'Le nom du loisir doit être une chaîne de caractères.',
            'nom_loisir.max' => 'Le nom du loisir ne doit pas dépasser 50 caractères.',
        ]
    );

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = [
        'nom_loisir' => $request->input('nom_loisir'),
        'info_id' => Auth::user()->info->id,
    ];

    Loisir::create($data);

    return redirect()->route('etape5');
})->name('saveLoisir');



Route::get('dashboard/choix_modele', function () {
    return view('choix_modele');
})->name('choix_modele');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/coming_soon', [coming_soonController::class, 'soon'])->name('profile.coming_soon');
Route::get('/jobs', [jobsController::class, 'soon'])->name('profile.jobs');
Route::get('/parametres', [ParametreController::class, 'param'])->name('profile.parametres');
Route::get('/etapescreationcv', [etapescreationcvController::class, 'etapescreation'])->name('profile.etapescreationcv');
