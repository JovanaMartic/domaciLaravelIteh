<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Banka;
use App\Models\Transakcija;

class Korisnik extends Model
{
    use HasFactory;


    public function banka()
    {
        return $this->belongsTo(Banka::class);
    }

    public function transakcije()
    {
        return $this->hasMany(Transakcija::class);
    }
}
