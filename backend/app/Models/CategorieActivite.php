<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieActivite extends Model
{
    use HasFactory;

    protected $table = 'categorie_activite';
    protected $primaryKey = 'id_categorie';
    protected $fillable = ['libelle_categorie'];
    
    // Une catégorie a plusieurs activités détente
    public function activitesDetente()
    {
        return $this->hasMany(ActiviteDetente::class, 'id_categorie');
    }

    // Une catégorie a plusieurs informations
    public function informations()
    {
        return $this->hasMany(Information::class, 'id_categorie');
    }
}
