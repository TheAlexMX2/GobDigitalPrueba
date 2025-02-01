<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 15 usuarios
        \App\Models\User::factory(15)->create()->each(function ($user) {
        // Asignar un rol aleatorio a cada usuario
        $role = \App\Models\Role::inRandomOrder()->first();
        $user->roles()->attach($role);
    });
    }
}
