<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'first_name' => 'Wesley',
            'last_name'  => 'Romao',
            'email'      => 'todo@list.com',
        ]);

        User::factory(5)->create();
    }
}