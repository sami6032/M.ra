<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budget extends Model
{
    protected $fillable = [
    'entres',
    'sorties',
    'reste',
    'user_id',
    'evenement_id'
];
    use HasFactory;
    public function evenement(){
        return $this->belongsTo(evenement::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function depenses(){
        return $this->hasMany(depense::class);
        }

}
