<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Donor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	    

    	 User::create([
            'name' => ' admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret'),
            'type' => 2,
        ]);

}