<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiviteDetente extends Model
{
    use HasFactory;

    protected $table = 'activite_detente';
    protected $primaryKey = 'id_activite';
    protected $fillable = [
        'titre_activite',
        'contenu_activite',
        'duree_estimee',
        'est_actif',
        'id_type',
        'id_categorie',
    ];
    
    // Une activité appartient à un type
    public function type()
    {
        return $this->belongsTo(Type::class, 'id_type');
    }

    // Une activité appartient à une catégorie
    public function categorie()
    {
        return $this->belongsTo(CategorieActivite::class, 'id_categorie');
    }

    // Une activité a plusieurs sessions
    public function sessionsActivite()
    {
        return $this->hasMany(SessionActivite::class, 'id_activite');
    }

    // Une activité peut être dans les favoris de plusieurs utilisateurs
    public function favorisParUtilisateurs()
    {
        return $this->belongsToMany(Utilisateur::class, 'favoris', 'id_activite', 'id_utilisateur');
    }
}
