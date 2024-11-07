<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use SoftDeletes; 
    public function users()
    {
        return $this->belongsToMany(User::class, 'prom_grads', 'id_grade', 'id_user')
                    ->withTimestamps();  // Automatically track created_at and updated_at
    }
}
