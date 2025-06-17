<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create predefined roles
        $roles = [
            ['name' => 'Admin', 'description' => 'Administrator with full access'],
            ['name' => 'Editor', 'description' => 'Can edit posts'],
            ['name' => 'Viewer', 'description' => 'Can view posts'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}