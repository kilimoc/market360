@extends('saccomanager.smdashboardlayout')
<!-- Counts Section -->
@section('content')
<section class="dashboard-header section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12 offset-sm-1 offset-md-3 offset-xl-3">
            <div class="form-outer text-center d-flex align-items-center">
                <div class="form-inner">
                    <div class="logo text-uppercase"><span>New Vehicle</span><strong class="text-primary"> Registration</strong></div>
                    <p>@include('flash_message')</p>
                    <form class="text-left form-validate" method="post" action="{{route('newVehicle.submit')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group-material">
                            <input id="regnumber" type="text" name="regno" required data-msg="Please enter Vehicle Registration Number" class="input-material">
                            <label for="regnumber" class="label-material">Registration Number</label>
                        </div>

                        <div class="form-group-material">
                        <div class="form-group">
                            <select class="form-control" name="seats">
                                <option>Select Seater</option>
                                <option value="11">11 Seater</option>
                                <option value="14">14 Seater</option>
                            </select>
                        </div>
                        </div>


                        <div class="form-group-material">
                            <input id="driver" type="text" name="driverID" required data-msg="Please enter the driver ID Number" class="input-material">
                            <label for="driver" class="label-material">Driver ID Number</label>
                        </div>
                        <div class="form-group-material">
                            <input id="owner" type="text" name="ownerID" required data-msg="Please enter your password" class="input-material">
                            <label for="owner" class="label-material">Owner ID </label>
                        </div>
                        <div class="form-group-material">
                            <input type="file" class="input-material" name="v_image" >
                        </div>
                        <div class="form-group text-center">
                            <input id="register" type="submit" value="Register Vehicle" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
            </div>
        </div>

</section>

@endsection