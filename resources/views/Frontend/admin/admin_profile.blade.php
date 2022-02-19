@include('Frontend.admin.layouts.admin_header')
@include('Frontend.admin.layouts.admin_sidebar')


			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-md-10">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-10 ml-2  ">

    @if (session()->has('status'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    {{session('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif
							<div class="profile-header shadow" >
								<div class="row align-items-center ml-1" >
									<div class="col-auto profile-image " >
										<a href="#" >
											<img class="rounded-circle shadow" alt="User Image"  src="{{asset('uploads/Images')}}/{{ $doctor->profile_photo }}" style="height: 120px; width:120px; border:4px solid whitesmoke;">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info ">
										<h5 class="user-name mb-0">{{$doctor->name}}</h5>
										<h6 class="text-muted">{{$doctor->email}}</h6>
										<div class="user-Location"><i class="fa fa-map-marker"></i> {{$doctor->address}}</div>

									</div>

								</div>
							</div>

							<div class="tab-content profile-tab-cont">

								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">

									<!-- Personal Details -->
									<div class="row">
                                        <div class="col-md-12">

 <!-- Basic Information -->
 <div class="card shadow">
    <div class="card-body">

        <form enctype="multipart/form-data" action="{{url('/admin/admin_profile/edit/{id}')}}" method="post">
            @csrf
            @method('PUT')

        <div class="row form-row ml-3">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="change-avatar">
                        <div class="profile-img">
                            <img src="{{asset('uploads/Images')}}/{{$doctor->profile_photo}}" height="120px" width="120px" alt="User Image" class="rounded-circle shadow mb-2" style="border:4px solid whitesmoke;">
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
                    <i class="fa fa-user"></i>
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{$doctor->name}}" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <i class="fa fa-envelope"></i>
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{$doctor->email}}" readonly>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <i class="fa fa-phone"></i>
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phone" value="{{$doctor->phone}}">
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <i class="fa fa-venus-double"></i>
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
                    <i class="fa fa-address-book"></i>
                    <label>Address </label>
                    <input type="text" name="address" value="{{$doctor->address}}" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <i class="fa fa-address-book"></i>
                    <label>DOB</label>
                    <input type="date" name="dob" value="{{$doctor->dob}}" class="form-control">
                </div>
            </div>

        </div>




<div class="submit-section my-4" style="text-align: center;">
    <button class="btn btn-primary w-45  mb-2 shadow " >Profile Update</button>
</div>




    </form>

    </div>
</div>
<!-- /Basic Information -->
                                        </div>




									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->




							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->



@include('Frontend.admin.layouts.admin_footer')
@include('Frontend.layouts.scripts')
