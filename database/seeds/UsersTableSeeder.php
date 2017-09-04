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
        DB::table('users')->insert([
            'name' => 'Eduardo Rodríguez B.',
            'email' => 'erodriguez@unosalud.com',
            'password' => bcrypt('UnoSalud'),
        ]);

        DB::table('users')->insert([
            'name' => 'Juan Pablo Fuentes A.',
            'email' => 'jpfuentes@unosalud.com',
            'password' => bcrypt('UnoSalud'),
        ]);
    }
}
