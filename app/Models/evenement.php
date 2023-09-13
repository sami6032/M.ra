<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'date',
        'lieu',
        'description',
        'nombre_invite',
        'user_id',
    ];
    public function users(){
        return $this->belongsTo(User::class);
        }
    public function participants(){
        return $this->hasMany(Participant::class);
        }
    public function budgets(){
        return $this->belongsTo(budget::class);
        }

    // public function budgetsRecords()
    //     {
    //         return $this->hasMany(budget::class);
    //     }
   
}
