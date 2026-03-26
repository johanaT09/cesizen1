<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionActivite extends Model
{
    use HasFactory;

    protected $table = 'session_activite';
    protected $primaryKey = 'id_session';
    protected $fillable = [
        'date_session',
        'duree_realisee',
        'id_activite',
        'id_utilisateur',
    ];
    
    // Une session appartient à un utilisateur
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    // Une session appartient à une activité
    public function activiteDetente()
    {
        return $this->belongsTo(ActiviteDetente::class, 'id_activite');
    }
}
