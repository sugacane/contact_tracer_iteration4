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
	<title>Log Existing Person</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row form-row my-auto">
            <div class="col-md-6 side-form my-auto mx-auto">
                <h2>Log Person to Location</h2>
                {!! Form::open(array('url' => '/log/store')) !!}
                {{--<form action="/log/store" method="post">--}}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Anonymous ID" name="anonymous_id">
                    </div>
                    <button type="submit" class="btn">Log Existing Person</button>
                {{--</form>--}}
                {!!Form::close()!!} 
            </div>
        </div>
    </div>
</body>
</html>