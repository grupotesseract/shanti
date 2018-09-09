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
                'id' => 3,
                'cloudinary_id' => 'shanti_profissional_1533780510',
                'image_name' => '1533780510',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 2,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-08-21 10:03:30',
                'deleted_at' => '2018-08-21 10:03:30',
                'tipo' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'cloudinary_id' => 'shanti_profissional_1533780130',
                'image_name' => '1533780130',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpeg',
                'owner_id' => 3,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-08-21 10:13:05',
                'deleted_at' => '2018-08-21 10:13:05',
                'tipo' => NULL,
            ),
            2 => 
            array (
                'id' => 1,
                'cloudinary_id' => 'shanti_profissional_1533779218',
                'image_name' => '1533779217',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 1,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-09-01 10:45:54',
                'deleted_at' => '2018-09-01 10:45:54',
                'tipo' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'cloudinary_id' => 'shanti_profissional_1535809554',
                'image_name' => '1535809554',
                'image_path' => '/var/www/html/instituto-shanti/dev/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 1,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-09-01 10:45:54',
                'updated_at' => '2018-09-01 10:45:55',
                'deleted_at' => NULL,
                'tipo' => NULL,
            ),
            4 => 
            array (
                'id' => 4,
                'cloudinary_id' => 'shanti_profissional_1534857185',
                'image_name' => '1534857185',
                'image_path' => '/var/www/html/instituto-shanti/dev/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 3,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-08-21 10:13:05',
                'updated_at' => '2018-09-01 10:47:37',
                'deleted_at' => '2018-09-01 10:47:37',
                'tipo' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'cloudinary_id' => 'shanti_profissional_1535809657',
                'image_name' => '1535809657',
                'image_path' => '/var/www/html/instituto-shanti/dev/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 3,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-09-01 10:47:37',
                'updated_at' => '2018-09-01 10:47:39',
                'deleted_at' => NULL,
                'tipo' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'cloudinary_id' => 'shanti_profissional_1535809991',
                'image_name' => '1535809991',
                'image_path' => '/var/www/html/instituto-shanti/dev/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 5,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-09-01 10:53:11',
                'updated_at' => '2018-09-01 10:53:12',
                'deleted_at' => NULL,
                'tipo' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'cloudinary_id' => 'shanti_profissional_1535810163',
                'image_name' => '1535810163',
                'image_path' => '/var/www/html/instituto-shanti/dev/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 6,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-09-01 10:56:03',
                'updated_at' => '2018-09-01 10:56:04',
                'deleted_at' => NULL,
                'tipo' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'cloudinary_id' => 'shanti_trabalhoPortfolio_1536509340',
                'image_name' => '1536509340',
                'image_path' => '/var/www/html/instituto-shanti/dev/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 1,
                'owner_type' => 'App\\Models\\TrabalhoPortfolio',
                'created_at' => '2018-09-09 13:09:00',
                'updated_at' => '2018-09-09 13:09:01',
                'deleted_at' => NULL,
                'tipo' => NULL,
            ),
        ));
        
        
    }
}