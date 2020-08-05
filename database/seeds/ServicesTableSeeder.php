<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name'    => 'Купить золото WoW(retail)',
                'game_id' => 1,
                'image'   => '',
                'price'   => 0.00553,
                'code'    => 'gold'
            ],

            [
                'name'    => 'Купить золото WoW(Classic)',
                'game_id' => 2,
                'image'   => '',
                'price'   => 2.23,
                'code'    => 'gold'
            ],            
        ]);
    }
}
