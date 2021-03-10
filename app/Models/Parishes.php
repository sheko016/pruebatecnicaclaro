<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parishes extends Model
{
    use HasFactory;

    protected $table = 'parishes';
    protected $fillable = [
		'name', 'id_municipality'
	];
	
}
