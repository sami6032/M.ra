<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assign_tache extends Model
{
    use HasFactory;
    protected $fillable = [
        'responsable',
        'user_id',
        'evenement_id',
        'tache_id',
        'confirmed'
        
    ];
    public function tache(){
        return $this->belongsTo(tache::class);
    }
}
