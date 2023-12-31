<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $user=\App\Models\User::create(
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@example.com',
        //         'password'=>'password',
        //     ]
        // );

        $user=\App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        $role = Role::create(['name' => 'Admin']);
        $user->assignRole($role);
    }
}
