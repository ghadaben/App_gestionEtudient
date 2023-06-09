<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudients extends Model
{
    use HasFactory;
    protected $table='etudients';
    protected $primarykey='id';
    protected $fillable=[ 'idEtudient','nom','prenom','dateNaissance','télephone','filliere','groupe'];
}
