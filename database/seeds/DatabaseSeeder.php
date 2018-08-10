<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProfissionalsTableSeeder::class);
        $this->call(FotosTableSeeder::class);
        $this->call(BlocoDescricaosTableSeeder::class);
        $this->call(GrupoServicosTableSeeder::class);
    }
}
