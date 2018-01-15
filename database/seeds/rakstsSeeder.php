<?php

use Illuminate\Database\Seeder;

class rakstsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('raksts')->insert([
            'nosaukums' => str_random(10),
            'noskelts' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin mi vel libero lacinia vulputate. Sed elementum suscipit dapibus. Vivamus lacinia metus',
            'saturs' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin mi vel libero lacinia vulputate. Sed elementum suscipit dapibus. Vivamus lacinia metus vitae ullamcorper commodo. Etiam quis eros lacinia, aliquet velit sit amet, vulputate felis. Cras gravida, massa sed tempor eleifend, ipsum tortor facilisis ante, ac lacinia nulla augue vitae justo. Cras aliquam luctus lectus eget consequat. Vivamus eleifend turpis eu eros tempor faucibus. Curabitur consequat sapien in tellus interdum bibendum. Etiam iaculis velit ultricies ligula feugiat, a pellentesque dolor tempus. Pellentesque maximus accumsan semper. In tortor sem, sodales in finibus eu, pharetra at ex. Phasellus sollicitudin odio vel elit venenatis elementum.',
            'user_id' => 1,
        ]);

        DB::table('raksts')->insert([
            'nosaukums' => str_random(10),
            'noskelts' =>'Curabitur sed nunc sed orci pulvinar feugiat in mattis erat. Nulla laoreet sagittis pretium. Aenean eu aliquet urna, ut ornare est. Mauris suscipit',
            'saturs' => 'Curabitur sed nunc sed orci pulvinar feugiat in mattis erat. Nulla laoreet sagittis pretium. Aenean eu aliquet urna, ut ornare est. Mauris suscipit venenatis nibh eget feugiat. Mauris non neque tempor lorem porttitor fringilla. Sed ut ipsum imperdiet, efficitur dui quis, accumsan lorem. Nullam sollicitudin sollicitudin elementum. Suspendisse accumsan hendrerit porta. Etiam sed felis vitae orci elementum convallis. Donec interdum arcu magna, vitae fermentum sapien ullamcorper vitae. Vivamus tempor luctus neque, et iaculis sapien blandit non.',
            'user_id' => 1,
            'akceptets' => true,
        ]);
        DB::table('raksts')->insert([
            'nosaukums' => str_random(10),
            'noskelts' =>'Pellentesque tristique varius eros non pulvinar. Nullam laoreet, mi a pharetra scelerisque, sem odio ultricies magna,',
            'saturs' =>'Pellentesque tristique varius eros non pulvinar. Nullam laoreet, mi a pharetra scelerisque, sem odio ultricies magna, in vestibulum arcu ante ac dolor. Donec tincidunt ex et porttitor vulputate. Cras efficitur ante mauris, vitae fringilla justo viverra sit amet. Mauris at purus libero. Nunc blandit metus orci. Duis ullamcorper porttitor risus, porta interdum mi. Maecenas congue, odio vitae auctor finibus, sapien felis molestie mi, et mollis mauris sem id massa. Curabitur vitae mi tempor, condimentum turpis id, aliquet est. Vivamus ut faucibus ante, in vestibulum tellus.',
            'user_id' => 1,
        ]);
    }
}
