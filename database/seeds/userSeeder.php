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
            'password' => bcrypt('miks123'),
        ]);
    }
}
