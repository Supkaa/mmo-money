<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServiceServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_servers')->insert([
            [
                'name'    => 'Гордунни - Орда',
                'service_id' => 1,
            ],

            [
                'name'    => 'Гордунни - Альянс',
                'service_id' => 1,
            ],

            [
                'name'    => 'Пламегор - Орда',
                'service_id' => 2,
            ],

            [
                'name'    => 'Пламегор - Альянс',
                'service_id' => 2,
            ],



            [
                'name'    => 'Hatos',
                'service_id' => 3,
            ],

            [
                'name'    => 'Shyeed',
                'service_id' => 3,
            ],

            [
                'name'    => 'Frintezza',
                'service_id' => 4,
            ],

            [
                'name'    => 'Shillien',
                'service_id' => 4,
            ],

            [
                'name'    => 'Ария',
                'service_id' => 5,
            ],

            [
                'name'    => 'Каиль',
                'service_id' => 5,
            ],


        ]);
    }
}
