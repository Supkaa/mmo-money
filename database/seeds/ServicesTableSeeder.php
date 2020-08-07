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
                'price'   => 0.00553,
                'code'    => 'gold'
            ],

            [
                'name'    => 'Купить золото WoW(Classic)',
                'game_id' => 2,
                'price'   => 2.23,
                'code'    => 'gold'
            ],  
            
            [
                'name'    => 'Купить адену Lineage 2(retail)',
                'game_id' => 3,
                'price'   => 0.122,
                'code'    => 'gold'
            ], 

            [
                'name'    => 'Купить адену Lineage 2(Classic)',
                'game_id' => 4,
                'price'   => 4,
                'code'    => 'gold'
            ], 

            [
                'name'    => 'Купить золото ArcheAge',
                'game_id' => 5,
                'price'   => 0.091,
                'code'    => 'gold'
            ], 
        ]);
    }
}
