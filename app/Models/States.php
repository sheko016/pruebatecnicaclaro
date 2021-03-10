<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $table = 'states';
    protected $fillable = [
		'name', 'id'
    ];

    //Relationship One to Many
    public function municipality()
    {
    	return $this->hasMany(Municipalitys::class, 'id', 'id_municipality');
    }
}
