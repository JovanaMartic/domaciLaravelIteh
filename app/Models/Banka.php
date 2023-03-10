<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Korisnik;

class Banka extends Model
{
    use HasFactory;


    public function korisnici()
    {
        return $this->hasMany(Korisnik::class);
    }
}
