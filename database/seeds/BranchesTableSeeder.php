<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
        	'id' => 1,
            'name' => 'Comercial',
            'razonSocial' => 'Sociedad Inmobiliaria y Comercial Uno Salud Spa.',
            'rut' => '76.110.227-3',
            'type' => 'Oficinas Comerciales',
        ]);

        DB::table('branches')->insert([
        	'id' => 2,
            'name' => 'Coyancura',
            'razonSocial' => 'Sociedad Prestadora de Servicios Odontológicos Uno Salud Spa.',
            'rut' => '76.110.234-6',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 3,
            'name' => 'Moneda',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Moneda Spa.',
            'rut' => '76.144.936-2',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 4,
            'name' => 'Manquehue',
            'razonSocial' => 'Sociedad Odontológica Felipe Bayuk LTDA.',
            'rut' => '76.178.117-0',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 5,
            'name' => 'Viña del Mar',
            'razonSocial' => 'Servicios Médicos y Odontológicos Bascuñan y Compañía LTDA.',
            'rut' => '76.191.735-8',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 6,
            'name' => 'Estacíón Central',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Estación Central Spa.',
            'rut' => '76.244.474-7',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 7,
            'name' => 'Vitacura',
            'razonSocial' => 'Odontología Chacón LTDA.',
            'rut' => '76.259.176-6',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 8,
            'name' => 'Rancagua',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Rancagua Spa.',
            'rut' => '76.285.707-3',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 9,
            'name' => 'Concepción',
            'razonSocial' => 'Sociedad Prestadora de Servicios Odontológicos Dufey LTDA.',
            'rut' => '76.278.868-3',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 10,
            'name' => 'Valparaíso',
            'razonSocial' => 'Dental Bascuñan LTDA.',
            'rut' => '76.301.027-9',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 11,
            'name' => 'La Concepción',
            'razonSocial' => 'Sociedad Odontológica Uno Salud La Concepción Spa.',
            'rut' => '76.324.871-2',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 12,
            'name' => 'Santa Lucía',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Santa Lucía Spa.',
            'rut' => '76.324.872-0',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 13,
            'name' => 'Puerto Montt',
            'razonSocial' => 'Sociedad prestadora de servicios odontologicos  los Alerces',
            'rut' => '76.330.243-1',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 14,
            'name' => 'Maipú',
            'razonSocial' => 'Feisa Salud LTDA.',
            'rut' => '76.339.245-1',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 15,
            'name' => 'San Bernardo',
            'razonSocial' => 'Sociedad Odontológica B y B LTDA.',
            'rut' => '76.339.573-1',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 16,
            'name' => 'La Florida',
            'razonSocial' => 'Sociedad Odontológica Uno Salud La Florida Spa.',
            'rut' => '76.368.014-2',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 17,
            'name' => 'Teatinos',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Teatinos Spa.',
            'rut' => '76.413.205-K',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 18,
            'name' => 'San Miguel',
            'razonSocial' => 'Sociedad Prestadora de Servicios Odontologicos Walls LTDA.',
            'rut' => '76.408.994-4',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 19,
            'name' => 'Puente Alto',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Puente Alto Spa.',
            'rut' => '76.415.452-5',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 20,
            'name' => 'Antofagasta',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Antofagasta Spa.',
            'rut' => '76.418.895-0',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 21,
            'name' => 'Temuco',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Temuco Spa.',
            'rut' => '76.427.652-3',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 22,
            'name' => 'La Reina',
            'razonSocial' => 'Sociedad Odontológica Uno Salud La Reina Spa.',
            'rut' => '76.442.196-5',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 23,
            'name' => 'La Serena',
            'razonSocial' => 'Sociedad Odontológica Uno Salud La Serena Spa.',
            'rut' => '76.458.073-7',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 24,
            'name' => 'Talca',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Talca Spa.',
            'rut' => '76.470.546-7',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 25,
            'name' => 'Ñuñoa',
            'razonSocial' => '',
            'rut' => '76.470.588-2',
            'type' => 'Clínica Franquiciada',
        ]);

        DB::table('branches')->insert([
        	'id' => 26,
            'name' => 'Rancagua Dos',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Rancagua Dos Spa.',
            'rut' => '76.487.446-3',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 27,
            'name' => 'La Cisterna',
            'razonSocial' => 'Sociedad Odontológica Uno Salud La Cisterna Spa.',
            'rut' => '76.487.483-8',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 28,
            'name' => 'Valdivia',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Valdivia Spa.',
            'rut' => '76.503.243-1',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 29,
            'name' => 'Curicó',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Curicó Spa.',
            'rut' => '76.532.527-7',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 30,
            'name' => 'Merced',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Merced Spa.',
            'rut' => '76.541.054-1',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 31,
            'name' => 'Hernando de Aguirre',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Hernando de Aguirre Spa.',
            'rut' => '76.572.257-8',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 32,
            'name' => 'Los Ángeles',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Los Ángeles Spa.',
            'rut' => '76.590.117-0',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 33,
            'name' => 'Padre Hurtado',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Padre Hurtado Spa.',
            'rut' => '76.607.262-3',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 34,
            'name' => 'San Fernando',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Treinta y Cinco Spa.',
            'rut' => '76.453-333-K',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 35,
            'name' => 'Macul',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Treinta y Tres Spa.',
            'rut' => '76.611.565-9',
            'type' => 'Clínica Propia',
        ]);
        
        DB::table('branches')->insert([
        	'id' => 36,
            'name' => 'Iquique',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Treinta y Seis Spa.',
            'rut' => '76.453.763-7',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 37,
            'name' => 'Osorno',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Treinta y Siete Spa.',
            'rut' => '76.738.933-7',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 38,
            'name' => 'Escuela Militar',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Treinta y Cuatro Spa.',
            'rut' => '76.454.533-8',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 39,
            'name' => 'Talcahuano',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Treinta y Ocho Spa.',
            'rut' => '76.741.020-4',
            'type' => 'Clínica Propia',
        ]);

        DB::table('branches')->insert([
        	'id' => 40,
            'name' => 'Concepción Freire',
            'razonSocial' => 'Sociedad Odontológica Uno Salud Treinta y Nueve Spa.',
            'rut' => '76.741.024-7',
            'type' => 'Clínica Propia',
        ]);
    }
}
