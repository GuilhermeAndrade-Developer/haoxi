<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'is_admin'=>'1',
                'gender' => 'M',
                'phone' => '11 999999999',
                'date_of_birth' => '1960-01-01',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'user@user.com',
                'is_admin'=>'0',
                'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
