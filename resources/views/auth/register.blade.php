<style>


</style>

@extends('../Frontend.layouts.main')
@section('main-container')
<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row " >
            <div class="col-md-10 offset-md-1" >

                <!-- Account Content -->
                <div class="account-content " style="margin-top"8rem!important;>
                    <div class="row mb-4 justify-content-between ">
                        <div class="col-md-5 col-lg-5 col-sm-12 mx-auto login-left" >
                            <img src="{{asset('assets/img/sign2.jpg')}}" class="img-fluid mr-5 mt-5" alt="Login Banner" style="max-width:38rem;margin-right:30%;">
                        </div>
                        <div class="col-md-1 "></div>
                        <div class="col-md-5 col-lg-5 col-sm-12 mx-auto shadow login-right "  >
                            <div class="login-header">
                                <h3>Sign Up</h3>
                                <x-jet-validation-errors class="mb-4 text-danger" />
                            </div>

                            <!-- Register Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group form-focus">
                                    <input id="name" class="form-control floating " placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                                    <label class="focus-label">Name</label>
                                </div>
                                <div class="form-group form-focus">
                                    <x-jet-input id="email" class="form-control floating" placeholder="Email" type="email" name="email"  :value="old('email')" required />
                                    <label class="focus-label">Email</label>
                                </div>
                                <div class="form-group form-focus">
                                    <x-jet-input id="password" class="form-control floating" placeholder="Create Password" type="password" name="password"  required autocomplete="new-password" />
                                    <label class="focus-label">Create Password</label>
                                </div>
                                <div class="form-group form-focus">
                                    <x-jet-input id="password_confirmation" class="form-control floating" placeholder="Confirm Password"  type="password" name="password_confirmation"  required autocomplete="new-password" />
                                    <label class="focus-label">Confirm Password</label>
                                </div>
                                <div class="form-group form-focus">
                                    <x-jet-input id="phone" class="form-control floating" placeholder="Mobile"  type="text" name="phone"  required autofocus autocomplete="phone" />
                                    <label class="focus-label">Mobile</label>
                                </div>

                                <div class="select">
                                    <select name="u_type" class="form-control floating" id="registeras">
                                        <option value=" " selected disabled>Register As</option>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Patient">Patient</option>
                                    </select>
                                </div>



                                <button class=" btn btn-primary btn-block btn-lg login-btn mt-4" type="submit">
                                Register
                                </button>
                                <div class="text-right mt-2">
                                    <div class="text-center dont-have">Already have an account? <a href="{{url('/login')}}">Login</a></div>
                                </div>



                            </form>
                            <!-- /Register Form -->

                        </div>
                    </div>
                </div>
                <!-- /Account Content -->

            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->
@endsection






