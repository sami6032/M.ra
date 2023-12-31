<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'user_id',
    ];
    public function services(){
        return $this->hasOne(service::class);
    }
}
