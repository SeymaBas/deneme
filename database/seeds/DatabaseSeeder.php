<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        App\User::create(array(

            'name'=>'Seyma',
            'email'=> 'seyma@gmail.com',

            'password'=>Hash::make('seyma'),


        ));
    }
}
