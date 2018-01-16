<?php

use Illuminate\Database\Seeder;

class tagsRakstsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 1,
            'tags_id' => 2,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 1,
            'tags_id' => 4,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 1,
            'tags_id' => 5,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 1,
            'tags_id' => 7,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 1,
            'tags_id' => 8,
        ]);



        DB::table('raksta_tagi')->insert([
            'raksts_id' => 2,
            'tags_id' => 1,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 2,
            'tags_id' => 2,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 2,
            'tags_id' => 3,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 2,
            'tags_id' => 4,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 2,
            'tags_id' => 5,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 2,
            'tags_id' => 6,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 2,
            'tags_id' => 8,
        ]);



        DB::table('raksta_tagi')->insert([
            'raksts_id' => 3,
            'tags_id' => 1,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 3,
            'tags_id' => 4,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 3,
            'tags_id' => 5,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 3,
            'tags_id' => 8,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 3,
            'tags_id' => 9,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 4,
            'tags_id' => 1,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 4,
            'tags_id' => 5,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 4,
            'tags_id' => 9,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 4,
            'tags_id' => 10,
        ]);

        DB::table('raksta_tagi')->insert([
            'raksts_id' => 5,
            'tags_id' => 1,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 5,
            'tags_id' => 4,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 5,
            'tags_id' => 5,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 5,
            'tags_id' => 9,
        ]);
        DB::table('raksta_tagi')->insert([
            'raksts_id' => 5,
            'tags_id' => 10,
        ]);


    }
}
