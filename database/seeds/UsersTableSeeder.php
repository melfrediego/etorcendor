<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Melfre Diego',
            'email' => 'melfre21@gmail.com',
            'email_verified_at' => now(),
            'perfil' => 'A',
            'password'  => bcrypt('01018621'),
            'remember_token' => str_random(10),
        ]);

        User::create([
            'name' => 'Djalma Lemos',
            'email' => 'djalmalemosferreira@gmail.com',
            'email_verified_at' => now(),
            'perfil' => 'A',
            'password'  => bcrypt('djalma2019'),
            'remember_token' => str_random(10),
        ]);

        User::create([
            'name' => 'Victor Gustavo',
            'email' => 'victorgustavocosta@gmail.com',
            'email_verified_at' => now(),
            'perfil' => 'A',
            'password'  => bcrypt('victor2019'),
            'remember_token' => str_random(10),
        ]);

        User::create([
            'name' => 'Genivaldo Campelo',
            'email' => 'genivaldocampelo@gmail.com',
            'email_verified_at' => now(),
            'perfil' => 'A',
            'password'  => bcrypt('genivaldo2020'),
            'remember_token' => str_random(10),
        ]);

    }
}
