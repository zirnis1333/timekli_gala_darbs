<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        DB::table('users')->insert([
            'name' => 'miks1',
            'email' => 'miksk@inbox.lv',
            'role' => '1',
            'password' => bcrypt('miks123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@inbox.lv',
            'role' => '2',
            'password' => bcrypt('miks123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Janis',
            'email' => 'janis2@inbox.lv',
            'role' => '1',
            'password' => bcrypt('miks123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
