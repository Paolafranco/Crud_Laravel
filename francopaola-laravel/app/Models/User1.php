<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    use HasFactory;

    public function configuracions () {
        return $this->hasOne('App\Configuracion')->withTimestamps();
    }

    public function rols () {
        return $this->belongsToMany('App\Rol')->withTimestamps();
    }
}
