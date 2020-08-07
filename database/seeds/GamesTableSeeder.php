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
                'description' => 'Седьмое дополнение к компьютерной игре World of Warcraft, анонсированное 3 ноября 2017 года на BlizzCon и вышедшее 14 августа 2018 года.',
                'code' => 'RetailWoW',
                'image'=>'https://mmo-money.s3.eu-central-1.amazonaws.com/games/MmgKgOYzq3Wh3Oqw8wcP6suWlQEPAR4KQrnPR7M9.jpeg',
            ],

            [
                'name' => 'World of Warcraft Classic',
                'description' => 'Воссозданная в 2019 году версия оригинального World of Warcraft образца 2006 года, анонсированная 3 ноября 2017 года на BlizzCon и вышедшая 27 августа 2019 года. Данная версия игры доступна параллельно с основной, при этом она позволяет увидеть мир военного ремесла в его изначальном виде до выхода первого дополнения - The Burning Crusade.',
                'code' => 'ClassicWoW',
                'image'=>'https://mmo-money.s3.eu-central-1.amazonaws.com/games/MmgKgOYzq3Wh3Oqw8wcP6suWlQEPAR4KQrnPR7M9.jpeg',
            ],

            [
                'name' => 'Lineage 2',
                'description' => 'Lineage II — многопользовательская ролевая онлайн-игра для ОС Windows. Игра является приквелом, события в котором происходят за 150 лет до начала оригинальной Lineage. После запуска в Южной Корее 1 октября 2003 года популярность игры быстро нарастала.',
                'code' => 'RetailLa2',
                'image'=>'https://mmo-money.s3.eu-central-1.amazonaws.com/games/i7dLtNa7HCztOvWWkCTpNwjiJyg3NOGzRYU5oWNX.jpeg',
            ],

            [
                'name' => 'Lineage 2 Classic',
                'description' => 'Lineage II Classic - перезапуск оригинальной версии Lineage II разработанной NCsoft. Игра использует тот же клиент что и основная версия. На Кореских серверах для игры потребуется премиум аккаунт, а в СНГ и Европе игра распространяется по системе P2P. Издателем Русской и европейской версии является компания Innova.',
                'code' => 'ClassicLa2',
                'image'=>'https://mmo-money.s3.eu-central-1.amazonaws.com/games/Am2z9s1PEIntNrlSRW9yvsysNWcjDWssns4Z84rr.png',
            ],

            [
                'name' => 'ArcheAge',
                'description' => 'ArcheAge — это клиентская фэнтезийная массовая многопользовательская ролевая онлайн-игра для PC, разработанная корейской компанией XLGames. Действие игры происходит во вселенной ArcheAge — фэнтезийном мире с элементами средневековья, магии и стимпанка, созданном по мотивам книг корейской писательницы Мин-Хи Чон.',
                'code' => 'AA',
                'image'=>'https://mmo-money.s3.eu-central-1.amazonaws.com/games/OYrrtyIFwxdFRTU2MTyaBLutKRRbcmCOwj6tpV39.png',
            ],
        ]);
    }
}
