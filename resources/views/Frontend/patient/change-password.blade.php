@include('Frontend.doctor.layouts.docHeader')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Change Password</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
         @include('Frontend.layouts.patient_sidebar')


        <div class="col-md-7 col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-body shadow">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">

                            <!-- Change Password Form -->
                            <form  action="{{url('/patient/change-password/edit/{id}')}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">

                                    <input type="hidden" class="form-control" name="name" value="{{$patient->name}}">
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" name="email" value="{{$patient->email}}">
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" name="phone" {{$patient->phone}}>
                                </div>
                                <div class="form-group">
                                    <label>Current Password</label>
                                    <input type="password" class="form-control" name="current_password">
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Change password</button>
                                </div>
                            </form>

                            @if (session()->has('status'))
                                            <div class="alert alert-success mt-3">
                                                {{session('status')}}
                                            </div>
                                            @endif
                            <!-- /Change Password Form -->

                        </div>
                        <div class="col-md-12 col-lg-6">
                            <img src="{{asset('assets/img/password1.svg')}}" alt="password-img" height="400px" width="400px" class="animate__animated animate__pulse animate__infinite infinite">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
</div>

@include('Frontend.layouts.footer')

