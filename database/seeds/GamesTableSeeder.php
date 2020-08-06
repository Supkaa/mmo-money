<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'name' => 'World of Warcraft:Battle for Azeroth',
                'description' => ' Седьмое дополнение к компьютерной игре World of Warcraft, анонсированное 3 ноября 2017 года на BlizzCon и вышедшее 14 августа 2018 года.',
                'code' => 'RetailWoW',
                'image'=>'https://mmo-money.s3.eu-central-1.amazonaws.com/games/MmgKgOYzq3Wh3Oqw8wcP6suWlQEPAR4KQrnPR7M9.jpeg',
            ],

            [
                'name' => 'World of Warcraft Classic',
                'description' => ' Воссозданная в 2019 году версия оригинального World of Warcraft образца 2006 года, анонсированная 3 ноября 2017 года на BlizzCon и вышедшая 27 августа 2019 года. Данная версия игры доступна параллельно с основной, при этом она позволяет увидеть мир военного ремесла в его изначальном виде до выхода первого дополнения - The Burning Crusade.',
                'code' => 'ClassicWoW',
                'image'=>'https://mmo-money.s3.eu-central-1.amazonaws.com/games/MmgKgOYzq3Wh3Oqw8wcP6suWlQEPAR4KQrnPR7M9.jpeg',
            ],

            [
                'name' => 'Lineage 2',
                'description' => ' Описание Lineage 2',
                'code' => 'RetailLa2',
                'image'=>'',
            ],

            [
                'name' => 'Lineage 2 Classic',
                'description' => ' Описание Lineage 2 Classic',
                'code' => 'ClassicLa2',
                'image'=>'',
            ],

            [
                'name' => 'ArcheAge',
                'description' => ' Описание ArcheAge',
                'code' => 'AA',
                'image'=>'',
            ],
        ]);
    }
}
