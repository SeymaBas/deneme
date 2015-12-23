<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.12.2015
 * Time: 14:13
 */
class UserTableSeeder extends Seeder
{
    public function run(){


        DB::table('users')->delete();
        User::create(array(

            'name'=>'Seyma',
            'email'=> 'seyma@gmail.com',

            'password'=>Hash::make('seyma'),


        ));

    }

}