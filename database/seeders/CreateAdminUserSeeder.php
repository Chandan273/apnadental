<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin Role
        $adminRole = Role::create(['name' => 'Admin']);
        
        // Create Doctor Role
        $doctorRole = Role::create(['name' => 'Doctor']);
        
        // Create User Role
        $userRole = Role::create(['name' => 'User']);

        // Create Permissions (You can customize this part)
        $permissions = [
            'create-users',
            'edit-users',
            'delete-users',
            // Add more permissions as needed
        ];

        foreach ($permissions as $permissionName) {
            Permission::create(['name' => $permissionName]);
        }

        // Assign Permissions to Admin Role
        $adminRole->syncPermissions($permissions);

        // Create Super Admin User
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => bcrypt('12345678')
        ]);

        // Assign Admin Role to Super Admin User
        $superAdmin->assignRole([$adminRole->id]);
    }
}
