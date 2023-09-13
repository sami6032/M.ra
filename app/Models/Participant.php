<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'user_id',
        'evenement_id',
        'envoyer',
        'confirmed'
        
    ];
    public function evenement(){
        return $this->belongsTo(evenement::class);
    }
}
