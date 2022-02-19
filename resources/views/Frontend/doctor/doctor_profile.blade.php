@include('Frontend.doctor.layouts.docHeader')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Doctor Profile</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
         @include('Frontend.layouts.doctor_sidebar')



<div class="col-md-7 col-lg-8 col-xl-9">

    @if (session()->has('status'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    {{session('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

    <!-- Basic Information -->
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">Basic Information</h4>
            <form enctype="multipart/form-data" action="{{url('doctor/doctor_profile/edit/{id}')}}" method="post">
                @csrf
                @method('PUT')




            <div class="row form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="change-avatar">
                            <div class="profile-img">
                                <img src="{{asset('uploads/Images')}}/{{ $doctor->profile_photo }}" alt="User Image" class="rounded-circle shadow">
                            </div>
                            <div class="upload-img">
                                <div class="change-photo-btn">
                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload" name="profile_photo" value="{{$doctor->profile_photo}}">
                                </div>
                                <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <label>Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{$doctor->name}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" value="{{$doctor->email}}" readonly>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-phone-volume"></i>
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="{{$doctor->phone}}">
                    </div>
                </div>



                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-venus-double"></i>
                        <label>Gender</label>
                        <select class="form-control" name="gender" value="{{$doctor->gender}}" select>
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-address-book"></i>
                        <label>Address </label>
                        <input type="text" name="address" value="{{$doctor->address}}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-address-book"></i>
                        <label>DOB</label>
                        <input type="date" name="dob" value="{{$doctor->dob}}" class="form-control">
                    </div>
                </div>

            </div>

            <!--  Specialization -->
    <div class="card services-card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-stethoscope"></i> Specialization</h4>

            <div class="form-group mb-3">
                <input class="input-tags form-control " type="text" data-role="tagsinput" placeholder="Enter Specialization" name="specilist" value="{{$doctor->specilist}}"  >
            </div>

            <h4 class="card-title"><i class="fas fa-university"></i> Degree</h4>
            <div class="form-group mb-3">
                <input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Education" name="education" value="{{$doctor->education}}" >
            </div>

            <h4 class="card-title"><i class="fas fa-rupee-sign"></i> Pricing</h4>
            <div class="form-group mb-3">
                <input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Fees" name="fees" value="{{$doctor->fees}}" >
            </div>


                </div>
            </div>

    <!-- Specialization -->


    <div class="submit-section my-4" style="text-align: center;">
        <button class="btn btn-primary w-45  mb-2 shadow " >Profile Update</button>
    </div>




        </form>

        </div>
    </div>
    <!-- /Basic Information -->






















</div>
</div>
    </div>
</div>

<!-- Sticky Sidebar JS -->
<script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}   "></script>
<script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}   "></script>

@include('Frontend.layouts.footer')
@include('Frontend.layouts.scripts')
