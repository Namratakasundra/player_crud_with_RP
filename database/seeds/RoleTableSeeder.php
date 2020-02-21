<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $super_admin_role = Role::create(['name' => 'Sports Manager']);        

        $admin_role = Role::create(['name' => 'Coach']);
        $admin_role->syncPermissions([
            // Roles and Permissions
            'add-player',
            'edit-player',
            'delete-player',
        ]);

        $admin_role = Role::create(['name' => 'Captain']);
        $admin_role->syncPermissions([
           // Roles and Permissions
           'edit-player',   
        ]);
    }
}
