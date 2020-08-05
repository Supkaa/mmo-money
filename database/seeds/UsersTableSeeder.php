<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'is_admin' => 1
            ],

            [
            'name' => 'Supkaa',
            'email' => 'supkaa@supkaa.com',
            'password' => bcrypt('supkaa'),
            'is_admin' => 0
            ]

        ]);
    }
}
