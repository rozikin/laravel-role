<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];



        $staff = User::create(array_merge([
            'email' => 'staff@gmail.com',
            'name' => 'staff',
        ], $default_user_value));

        $it = User::create(array_merge([
            'email' => 'it@gmail.com',
            'name' => 'it',
        ], $default_user_value));

        $spv = User::create(array_merge([
            'email' => 'spv@gmail.com',
            'name' => 'spv',
        ], $default_user_value));

        $manager = User::create(array_merge([
            'email' => 'manager@gmail.com',
            'name' => 'manager',
        ], $default_user_value));

        $role_staff = Role::create(['name' => 'staff']);
        $role_spv = Role::create(['name' => 'spv']);
        $role_manager = Role::create(['name' => 'manager']);
        $role_it = Role::create(['name' => 'it']);

        $permission = Permission::create(['name' => 'read role']);
        $permission = Permission::create(['name' => 'create role']);
        $permission = Permission::create(['name' => 'update role']);
        $permission = Permission::create(['name' => 'delete role']);

        $role_it->givePermissionTo('read role');
        $role_it->givePermissionTo('create role');
        $role_it->givePermissionTo('update role');
        $role_it->givePermissionTo('delete role');


        $staff->assignRole('staff');
        $staff->assignRole('spv');
        $spv->assignRole('spv');
        $manager->assignRole('manager');
        $it->assignRole('it');
    }
}
