<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'role'=>'admin',
            'bio'=>'This is admin',
            'gender'=>'female'
            
        ]);

        for ($i = 1; $i <= 100; $i++) {
            $gender = ($i % 3 === 0) ? 'other' : (($i % 2 === 0) ? 'male' : 'female'); // Set gender based on user number
$role = ($i === 1) ? 'admin' : 'user'; // Set the first user as 'admin' and others as 'user'
            $role = ($i === 1) ? 'admin' : 'user'; // Set the first user as 'admin' and others as 'user'

            User::create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',

                'password' => Hash::make('admin123'), // Use Hash::make() to securely hash the password
                'gender'=>$gender,
                'bio'=>'This is the bio for User'.$i,
                'role'=>$role
            ]);
        }
    }
}
