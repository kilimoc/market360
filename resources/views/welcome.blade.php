<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mat360-Simple,Instant,secure and conveneient Ridesharing</title>

        <!-- Fonts -->
        <link rel="shortcut icon" href="{{ asset('images/mat360.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Styles -->
        <style>
            .btn-block{
                width: 100%;
            }
        </style>

    </head>
    <body class="container">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img src="{{ asset('images/mat360.jpg') }}" height="70"></a>
            <a href="#" data-target="mobile-v" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#"><i class="material-icons left">home</i>Home</a></li>
                <li><a href="#"><i class="material-icons left">view_module</i>Services</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">News</a></li>
                <li><a href=''><i class="material-icons left">account_circle</i>Accounts</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-v">
        <li><a href="#"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="#"><i class="material-icons left">view_module</i>Services</a></li>
        <li><a href="#">Partners</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Accounts</a></li>
    </ul>

    <div class="conttainer-fluid">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="row">
                    <div class="col s12 m12 l12">
                       <h3 class="center-align">Riding made comfortable</h3>
                    </div>
                </div>
                <!--End of the First Row-->
                <div class="row">
                    <div class="col s12 m6 l6">
                       <h4 class="center-align">Book a Ride</h4>
                        <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <select>
                                <option value="" disabled selected>From ...</option>
                                <option value="1">Nyeri</option>
                                <option value="2">Nakuru</option>
                                <option value="3">Nairobi</option>
                                <option value="3">Eldoret</option>
                                <option value="3">Kericho</option>
                            </select>

                        </div>
                            <div class="input-field col s12 m6 l6">
                                <select>
                                    <option value="" disabled selected>TO ...</option>
                                    <option value="1">Nyeri</option>
                                    <option value="2">Nakuru</option>
                                    <option value="3">Nairobi</option>
                                    <option value="3">Eldoret</option>
                                    <option value="3">Kericho</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <select>
                                    <option value="" disabled selected>Choose Sacco</option>
                                    <option value="1">2NK</option>
                                    <option value="2">4NTE</option>
                                    <option value="3">NORTH RIFT</option>
                                    <option value="3">GREAT RIFT</option>
                                    <option value="3">MOLOLINE</option>
                                </select>

                            </div>
                            <div class="input-field col s12 m6 l6">
                                <select>
                                    <option value="" disabled selected>Choose Ride</option>
                                    <option value="1">11 Seater</option>
                                    <option value="2">14 Seater</option>
                                </select>
                            </div>
                        </div>

                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <input id="activeP" type="text" class="validate" placeholder="Ksh.450">
                                    <label for="password">Active Price</label>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <select>
                                        <option value="" disabled selected>Active Vehicle</option>
                                        <option value="1">KBC123C</option>
                                        <option value="2">KBX124C</option>
                                    </select>
                                </div>
                            </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <input id="activeP" type="text" class="validate" placeholder="Ksh.450">
                                <label for="password">Active Bookings</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                               <button class="btn btn-block btn-outline">Proceed To Check Out</button>
                            </div>
                        </div>


                    </div>
                    <!--Download App-->
                    <div class="col s12 m6 l6 right-align">
                        <h5>Get the android application from</h5>
                        <a href=""> <span><img src="{{ asset('images/android.png') }}"></span></a>
                    </div>
                    <!---->
                </div>
                <!--Why mat360-->
                <div class="row">
                    <div class="col s12 m12 l12"><h1 class="center-align">Why US</h1></div>
                </div>

                <!--Reasons Why-->
                <div class="row">
                    <div class="col s12 m3 l3">
                        <div class="card blue-grey  center-align">
                            <div class="card-content white-text">
                                <i class="material-icons">home</i>
                                <span class="card-title">Simple</span>
                                <p>Simple.Straight and convenient way to book a vehicle at real time</p>
                            </div>
                        </div>

                    </div>
                    <div class="col s12 m3 l3">
                        <div class="card blue-grey darken-1 center-align">
                            <div class="card-content white-text">
                                <i class="material-icons">home</i>
                                <span class="card-title">Secure</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3 l3">
                        <div class="card blue-grey darken-1 center-align">
                            <div class="card-content white-text">
                                <i class="material-icons">home</i>
                                <span class="card-title">Instant</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3 l3">
                        <div class="card blue-grey darken-1 center-align">
                            <div class="card-content white-text">
                                <i class="material-icons">home</i>
                                <span class="card-title">Convenient</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <!--Javascript-->
        <!-- Compiled and minified JavaScript -->
        <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            // Or with jQuery

            $(document).ready(function(){
                $('select').formSelect();
            });

            $(document).ready(function(){
                $('.sidenav').sidenav();
            });
        </script>
    </body>
</html>
