<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(HandlingSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(FabconSeeder::class);
        $this->call(DetergentSeeder::class);
    }

}