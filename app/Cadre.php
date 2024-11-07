<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Model;

class Cadre extends Model
{
    use  SoftDeletes; 
    public function cadres()
    {
        return $this->belongsToMany(User::class, 'prom_cadres', 'id_cadre', 'id_user')
                    ->withTimestamps();  // Automatically track created_at and updated_at
    }
}
