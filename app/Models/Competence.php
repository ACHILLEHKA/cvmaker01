<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    protected $fillable = ['info_id', 'nom_competence'];

    public function info()
    {
        return $this->belongsTo(Info::class);
    }
}
