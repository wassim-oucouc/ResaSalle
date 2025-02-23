<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class salle extends Model
{
    use HasFactory;

    protected $fillable = ['name','Description','Picture','capacité','Type','updated_at','created_at'];

    protected $table = "salle";


    public function resérvation()
    {
        return $this->hasOne(resérvation::class);
    }
}
