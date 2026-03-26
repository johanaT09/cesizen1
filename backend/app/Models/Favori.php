<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favori extends Model
{
    use HasFactory;

    protected $table = 'favoris';
    public $incrementing = false;
    public $timestamps = true;
    protected $primaryKey = null;
    protected $fillable = [
        'id_utilisateur',
        'id_activite',
    ];
}
