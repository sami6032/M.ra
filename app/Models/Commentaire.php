<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'commentaire',
        'user_id',
        'testimoniale_id',
    ];
    public function testimoniale(){
        return $this->belongsTo(Testimoniale::class);
        }
}
