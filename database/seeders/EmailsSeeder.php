<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Emails;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($iii=0; $iii < 500; $iii++) {

    		$user_send = rand(1,50);

    		$email = Emails::factory()->create([
                'status'    => rand(0,1),
	        	'id_user'   => $user_send
	        ]);

    		$cantidad_destinatario = rand(1,5);

    		for ($i=0; $i < $cantidad_destinatario; $i++) { 
    			$id = rand(1,50);
    			$user = User::findOrFail($id);
    			$destinatariosArray[] = [
    				'id_email' => $email->id,
    				'id_destinatario' => $user->id
    			];
    		}
    		DB::table('destinationsemails')->insert($destinatariosArray);
            $destinatariosArray = [];
    	}
        
    }
}
