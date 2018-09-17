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
            'name' => ' ELAD ASULIN',
            'email' => 'eladasul@gmail.com',
            'password' => Hash::make('secret'),
            'type' => 2,
        ]);

    	User::create([
            'name' => ' Omar',
            'email' => 'ogspain@gmail.com',
            'password' => Hash::make('secret'),
            'type' => 1,
        ]);

    	User::create([
            'name' => 'yona ',
            'email' => ' iona.swr@gmail.com ',
            'password' => Hash::make('secret'),
            'type' => 2,
        ]);

    	Donor::create([
    	    "name"			=>"אלחי בית אל ",
			"tel"			=>"050-3870132",
			"prev_amount"	=>260,
			"email"		=>"eybetel@gmail.com",
			"origen"		=>"תורמי עבר  ",
			"tipo"			=>"תורמי עבר  "
    	 ]);

    	Donor::create([
    	    "name"			=>"אריאל משילקר  ",
			"tel"			=>"050-7876239",
			"prev_amount"	=>100,
			"email"			=>"amihaim99@gmail.com",
			"origen"		=>"תורמי עבר  ",
			"tipo"			=>"תורמי עבר  "
    	]);


        // $this->call(UsersTableSeeder::class);
    }
}
