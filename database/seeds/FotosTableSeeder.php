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
                'cloudinary_id' => 'shanti_profissional_1533779218',
                'image_name' => '1533779217',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 1,
                'owner_type' => 'App\\Models\\Profissional',
            ));
        \App\Models\Foto::create(array (
                'cloudinary_id' => 'shanti_profissional_1533780130',
                'image_name' => '1533780130',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpeg',
                'owner_id' => 3,
                'owner_type' => 'App\\Models\\Profissional',
            ));
        \App\Models\Foto::create(array (
                'cloudinary_id' => 'shanti_profissional_1533780510',
                'image_name' => '1533780510',
                'image_path' => '/var/www/public/uploads/',
                'image_extension' => 'jpg',
                'owner_id' => 2,
                'owner_type' => 'App\\Models\\Profissional',
            ));
        
    }
}
