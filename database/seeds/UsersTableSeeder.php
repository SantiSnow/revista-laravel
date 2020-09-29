<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=> 'Mateo',
            'email'=> 'mati_81@gml.com',
            'password'=> bcrypt('contraseña_secreta')
        ]);
    }
}
