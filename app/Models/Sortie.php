<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    use HasFactory;

    protected $fillable=[
        'qteSortie',
        'prixSortie',
        'dateSortie',
        'nomClient',
        'nomProduit',
    ];
}
