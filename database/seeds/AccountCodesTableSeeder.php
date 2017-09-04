<?php

use Illuminate\Database\Seeder;

class AccountCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_codes')->insert([
            'code' => 'callcenter',
            'name' => 'Call Center',
            'branch_id' => 1,
            'lines' => 2,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'comercial',
            'name' => 'Oficinas Comerciales',
            'branch_id' => 1,
            'lines' => 93,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'coyancura',
            'name' => 'Coyancura',
            'branch_id' => 2,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'moneda',
            'name' => 'Moneda',
            'branch_id' => 3,
            'lines' => 6,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'manquehue',
            'name' => 'Manquehue',
            'branch_id' => 4,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'vina',
            'name' => 'Viña del Mar',
            'branch_id' => 5,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'ecentral',
            'name' => 'Estación Central',
            'branch_id' => 6,
            'lines' => 7,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'vitacura',
            'name' => 'Vitacura',
            'branch_id' => 7,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'rancagua',
            'name' => 'Rancagua',
            'branch_id' => 8,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'cpc',
            'name' => 'Concepción',
            'branch_id' => 9,
            'lines' => 6,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'valparaiso',
            'name' => 'Valparaíso',
            'branch_id' => 10,
            'lines' => 6,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'lacpc',
            'name' => 'La Concepción',
            'branch_id' => 11,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'slucia',
            'name' => 'Santa Lucía',
            'branch_id' => 12,
            'lines' => 6,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'ptm',
            'name' => 'Puerto Montt',
            'branch_id' => 13,
            'lines' => 6,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'maipu',
            'name' => 'Maipú',
            'branch_id' => 14,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'sanbernardo',
            'name' => 'San Bernardo',
            'branch_id' => 15,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'laflorida',
            'name' => 'La Florida',
            'branch_id' => 16,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'teatinos',
            'name' => 'Teatinos',
            'branch_id' => 17,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'snmiguel',
            'name' => 'San Miguel',
            'branch_id' => 18,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'ptealto',
            'name' => 'Puente Alto',
            'branch_id' => 19,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'antgasta',
            'name' => 'Antofagasta',
            'branch_id' => 20,
            'lines' => 6,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'temuco',
            'name' => 'Temuco',
            'branch_id' => 21,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'lareina',
            'name' => 'La Reina',
            'branch_id' => 22,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'serena',
            'name' => 'La Serena',
            'branch_id' => 23,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'talca',
            'name' => 'Talca',
            'branch_id' => 24,
            'lines' => 6,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'nunoa',
            'name' => 'Ñuñoa',
            'branch_id' => 25,
            'lines' => 6,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'rancagua2',
            'name' => 'Rancagua Dos',
            'branch_id' => 26,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'lacisterna',
            'name' => 'La Cisterna',
            'branch_id' => 27,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'valdivia',
            'name' => 'Valdivia',
            'branch_id' => 28,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'curico',
            'name' => 'Curicó',
            'branch_id' => 29,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'Merced',
            'name' => 'Merced',
            'branch_id' => 30,
            'lines' => 6,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'hda',
            'name' => 'Hernando de Aguirre',
            'branch_id' => 31,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'losangeles',
            'name' => 'Los Ángeles',
            'branch_id' => 32,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'ph',
            'name' => 'Padre Hurtado',
            'branch_id' => 33,
            'lines' => 4,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'sf',
            'name' => 'San Fernando',
            'branch_id' => 34,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'macul',
            'name' => 'Macul',
            'branch_id' => 35,
            'lines' => 5,
        ]);
        
        DB::table('account_codes')->insert([
            'code' => 'iquique',
            'name' => 'Iquique',
            'branch_id' => 36,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'osorno',
            'name' => 'Osorno',
            'branch_id' => 37,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'emilitar',
            'name' => 'Escuela Militar',
            'branch_id' => 38,
            'lines' => 4,
        ]);
        
        DB::table('account_codes')->insert([
            'code' => 'talcahuano',
            'name' => 'Talcahuano',
            'branch_id' => 39,
            'lines' => 5,
        ]);

        DB::table('account_codes')->insert([
            'code' => 'cpcfreire',
            'name' => 'Concepción Freire',
            'branch_id' => 40,
            'lines' => 5,
        ]);
    }
}
