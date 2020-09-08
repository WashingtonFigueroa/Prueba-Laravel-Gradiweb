<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        \App\User::create(
            [
                'name' => 'Figo',
                'email' => 'info@dtmowed.org',
                'password' => Hash::make('123456')
            ]
        );
    }
}
