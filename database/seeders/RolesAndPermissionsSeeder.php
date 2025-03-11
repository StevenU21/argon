<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $writerRole = Role::firstOrCreate(['name' => 'writer']);
        $readerRole = Role::firstOrCreate(['name' => 'reader']);

        // Define permissions
        $permissions = [
            'read articles',
            'create articles',
            'update articles',
            'destroy articles',
            'read categories',
            'create categories',
            'update categories',
            'destroy categories',
            'read tags',
            'create tags',
            'update tags',
            'destroy tags'
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign permissions to roles
        $adminRole->givePermissionTo(Permission::all());
        $writerRole->givePermissionTo([
                'read articles', 'create articles', 'update articles', 'destroy articles',
                'read categories', 'read tags'
        ]);
        $readerRole->givePermissionTo([
            'read articles', 'read categories', 'read tags'
        ]);
    }
}
