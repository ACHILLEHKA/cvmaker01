<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function info()
    {
        return $this->belongsTo(Info::class);
    }
}
