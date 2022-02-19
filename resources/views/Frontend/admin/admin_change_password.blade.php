@include('Frontend.admin.layouts.admin_header')
@include('Frontend.admin.layouts.admin_sidebar')


			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-md-10">
								<h3 class="page-title">Change Password</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Dashboard</a></li>
									<li class="breadcrumb-item active">Change Password</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

                    <div class="col-md-8 col-lg-12  col-sm-11">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7 col-sm-11 col-lg-6 mt-3">
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
                                        <form  action="{{url('/admin/admin_change_password/edit/{id}')}}" method="post">
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
                                                <button type="submit" class="btn btn-primary btn-sm submit-btn">Change Password</button>
                                            </div>
                                        </form>

                                        <!-- /Change Password Form -->

                                     </div>
                                     <div class="col-md-7 col-sm-11 col-lg-6 mt-3">
                                        <img src="{{asset('assets/img/password.svg')}}" alt="User Image" height="400" width="400" class="animate__animated animate__pulse animate__infinite infinite">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>




@include('Frontend.admin.layouts.admin_footer')
@include('Frontend.layouts.scripts')

