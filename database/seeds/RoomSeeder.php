<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 10 ; $i++) { 
        	Room::create([
        		"type"	=> $faker->sentence,
        		'rooms'	=> $faker->sentence
        	]);
        }


     
    }
}
