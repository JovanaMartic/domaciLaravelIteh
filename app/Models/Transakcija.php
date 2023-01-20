<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Korisnik;

class Transakcija extends Model
{
    use HasFactory;

    public function korisnik()
    {
        return $this->belongsTo(Korisnik::class);
    }
}
