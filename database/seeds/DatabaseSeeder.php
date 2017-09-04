<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(CallTypesTableSeeder::class);
        $this->call(AccountCodesTableSeeder::class);
    }
}