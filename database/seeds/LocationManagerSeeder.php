<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class LocationManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $randomEmail = Str::random(10).'@gmail.com';
        DB::table('location_manager')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email_address' => $randomEmail,
            'contact_number' => Str::random(10),
            'password' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
