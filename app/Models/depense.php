<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depense extends Model
{

    use HasFactory;
    protected $fillable = [
        'libele',
        'sorties',
        'user_id',
        'evenement_id'
    ];
    public function budgets(){
        return $this->belongsTo(budget::class);
        }

}
