<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\profil;
use Symfony\Component\HttpKernel\Profiler\Profile;

class Info extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function profil(){
        return $this->hasOne(Profil::class);
    }
    
    public function loisirs(){
        return $this->hasMany(Loisir::class);
    }
    public function competences(){
        return $this->hasMany(Competence::class);
    }

    public function educations(){
        return $this->hasMany(Education::class);
    }
    public function experiences(){
        return $this->hasMany(Experience::class);
    }

    public function langues(){
        return $this->hasMany(Langue::class);
    }
}
