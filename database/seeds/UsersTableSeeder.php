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
        // User::truncate();
        User::create([
            'name' => 'erkebekab',
            'email' => 'erkebek.ab@gmail.com',
            'password' => Hash::make('erke123'),
            'status' => 1,
            'role' => 'admin',
            'remember_token' => str_random(10)
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@inai.kg',
            'password' => Hash::make('adminiAnIgK'),
            'status' => 1,
            'role' => 'admin',
            'remember_token' => str_random(10)
        ]); 
    }
}
