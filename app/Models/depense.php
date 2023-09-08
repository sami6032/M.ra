<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depense extends Model
{
    use HasFactory;
    public function budgets(){
        return $this->belongsTo(budget::class);
        }

}
