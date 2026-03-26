<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table = 'information';
    protected $primaryKey = 'id_information';
    protected $fillable = [
        'titre_information',
        'contenu_information',
        'date_publication_information',
        'est_actif',
        'id_type',
        'id_categorie',
        'id_utilisateur',
    ];
    
    // Une information appartient à un utilisateur (auteur)
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    // Une information appartient à un type
    public function type()
    {
        return $this->belongsTo(Type::class, 'id_type');
    }

    // Une information appartient à une catégorie
    public function categorie()
    {
        return $this->belongsTo(CategorieActivite::class, 'id_categorie');
    }
}
