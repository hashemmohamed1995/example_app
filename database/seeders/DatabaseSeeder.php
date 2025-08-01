<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInformation;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $users = User::all();
        foreach($users as $user){
           UserInformation::create([
            'phone'=>'010'.rand(11111111,99999999),
            'user_id'=>$user->id
           ]);
        }

        // User::factory(100000)->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
