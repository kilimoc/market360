@extends('saccomanager.smdashboardlayout')
<!-- Counts Section -->
@section('content')
<section class="dashboard-header section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12 offset-sm-1 offset-md-3 offset-xl-3">
            <div class="form-outer text-center d-flex align-items-center">
                <div class="form-inner">
                    <div class="logo text-uppercase"><span>Vehicle Driver</span><strong class="text-primary"> Registration</strong></div>
                    <p>@include('flash_message')</p>
                    <form class="text-left form-validate" method="post" action="{{route('newDriver.submit')}}">
                        @csrf
                        <div class="form-group-material">
                            <input id="idnumber" type="text" name="idno" required data-msg="Please enter  Owner ID Number" class="input-material">
                            <label for="idnumber" class="label-material">ID Number</label>
                        </div>
                        <div class="form-group-material">
                            <input id="fname" type="text" name="fname" required data-msg="Please enter Owner First Name" class="input-material">
                            <label for="fname" class="label-material">First Name</label>
                        </div>
                        <div class="form-group-material">
                            <input id="lname" type="text" name="lname" required data-msg="Please enter Owner Last Name" class="input-material">
                            <label for="lname" class="label-material">Last Name</label>
                        </div>
                        <div class="form-group-material">
                            <input id="phone" type="text" name="phone" required data-msg="Enter Active Phone Number" class="input-material">
                            <label for="phone" class="label-material">Phone Number</label>
                        </div>
                        <div class="form-group text-center">
                            <input id="register" type="submit" value="Capture Owner Details" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
            </div>
        </div>

</section>

@endsection