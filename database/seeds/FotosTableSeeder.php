<?php

use Illuminate\Database\Seeder;

class FotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fotos')->delete();
        
        \DB::table('fotos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cloudinary_id' => 'shanti_profissional_1533779218',
                'image_name' => '1533779217',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 1,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-08-08 22:46:57',
                'updated_at' => '2018-08-08 22:47:01',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'cloudinary_id' => 'shanti_profissional_1533779536',
                'image_name' => '1533779536',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'png',
                'owner_id' => NULL,
                'owner_type' => NULL,
                'created_at' => '2018-08-08 22:52:16',
                'updated_at' => '2018-08-08 22:52:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'cloudinary_id' => 'shanti_profissional_1533780130',
                'image_name' => '1533780130',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpeg',
                'owner_id' => 2,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-08-08 23:02:10',
                'updated_at' => '2018-08-08 23:02:14',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'cloudinary_id' => 'shanti_profissional_1533780510',
                'image_name' => '1533780510',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 3,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-08-08 23:08:30',
                'updated_at' => '2018-08-08 23:09:14',
                'deleted_at' => '2018-08-08 23:09:14',
            ),
            4 => 
            array (
                'id' => 5,
                'cloudinary_id' => 'shanti_profissional_1533780554',
                'image_name' => '1533780554',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 3,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-08-08 23:09:14',
                'updated_at' => '2018-08-08 23:09:17',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}