<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use  SoftDeletes; 
    public function users()
    {
        return $this->hasMany(User::class);  // Une spécialité peut avoir plusieurs utilisateurs
    }
    
  
}
