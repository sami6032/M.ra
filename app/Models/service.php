<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prix',
        'photo',
        'description',
    ];
    public function commandes(){
        return $this->belongsTo(commande::class);
        }
}
