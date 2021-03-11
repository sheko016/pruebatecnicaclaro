<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name'        				=> 'Admin',
        	'firstname'         		=> 'Deibis',
            'lastname'         			=> 'Contreras',
            'email'             		=> 'admin@admin.com',
            'email_verified_at' 		=> now(),
            'password'          		=> bcrypt('admin'), // password
            'telephone'					=> '04241214241',
            'Identification_document' 	=> '24312597',
            'Birthdate'					=> date('1993-09-14'),
            'id_estate' 				=> 24,
            'id_municipality' 			=> 462,
            'id_parishes' 				=> 1122,
            'is_admin'                  => 1,
            'created_at'        		=>	now(),
            'updated_at'        		=>	now(),
        ]);
    }
}
