<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';
    protected $primaryKey = 'id_type';
    protected $fillable = ['libelle_type'];

    // Un type a plusieurs activités détente
    public function activitesDetente()
    {
        return $this->hasMany(ActiviteDetente::class, 'id_type');
    }

    // Un type a plusieurs informations
    public function informations()
    {
        return $this->hasMany(Information::class, 'id_type');
    }
}
