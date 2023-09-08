<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'user_id',
    ];
    public function assign_tache(){
        return $this-> hasOne(assign_tache::class);
    }
}
