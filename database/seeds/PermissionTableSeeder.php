<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Roles;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        $permissions = [
            'add-player',
            'edit-player',
            'delete-player'
         ];
 
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
