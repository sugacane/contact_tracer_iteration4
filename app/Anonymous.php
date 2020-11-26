<?php

namespace App;

use Mail;

use Illuminate\Database\Eloquent\Model;

class Anonymous extends Model
{
    // TODO: check if  it ok to call a trait 
    // From my understanding it get the primary and auto fills it as a Universally unique identifier (UUID)
    use \App\Http\Traits\UsesUuid;

    //
    protected $table =  "anonymous"; 
    protected $casts = [
        'anonymous' => 'string',
    ];
    protected $primaryKey = "anonymous_id";

    public function createAnonymousID($userID,$to_email)
    {
        //var_dump($userID);
        $this->id = $userID;
        //bootUsesUuid();
        $this->save();


        $to_name = 'DREEE';
        //$to_email = 'hyland.andre@gmail.com';
        $data = array('name'=>"BB Contact Tracing (Andre)", "body" => " Your Anonymous ID:".$this->anonymous_id);

        /*
        Mail::send('email.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Laravel Test Mail');
            $message->from('contact.tracer.bb@gmail.com','Test Mail');
        });
        */
        // finally we can send email here
        
        
        
    }
}
