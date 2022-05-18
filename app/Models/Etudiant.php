<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    public function formation() {
      return $this -> hasMany(Formation::class);
    }

    public function Awards() {
      return $this -> hasMany(Awards::class);
    }

    public function work_experiences() {
      return $this -> hasMany(work_experience::class);
    }

    public function rapports() {
      return $this -> hasMany(rapport::class);
    }

    public function niveaus() {
      return $this -> belgonsTo(Niveau::class);
    }
}
