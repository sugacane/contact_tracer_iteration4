<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Log;

use App\Http\Requests\RegistrationRequest;


class PersonController extends Controller
{
    public function create(){
        // registration
        return view("person.create");
    }

    public function log(){
        // logging form(to location)
        return view("person.log");
    }

    public function store(RegistrationRequest $details)
    {
        $person = new Person;
        // NB: business logic was shifted into a register function in the Person Model
        // Call business logic
        $results = $person->register($details);
        return redirect('/person/create')
            ->with('message','Contact Information successfully added to Contact Tracing System');
        // Create Person
        /*
        if ($request->input('first_name') !== null) {
            $person = new Person;
            $person->first_name = $request->input('first_name');
            $person->last_name = $request->input('last_name');
            $person->email_address = $request->input('email_address');
            $person->contact_number = $request->input('contact_number');
            $person->passport_number = $request->input('passport_number');
            $person->national_id = $request->input('national_id');
            $person->save();

            $log = new Log;
            $log->location_id = 1;
            $email_address = $request->input('email_address');
            $log->anonymous_id = Person::where('email_address', '=', $email_address)->firstOrFail()->anonymous_id;
            $log->save();

            return redirect('/person/create');
        } else {
            $log = new Log;
            $log->location_id = 1;
            $log->anonymous_id = $request->input('anonymous_id');
            $log->save();
            return redirect('/person/log');
        }
        */
    }
}
