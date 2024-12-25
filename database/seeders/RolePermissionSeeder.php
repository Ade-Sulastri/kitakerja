<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Membuat permission
        $viewDashboardPermission = Permission::create(['name' => 'view dashboard']);
        $viewPostPermission = Permission::create(['name' => 'view posts']);

        // Membuat role
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Menetapkan permission ke role
        $adminRole->givePermissionTo($viewDashboardPermission);
        $userRole->givePermissionTo($viewPostPermission);

        // Opsional: Menetapkan role ke pengguna tertentu (misalnya admin pertama)
        // $user = \App\Models\User::find(1); // Cari pengguna dengan ID 1
        // $user->assignRole('admin'); // Berikan role admin ke pengguna
    }
}
