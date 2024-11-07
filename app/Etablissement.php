<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use SoftDeletes;

    protected $fillable = ['Etablissement']; 
    public function users()
    {
        return $this->hasMany(User::class);  // Un établissement peut avoir plusieurs utilisateurs
    }
}