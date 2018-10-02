<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrador',
                'email' => env('ADMIN_EMAIL', 'admin@admin.com'),
                'password' => bcrypt(env('ADMIN_PASSWORD', '123321')),
                'created_at' => '2018-08-08 22:41:31',
                'updated_at' => '2018-08-08 22:41:31',
            ),
        ));
    }
}
