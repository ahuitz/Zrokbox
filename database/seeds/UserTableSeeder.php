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
         DB::table('users')->insert(array (
            'name' => 'ivan',
            'email' => 'ivan@mail.com',
            'password' => Hash::make('123456')
            ));
         DB::table('users')->insert(array (
            'name' => 'persona1',
            'email' => 'persona1@mail.com',
            'password' => Hash::make('123456')
            ));
         DB::table('users')->insert(array (
            'name' => 'persona2',
            'email' => 'persona2@mail.com',
            'password' => Hash::make('123456')
            ));
         DB::table('users')->insert(array (
            'name' => 'persona3',
            'email' => 'persona3@mail.com',
            'password' => Hash::make('123456')
            ));
    }
}
