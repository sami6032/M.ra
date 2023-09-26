<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogAttente extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre', 'commentaire', 'image','confirmed'
    ];
}
