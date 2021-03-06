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
            'nosaukums' => 'History WW1',
            'noskelts' =>addslashes('<p class="part">Military submarines first made a significant impact in World War I. Forces such as the U-boats of Germany saw action in the First Battle of the Atlantic, and were responsible for sinking RMS Lusitania, which was sunk as a result of unrestricted submarine warfare and is often cited among the reasons for the entry of the United States into the war.</p>
<p class="part">At the outbreak of war <strong>Germany</strong> had only <strong>20</strong> submarines immediately available for '),

             'saturs' => addslashes('<p class="part">Military submarines first made a significant impact in World War I. Forces such as the U-boats of Germany saw action in the First Battle of the Atlantic, and were responsible for sinking RMS Lusitania, which was sunk as a result of unrestricted submarine warfare and is often cited among the reasons for the entry of the United States into the war.</p>
<p class="part">At the outbreak of war <strong>Germany</strong> had only <strong>20</strong> submarines immediately available for combat, although these included vessels of the diesel-engined U-19 class with the range (5,000 miles) and speed (eight knots) to operate effectively around the entire British coast. By contrast the Royal Navy had a total of 74 submarines, though of mixed effectiveness. In August 1914, a flotilla of ten U-boats sailed from their base in Heligoland to attack Royal Navy warships in the North Sea in the first submarine war patrol in history. The U-boats\' ability to function as practical war machines relied on new tactics, their numbers, and submarine technologies such as combination diesel-electric power system developed in the preceding years. More submersibles than true submarines.</p>
<p class="part">U-boats operated primarily on the surface using regular engines, submerging occasionally to attack under battery power. They were roughly <strong>triangular</strong> in cross-section, with a distinct keel to control rolling while surfaced, and a distinct bow. During World War I more than <em>5,000</em> Allied ships were sunk by U-boats</p>'),
                     'user_id' => 1,
            'akceptets' => true,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('raksts')->insert([
            'nosaukums' => 'History WW2',
            'noskelts' =>addslashes('<p class="part">During World War II, Germany used submarines to devastating effect in the Battle of the Atlantic, where it attempted to cut Britain\'s supply routes by sinking more merchant ships than Britain could replace. (Shipping was vital to supply Britain\'s population with food, industry with raw material, and armed forces with fuel and armaments.) While U-boats destroyed a significant number of ships, the strategy ultimately failed. Although the U-boats had been updated in the interwar yea'),
            'saturs' => addslashes('<p class="part">During World War II, Germany used submarines to devastating effect in the Battle of the Atlantic, where it attempted to cut Britain\'s supply routes by sinking more merchant ships than Britain could replace. (Shipping was vital to supply Britain\'s population with food, industry with raw material, and armed forces with fuel and armaments.) While U-boats destroyed a significant number of ships, the strategy ultimately failed. Although the U-boats had been updated in the interwar years, the major innovation was improved communications, encrypted using the famous Enigma cipher machine. This allowed for mass-attack naval tactics (Rudeltaktik, commonly known as "wolfpack"), but was also ultimately the U-boats\' downfall. By the end of the war, almost 3,000 Allied ships (175 warships, 2,825 merchantmen) had been sunk by U-boats. Although successful early in the war, ultimately the U-boat fleet suffered a casualty rate of 73%, almost all fatalities.</p>
<p class="part">The Imperial Japanese Navy operated the most varied fleet of submarines of any navy, including Kaiten crewed torpedoes, midget submarines (Type A Ko-hyoteki and Kairyu classes), medium-range submarines, purpose-built supply submarines and long-range fleet submarines. They also had submarines with the highest submerged speeds during World War II (I-201-class submarines) and submarines that could carry multiple aircraft (I-400-class submarines). They were also equipped with one of the most advanced torpedoes of the conflict, the oxygen-propelled Type 95. Nevertheless, despite their technical prowess, Japan chose to utilize its submarines for fleet warfare, and consequently were relatively unsuccessful, as warships were fast, maneuverable and well-defended compared to merchant ships.</p>
<p class="part">The submarine force was the most effective anti-ship weapon in the American arsenal. Submarines, though only about 2 percent of the U.S. Navy, destroyed over 30 percent of the Japanese Navy, including 8 aircraft carriers, 1 battleship and 11 cruisers. US submarines also destroyed over 60 percent of the Japanese merchant fleet, crippling Japan\'s ability to supply its military forces and industrial war effort. Allied submarines in the Pacific War destroyed more Japanese shipping than all other weapons combined. This feat was considerably aided by the Imperial Japanese Navy\'s failure to provide adequate escort forces for the nation\'s merchant fleet.</p>
<p class="part">During World War II, 314 submarines served in the US Navy, of which nearly 260 were deployed to the Pacific. When the Japanese attacked Hawaii in December 1941, 111 boats were in commission; 203 submarines from the Gato, Balao, and Tench classes were commissioned during the war. During the war, 52 US submarines were lost to all causes, with 48 directly due to hostilities. US submarines sank 1,560 enemy vessels, a total tonnage of 5.3 million tons (55% of the total sunk).</p>
<p class="part">The Royal Navy Submarine Service was used primarily in the classic Axis blockade. Its major operating areas were around Norway, in the Mediterranean (against the Axis supply routes to North Africa), and in the Far East. In that war, British submarines sank 2 million tons of enemy shipping and 57 major warships, the latter including 35 submarines. Among these is the only documented instance of a submarine sinking another submarine while both were submerged. This occurred when HMS Venturer engaged the U864 the Venturer crew manually computed a successful firing solution against a three-dimensionally maneuvering target using techniques which became the basis of modern torpedo computer targeting systems. Seventy-four British submarines were lost, the majority, 42, in the Mediterranean.</p>'),
            'user_id' => 1,
            'akceptets' => true,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('raksts')->insert([
            'nosaukums' => 'History Cold War',
            'noskelts' =>addslashes('<p>The first launch of a cruise missile (SSM-N-8 Regulus) from a submarine occurred in July 1953, from the deck of USS Tunny, a World War II fleet boat modified to carry the missile with a nuclear warhead. Tunny and its sister boat, Barbero, were the United States\' first nuclear deterrent patrol submarines. In the 1950s, nuclear power partially replaced diesel-electric propulsion. Equipment was also developed to extract oxygen from sea water. These two innovations gave submarines the ability to '),
            'saturs' =>addslashes('<p>The first launch of a cruise missile (SSM-N-8 Regulus) from a submarine occurred in July 1953, from the deck of USS Tunny, a World War II fleet boat modified to carry the missile with a nuclear warhead. Tunny and its sister boat, Barbero, were the United States\' first nuclear deterrent patrol submarines. In the 1950s, nuclear power partially replaced diesel-electric propulsion. Equipment was also developed to extract oxygen from sea water. These two innovations gave submarines the ability to remain submerged for weeks or months. Most of the naval submarines built since that time in the US, the Soviet Union/Russian Federation, Britain, and France have been powered by nuclear reactors. In 1959&ndash;1960, the first ballistic missile submarines were put into service by both the United States (George Washington class) and the Soviet Union (Golf class) as part of the Cold War nuclear deterrent strategy.</p>'),
            'user_id' => 3,
            'akceptets' => true,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('raksts')->insert([
            'nosaukums' => 'Attack Submarines - SSN',
            'noskelts' =>addslashes('<p class="part">An attack submarine or hunter-killer submarine is a submarine specifically designed for the purpose of attacking and sinking other submarines, surface combatants and merchant vessels. In the Soviet and Russian navies they were and are called "multi-purpose submarines".&nbsp;<br />They are also used to protect friendly surface combatants and missile submarines. Some attack subs are also armed with cruise missiles mounted in vertical launch tubes, increasing the scope of their pote'),
            'saturs' =>addslashes('<p class="part">An attack submarine or hunter-killer submarine is a submarine specifically designed for the purpose of attacking and sinking other submarines, surface combatants and merchant vessels. In the Soviet and Russian navies they were and are called "multi-purpose submarines".&nbsp;<br />They are also used to protect friendly surface combatants and missile submarines. Some attack subs are also armed with cruise missiles mounted in vertical launch tubes, increasing the scope of their potential missions to include land targets.</p>
<p class="part">Attack submarines may be either nuclear-powered or diesel-electric ("conventionally") powered. In the United States Navy naming system, and in the equivalent NATO system (STANAG 1166), nuclear-powered attack submarines are known as SSNs and their diesel-electric predecessors were SSKs. In the US Navy, SSNs are unofficially called&nbsp;<em>fast attacks</em>.</p>'),
            'user_id' => 3,
            'akceptets' => true,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('raksts')->insert([
            'nosaukums' => 'Fleet Ballistic Missile Submarines - SSBN',
            'noskelts' =>addslashes('<p>A ballistic missile submarine is a submarine deploying submarine-launched ballistic missiles (SLBMs) with nuclear warheads. The United States Navy\'s hull classification symbols for ballistic missile submarines are SSB and SSBN - the SS denotes submarine (or submersible ship), the B denotes ballistic missile, and the N denotes that the submarine is nuclear-powered. These submarines became a major weapon system in the Cold War because of their nuclear deterrence capability. They can fire missil'),
            'saturs' =>addslashes('<p>A ballistic missile submarine is a submarine deploying submarine-launched ballistic missiles (SLBMs) with nuclear warheads. The United States Navy\'s hull classification symbols for ballistic missile submarines are SSB and SSBN - the SS denotes submarine (or submersible ship), the B denotes ballistic missile, and the N denotes that the submarine is nuclear-powered. These submarines became a major weapon system in the Cold War because of their nuclear deterrence capability. They can fire missiles thousands of kilometers from their targets, and acoustic quieting makes them difficult to detect (see acoustic signature), thus making them a survivable deterrent in the event of a first strike and a key element of the mutual assured destruction policy of nuclear deterrence. Their deployment has been dominated by the United States and the Soviet Union / Russia, with smaller numbers in service with France, the United Kingdom, China, and most recently India.</p>'),
            'user_id' => 1,
            'akceptets' => false,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
