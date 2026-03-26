<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreUtilisateur extends Model
{
    use HasFactory;

    protected $table = 'genre_utilisateur';
    protected $primaryKey = 'id_genre';
    protected $fillable = ['libelle_genre'];
    
    // Un genre a plusieurs utilisateurs
    public function utilisateurs()
    {
        return $this->hasMany(Utilisateur::class, 'id_genre');
    }
}
