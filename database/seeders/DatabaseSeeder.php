<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(StatesSeeder::class);
    	$this->call(MunicipalitysSeeder::class);
    	$this->call(ParishesSeeder::class);
    	$this->call(AdminUserSeeder::class);
    	$this->call(UsersSeeder::class);
        $this->call(EmailsSeeder::class);
    }
}
