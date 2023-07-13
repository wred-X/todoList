<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'first_name' => 'Wesley',
            'last_name'  => 'Romao',
            'email'      => 'meContrata@please.com',
            'password'   => bcrypt('Password1'),
        ]);

        factory(User::class, 5)->create();
    }
}