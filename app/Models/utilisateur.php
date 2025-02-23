<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
  protected $fillable = ['Prénom','Nom','Email','Password','Role','updated_at','Status','created_at'];
   protected $table =  'utilisateur';

   public function Reservation()
   {
    return $this->hasMany(resérvation::class);
   }

   
}
