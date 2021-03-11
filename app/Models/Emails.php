<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    use HasFactory;

    protected $table = 'emails';
    
    protected $fillable = [
		'asunto', 'mensaje', 'status', 'id_user'
	];

	public function destinoEmail()
    {
        return $this->belongsToMany(User::class, 'destinationsemails', 'id_email', 'id_destinatario');
    }

    public function userSend()
    {
        return $this->hasMany(User::class, 'id', 'id_user');
    }
	
}
