<?php

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
        factory(App\Models\User::class)->create([
            'email' => env('ADMIN_EMAIL', 'admin@admin.com'),
            'password' => bcrypt(env('ADMIN_PASSWORD', '123321')),
        ]);
    }
}
