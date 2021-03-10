<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipalitys extends Model
{
    use HasFactory;

    protected $table = 'municipalitys';
    
    protected $fillable = [
		'name', 'id_estate'
	];

	public function parishe()
    {
    	return $this->hasMany(Parishes::class);
    }
}
