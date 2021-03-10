<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'firstname',
        'lastname',
        'telephone',
        'identification_document',
        'birthdate',
        'id_estate',
        'id_municipality',
        'id_parishes',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function state()
    {
        return $this->belongsTo(States::class, 'id_estate');
    }

    public function municipality()
    {
        return $this->belongsTo(Municipalitys::class, 'id_municipality');
    }

    //Relationship Many to One
    public function parishe()
    {
        return $this->belongsTo(Parishes::class, 'id_parishes');
    }
}
