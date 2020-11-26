<?php

use Illuminate\Database\Seeder;
use App\Anonymous;

use Carbon\Carbon;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mailList = array(
            "hyland.andre@gmail.com",
            "",
            "",
            "",
            "",
            "hyland.andreFAKE1@gmail.com",
            "hyland.andreFAKE2@gmail.com",
            "hyland.andreFAKE3@gmail.com",
            "hyland.andreFAKE4@gmail.com",
            "hyland.andreFAKE5@gmail.com",
        );
        //for ($x = 1; $x <= 10; $x++)
        for($i = 1;$i <= 20;$i++)
        {
            //
            $randomEmail = Str::random(10).'@gmail.com';
            $id = DB::table('person')->insertGetId([
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'email_address' => $randomEmail,
                'contact_number' => Str::random(10),
                /*
                'national_id' => Str::random(10),
                'passport_number' => Str::random(10),
                */
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            //
            
            $anon = new Anonymous;
            $anon->createAnonymousID($id,$randomEmail);

            
            /*
            DB::table('anonymous')->insert([
                'anonymous_id' => $anon->anonymous_id,
                'id' => $id,
            ]);*/
        }
    }
}
