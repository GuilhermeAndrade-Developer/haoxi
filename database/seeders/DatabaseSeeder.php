<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Spatie\Permission\Models\Role;
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
        //\App\Models\User::factory(10)->create();
        $this->call(CreateUsersSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
