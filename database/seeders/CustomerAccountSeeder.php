<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerAccountSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customer_accounts')->insert([
            ['name' => 'Mia Santos', 'email' => 'mia.santos@example.test', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eli Navarro', 'email' => 'eli.navarro@example.test', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cora Mendoza', 'email' => 'cora.mendoza@example.test', 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jules Rivera', 'email' => 'jules.rivera@example.test', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Noah Villanueva', 'email' => 'noah.villanueva@example.test', 'status' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
