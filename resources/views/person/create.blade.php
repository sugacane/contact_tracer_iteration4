<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Register Person</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row form-row my-auto">
            <div class="col-md-6 side-form mx-auto"> 
                <h2>Register</h2>
                {!! Form::open(array('url' => '/person/store')) !!}
                {{--<form action="/person/store" method="post">--}}
                    <div class="form-group input-group">
                        <input type="text" class="form-control" placeholder="First Name" name="first_name">
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email_address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact Number" name="contact_number">
                    </div>
                    <div class="form-group">
                        <!--<input type="text" class="form-control" placeholder="National ID" name="national_id">-->
                    </div>
                    <div class="form-group">
                        <!--<input type="text" class="form-control" placeholder="Passport Number" name="passport_number">-->
                    </div>
                    <button type="submit" class="btn">Register Person</button>
                    
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                           <strong>Success!</strong>
                           <p>{{ Session::get('message') }}</p>
                        </div> 
                        @elseif (Session::has('errmessage'))
                        <div class="alert alert-success">
                            <strong>Error!</strong>
                            <p>{{ Session::get('errmessage') }}</p>
                        </div>
                        @endif
                        <section>
                            @if ($errors->any())
                            <!--{{var_dump($errors)}}-->
                            <section>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                            </section>
                            @endif
                        </section>
                {{--</form>--}}
                {!!Form::close()!!} 
            </div>
        </div>
    </div>
    <!--
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    -->
</body>
</html>