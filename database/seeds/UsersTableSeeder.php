<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();
        App\User::create([
            'name' => 'Ketto Yam',
            'email' => 'ketto@soft.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
        ]);
    }
}
