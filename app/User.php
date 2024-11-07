<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use  SoftDeletes; 
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles()
    {
        return $this->belongsTo(Role::class,"id_role"); // Un produit appartient à une catégorie
    }
    public function specialite()
    {
        return $this->belongsTo(Specialite::class,"id_specialite"); }
         // Une spécialité appartient à un utilisateur
         public function etablissement()
    {
        return $this->belongsTo(Etablissement::class,"id_etbalissment"); }

        public function grades()
        {
            return $this->belongsToMany(Grade::class, 'prom_grads', 'id_user', 'id_grade')
                        ->withTimestamps();  // Automatically track created_at and updated_at
        }
        public function cadres()
        {
            return $this->belongsToMany(Cadre::class, 'prom_cadres', 'id_user', 'id_cadre')
                        ->withTimestamps();  // Automatically track created_at and updated_at
        }
}
