<!doctype HTML>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mat360-Simple,Instant,secure and conveneient Ridesharing</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    ``
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/mat360.css')}}">



</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s12 m6 offset-m4">
            <div class="card horizontal">
                <div class="card-stacked">

                    <div class="card-content">
                        <span class="card-title center-align"><strong><img src="{{asset('images/mat360.JPG')}}" height="40"></strong></span>
                        <!--Registration Fields-->
                        <div class="row">
                            <p>@include('flash_message')</p>
                            <form method="POST" action="{{route('showAccountCreation.submit')}}">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12 m6 l6">
                                        <input id="fname" type="text" class="validate" name="fname" required>
                                        <label for="fname">FIrst Name</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <input id="lname" type="text" class="validate" name="lname" required>
                                        <label for="lname">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m12 l12">
                                        <input id="phone" type="text" class="validate" name="phone" required>
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m6 l6">
                                        <input id="password" type="password" class="validate" name="password" required>
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <input id="cpassword" type="password" class="validate" name="cpassword" required>
                                        <label for="cpassword">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <button class="btn btn-block btn-orange-curved waves-effect waves-light" type="submit" name="action">Create Account</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <p class="center-align">I already have an account? <a href="{{ route('showLogin') }}">Log In</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End of REgistration Form-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<<!-- Compiled and minified JavaScript -->
<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
</body>
</html>
