@include('Frontend.doctor.layouts.docHeader')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Dashboard</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

                        <div class="row">
                            @include('Frontend.layouts.patient_sidebar')



						    <div class="col-md-7 col-lg-8 col-xl-9">
                                @if (session()->has('message'))
                                                <div class="alert alert-success  text-center  alert-dismissible fade show mt-2" role="alert">
                                                {{session('message')}}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                            @endif
						    <div class="card">
								<div class="card-body shadow">


									<!-- Profile Settings Form -->
									<form action=" " method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
										<div class="row form-row">
											<div class="col-12 col-md-12">

												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
                                                            @if (Auth::user()->profile_photo===null)
                                                            <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                                                            @else
                                                            <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle">

                                                            @endif
														</div>
														<div class="upload-img">
															<div class="change-photo-btn">
																<span><i class="fa fa-upload"></i> Upload Photo</span>
																<input type="file" name="profile_photo" class="upload">
															</div>
															<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Full Name</label>
													<input type="text" name="name" class="form-control" value="{{$user->name}}">
												</div>
											</div>
                                            <div class="col-12 col-md-6">
												<div class="form-group">
													<label>Email ID</label>
													<input type="email" class="form-control" name="email" value="{{$user->email}}">
												</div>
											</div>
                                            <div class="col-12 col-md-6">
												<div class="form-group">
													<label>Mobile</label>
													<input type="text" name="phone" value="{{$user->phone}}" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Date of Birth</label>

														<input type="date" name="dob"  class="form-control datetimepicker" value="{{$user->dob}}">

												</div>
											</div>
                                            <div class="col-md-6">
												<div class="form-group">
												<label>Address</label>
													<input type="text" name="address"  class="form-control" value="{{$user->address}}">
												</div>
											</div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <i class="fas fa-venus-double"></i>
                                                    <label>Gender</label>
                                                    <select class="form-control " name="gender" value="{{$user->gender}}" select>
                                                        <option>Select</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>





										</div>
                                        <div class="submit-section my-4" style="text-align: center;">
                                            <button class="btn btn-primary w-45  mb-2 shadow " >Profile Update</button>
                                        </div>
									</form>
									<!-- /Profile Settings Form -->

								</div>
							</div>
						</div>
					</div>
				</div>
            </div>

			</div>
			<!-- /Page Content -->


            @include('Frontend.layouts.footer')

