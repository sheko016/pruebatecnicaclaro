<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            
            $date = Carbon::now();
            $actual = $date->format('Y');
            $calculosEdad = ($date->age);
           
            while ($calculosEdad <= 15) {
                $year = rand(1950,$actual);
                $mes = rand(1,12);
                $dia = rand(1,28);
                $Birthdate = "$year-$mes-$dia";
                $calculosEdad = Carbon::parse($Birthdate)->age;
                //echo "la Edad es: ------ $calculosEdad --- \n";
            } 

    		$state = rand(1,24);
    		//echo "El ID de estado es: ------ $state --- \n";

    		$municipio = Municipalitys::where('id_estate', $state)->get();
    		$municipio = $municipio->random()->id;
    		//echo "El ID de municipio es: --- $municipio --- \n";

            $parroquia = Parishes::where('id_municipality', $municipio)->get();
            $parroquia = $parroquia->random()->id;
            //echo "El ID de parroquia es: --- $parroquia --- \n";            

    		User::factory()->create([
	        	'password'				=> Hash::make('user'),
                'birthdate'             => $Birthdate,
	        	'id_estate'				=> $state,
				'id_municipality'		=> $municipio,
				'id_parishes'			=> $parroquia
	        ]);

	        //echo "---  $i --- \n";
    	}
        
    }
}
