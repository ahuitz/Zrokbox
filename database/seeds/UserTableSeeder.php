<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array (
        	'name' => 'yesica',
        	'email' => 'yesicargueta@gmail.com',
        	'password' => Hash::make('secret')
        	));
         DB::table('users')->insert(array (
            'name' => 'nadia',
            'email' => 'launadia17@gmail.com',
            'password' => Hash::make('123')
            ));
    }
}
