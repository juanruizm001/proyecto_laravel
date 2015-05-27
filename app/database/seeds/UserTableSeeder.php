<?php

Class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        //Llenamos un usuario
        User::create(array(
            'name' => 'Juan',
            'last_name' => 'Perales',
            'email' => 'juan43@gmail.com',
            'address' => 'Calle 25 de Mayo #566',
            'phone' => 45218887,
            'username' => 'juan4',
            'level' => 0,
            'password' => Hash::make('123')
        ));
        //Llenamos otro usuario
        User::create(array(
            'name' => 'Pedro',
            'last_name' => 'Blanco',
            'email' => 'pedro_bl@gmail.com',
            'address' => 'Av. del sol #1546',
            'phone' => 542177711,
            'username' => 'pedro',
            'level' => 1,
            'password' => Hash::make('abc')
        ));
    }
}