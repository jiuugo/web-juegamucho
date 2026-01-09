<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'usuario']);

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole($role1);

        $user = User::create([
            'name' => 'usuario',
            'email' => 'usuario@mail.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole($role2);
    }
}
