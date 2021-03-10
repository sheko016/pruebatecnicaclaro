<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Parishes;
use App\Models\Municipalitys;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($i=2; $i < 52; $i++) { 

    		$state = rand(1,24);
    		echo "El ID de estado es: ------ $state --- \n";

    		$municipio = Municipalitys::where('id_estate', $state)->get();
    		$municipio = $municipio->random()->id;
    		echo "El ID de municipio es: --- $municipio --- \n";

            $parroquia = Parishes::where('id_municipality', $municipio)->get();
            $parroquia = $parroquia->random()->id;
            echo "El ID de parroquia es: --- $parroquia --- \n";


            

    		User::factory()->create([
	        	'password'				=> Hash::make('user'),
	        	'id_estate'				=> $state,
				'id_municipality'		=> $municipio,
				'id_parishes'			=> $parroquia
	        ]);

	        echo "---  $i --- \n";
    	}
        
    }
}
