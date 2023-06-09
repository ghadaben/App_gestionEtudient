<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absance extends Model
{
    use HasFactory;
    protected $table='absance';
    protected $primarykey='id';
    protected $fillable=[ 'idEtudient','datedébut','datefin','nombreheurs','justifier','causedabsance','absanceen'];
}
