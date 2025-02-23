<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resérvation extends Model
{
    use HasFactory;

    protected $table = "Réservation";
    protected $fillable = ['client_id','Description','salle_id','reservation_date','reservation_time','status'];

    public function salle()
    {
        return $this->hasMany(salle::class);
    }

    public function utilisateur()
    {
        return $this->hasOne(utilisateur::class);
    }
}
