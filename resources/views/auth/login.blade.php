<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br>
<br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="background: #949cb5">
                <div class="text-center">
                    <h2>Login Page</h2>
                </div>
                <div class="text-center">
{{--                    <img src="{{URL::asset')}}" alt="no logo"/>--}}
                </div>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group text-center">

                        <label for="inputEmail">Email</label>

                        <input type="email" class="form-control" id="inputEmail" name="email"  value="{{old('email')}}" placeholder="Email">

                    </div>

                    <div class="form-group text-center">

                        <label for="inputPassword">Password</label>

                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">

                    </div>

                    {{--<div class="checkbox">--}}

                    {{--<label><input type="checkbox"> Remember me</label>--}}

                    {{--</div>--}}
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center">Login</button>
                    </div>


                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
