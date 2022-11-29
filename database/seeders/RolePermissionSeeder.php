<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        foreach (Permission::$permissions as $permission) {
            Permission::findOrCreate($permission);
        }

        foreach (Role::$roles as $role => $permission) {
            Role::findOrCreate($role)->givePermissionTo($permission);
        }
    }
}
