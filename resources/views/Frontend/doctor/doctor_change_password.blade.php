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
         @include('Frontend.layouts.doctor_sidebar')


        <div class="col-md-7 col-lg-8 col-xl-9 col-sm-11">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-11 col-lg-6 mx-auto mt-3">
                            @if (session()->has('status'))
                            <div class="alert alert-success  text-center  alert-dismissible fade show mt-2" role="alert">
                            {{session('status')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            @endif

                            <h1>Change Password</h1>

                            <!-- Change Password Form -->
                            <form  action="{{url('/doctor/doctor_change_password/edit/{id}')}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">

                                    <input type="hidden" class="form-control" name="name" value="{{$doctor->name}}">
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" name="email" value="{{$doctor->email}}">
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" name="phone" {{$doctor->phone}}>
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
                                    <button type="submit" class="btn btn-primary submit-btn">Change Password</button>
                                </div>
                            </form>

                            <!-- /Change Password Form -->

                        </div>
                        <div class="col-md-6 col-sm-11 col-lg-6 mx-auto">
                            <img src="{{asset('assets/img/password.svg')}}" alt="User Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    </div>
</div>

@include('Frontend.layouts.footer')
@include('Frontend.layouts.scripts')
