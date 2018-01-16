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
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tags' => 'Germany',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tags' => 'Japan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tags' => 'UK',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tags' => 'USA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tags' => 'WW2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tags' => 'WW1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tags' => 'History',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tags' => 'Cold-War',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tags' => 'Modern',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
