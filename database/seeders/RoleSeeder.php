<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        Permission::create(['name' => 'create product']);
        Permission::create(['name' => 'delete product']);
        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'show product']);

        // Create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('show product');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('create product');
        $role2->givePermissionTo('delete product');
        $role2->givePermissionTo('edit product');

        // Create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'is_admin'=>'1',
                'password'=> bcrypt('123456'),
            ]);
        $user->assignRole($role2);

    }
}
