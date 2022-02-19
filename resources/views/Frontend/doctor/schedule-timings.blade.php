@include('Frontend.doctor.layouts.docHeader')

<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Schedule Timings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Schedule Timings</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						@include('Frontend.layouts.doctor_sidebar')

						<div class="col-md-12 col-lg-12 col-xl-9">

							<div class="row">
								<div class="col-sm-12 ">
                                    @if (session()->has('status'))
                                        <div class="alert alert-success  text-center  alert-dismissible fade show mt-2" role="alert">
                                        {{session('status')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                    @endif

									<div class="card shadow ">
										<div class="card-body "style="margin-left:40px;" >
											<div class="row">
                                                <div class="col-md-7 col-sm-11">
                                                    <h2 class="card-title mt-3">Schedule Timings</h2>
                                        <form action="" method="POST">
                                            @csrf
											<div class="profile-box mt-3">
                                                <input type="hidden" name="doct_id" class="form-control appoit-input " value="{{ Auth::user()->id}}">
                                                <div class="">
                                                    <label class="control-label font-weight-bold col-sm-2 col-md-3 requiredField" for="starttime">
                                                        Date

                                                    </label>
                                                    <div class="">
                                                    <input type="date" name="cal" class="form-control appoit-input  ">
                                                    </div>
                                                </div>

                                                <div class="mt-4 ">
                                                    <label class="control-label font-weight-bold  col-sm-2 col-md-3 requiredField" for="starttime">
                                                        Days

                                                    </label>
                                                    <div class="">
                                                    <select class="select form-control appoit-input"  id="scheduleday" name="scheduleday" required>
                                                        <option value="Monday">
                                                         Monday
                                                        </option>
                                                        <option value="Tuesday">
                                                         Tuesday
                                                        </option>
                                                        <option value="Wednesday">
                                                         Wednesday
                                                        </option>
                                                        <option value="Thursday">
                                                         Thursday
                                                        </option>
                                                        <option value="Friday">
                                                         Friday
                                                        </option>
                                                        <option value="Saturday">
                                                         Saturday
                                                        </option>
                                                        <option value="Sunday">
                                                         Sunday
                                                        </option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class=" mt-4">
                                                    <div class="control-label font-weight-bold  col-sm-2 col-md-3 requiredField" for="starttime">
                                                        Start Time

												</div>
                                                    <div class="mt-4">
                                                        <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-clock-o">
                                                                </i>
                                                            </div>
                                                            <input class="form-control appoit-input" id="starttime" name="starttime" type="time" required />
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="  mt-4">
                                                    <label class="control-label  font-weight-bold  col-md-2 col-md-3 requiredField" for="starttime">
                                                        End Time

                                                    </label>
                                                    <div class="">
                                                        <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-clock-o">
                                                                </i>
                                                            </div>
                                                            <input class="form-control appoit-input" id="starttime" name="endtime" type="time" required />
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=" mt-4 ">
                                                    <label class="control-label font-weight-bold  col-md-2 col-md-3  requiredField" for="bookavail">
                                                        Availabilty

                                                    </label>
                                                    <div class="">
                                                        <select class="select form-control appoit-input" id="bookavail" name="bookavail" required>
                                                            <option value="available">
                                                                available
                                                            </option>
                                                            <option value="notavail">
                                                                not available
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="my-4" style="margin-left:130px;">
                                                    <button class="btn btn-primary  w-50  mt-2 appint-btn " >Submit</button>
                                                </div>



												</div>
                                            </form>

                                                </div>

                                                <div class="col-md-4 col-sm-11 col-lg-4 mx-auto ">
                                                    <img src="{{asset('assets/img/Calendar.svg')}}" alt="User Image" class="animate__animated animate__pulse animate__infinite infinite" style="height: 100%;width:100%;">
                                                </div>
                                            </div>




											</div>
                                            {{-- edit --}}
                                        <div class="col-md-10 col-sm-10 shadow mt-3 mb-5"style="margin-left:40px;">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Day</th>
                                                        <th scope="col">Start time </th>
                                                        <th scope="col">End time</th>
                                                        <th scope="col">Availability</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($doctor_schedule as $doctor)
                                                    <tr>
                                                        <th>{{$doctor->id}}</th>
                                                        <td>{{$doctor->date}}</td>
                                                        <td>{{$doctor->day}}</td>
                                                        <td>{{$doctor->start_time}}</td>
                                                        <td>{{$doctor->end_time}}</td>
                                                        <td>{{$doctor->availability}}</td>
                                                        <td>
                                                            <a href="{{url('/doctor/ScheduleEditForm/edit',$doctor->id)}}" class="btn btn-info btn-sm">Edit</a>
                                                            <a href="{{url('/doctor/ScheduleEditForm/destroy',$doctor->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        {{-- edit --}}
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->



		</div>






@include('Frontend.layouts.footer')
@include('Frontend.layouts.scripts')
