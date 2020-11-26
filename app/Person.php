<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Http\Requests\RegistrationRequest;

//
use App\Anonymous;


class Person extends Model
{
    


    public $table = "person";
    public $primarKey = "id";

    // Business Logic

    /*
     * Business Logic
     * creating a new person by adding thier name and email and contact information
     */
    public function register(RegistrationRequest $person)
    {
        $this->first_name = $person->input('first_name');
        $this->last_name = $person->input('last_name');
        $this->email_address = $person->input('email_address');
        $this->contact_number = $person->input('contact_number');
        /*
        $this->passport_number = $person->input('passport_number');
        $this->national_id = $person->input('national_id');*/
        $this->save();


        // limtation

        //
        $anon = new Anonymous;
        // pass new user id over to anon
        $anon->createAnonymousID($this->id,$this->email_address);
        
        
        
        //DEBUG STUFF
        //var_dump($this->id);
        //
        //createAnonymousID($this->id);
    }

    public function getEmail($id)
    {
        return Person::where('id',$id)->first();
    } 
    
}
