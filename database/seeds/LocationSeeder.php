<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // location_id	location_manager_id	name	
        $fakeAddress = Str::random(10).' Fake street #'.Str::random(1);
        $id = DB::table('location')->insert([
            'location_manager_id' => 1,
            'name' => Str::random(10),
            'address' => $fakeAddress,
            'contact_number' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
    }
}
