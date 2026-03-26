<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';
    protected $primaryKey = 'id_utilisateur';
    protected $fillable = [
        'prenom',
        'date_naissance',
        'email',
        'mot_de_passe',
        'consentement_rgpd',
        'est_actif',
        'date_anonymisation',
        'id_genre',
        'id_role',
    ];
    
    // Un utilisateur appartient à un genre
    public function genre()
    {
        return $this->belongsTo(GenreUtilisateur::class, 'id_genre');
    }

    // Un utilisateur appartient à un rôle
    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    // Un utilisateur a plusieurs sessions d'activité
    public function sessionsActivite()
    {
        return $this->hasMany(SessionActivite::class, 'id_utilisateur');
    }

    // Un utilisateur a plusieurs informations publiées
    public function informations()
    {
        return $this->hasMany(Information::class, 'id_utilisateur');
    }

    // Un utilisateur a plusieurs favoris (activités)
    public function favoris()
    {
        return $this->belongsToMany(ActiviteDetente::class, 'favoris', 'id_utilisateur', 'id_activite');
    }
}
