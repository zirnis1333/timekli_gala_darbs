<?php

use Illuminate\Database\Seeder;

class tagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tags')->insert([
            'tags' => 'PSRS',
        ]);
        DB::table('tags')->insert([
            'tags' => 'Germany',
        ]);
        DB::table('tags')->insert([
            'tags' => 'Japan',
        ]);
        DB::table('tags')->insert([
            'tags' => 'UK',
        ]);
        DB::table('tags')->insert([
            'tags' => 'USA',
        ]);
        DB::table('tags')->insert([
            'tags' => 'WW2',
        ]);
        DB::table('tags')->insert([
            'tags' => 'WW1',
        ]);
        DB::table('tags')->insert([
            'tags' => 'History',
        ]);
        DB::table('tags')->insert([
            'tags' => 'Cold-War',
        ]);
        DB::table('tags')->insert([
            'tags' => 'Modern',
        ]);


    }
}
