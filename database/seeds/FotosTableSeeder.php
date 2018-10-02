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
        

        \App\Models\Foto::create(array (
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
            ));

        \App\Models\Foto::create(array (
                'cloudinary_id' => 'shanti_profissional_1535809657',
                'image_name' => '1535809657',
                'image_path' => '/var/www/html/instituto-shanti/dev/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 2,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-09-01 10:47:37',
                'updated_at' => '2018-09-01 10:47:39',
                'deleted_at' => NULL,
                'tipo' => NULL,
            ));

        \App\Models\Foto::create(array (
                'cloudinary_id' => 'shanti_profissional_1535809991',
                'image_name' => '1535809991',
                'image_path' => '/var/www/html/instituto-shanti/dev/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 4,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-09-01 10:53:11',
                'updated_at' => '2018-09-01 10:53:12',
                'deleted_at' => NULL,
                'tipo' => NULL,
            ));

        \App\Models\Foto::create(array (
                'cloudinary_id' => 'shanti_profissional_1535810163',
                'image_name' => '1535810163',
                'image_path' => '/var/www/html/instituto-shanti/dev/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 5,
                'owner_type' => 'App\\Models\\Profissional',
                'created_at' => '2018-09-01 10:56:03',
                'updated_at' => '2018-09-01 10:56:04',
                'deleted_at' => NULL,
                'tipo' => NULL,
            ));


    }
}
