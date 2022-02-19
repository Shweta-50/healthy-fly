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

<div class="content">
				<div class="container-fluid ">

                        <div class="row">
                            @include('Frontend.layouts.patient_sidebar')


						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body pt-0 shadow" >

									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab"><span>Appointments</span></a>
											</li>

                                            <li class="nav-item">
												<a class="nav-link " href="#pat_prescriptions" data-toggle="tab"><span>Prescriptions</span></a>
											</li>



										</ul>
									</nav>
									<!-- /Tab Menu -->

									<!-- Tab Content -->
									<div class="tab-content pt-0">

										<!-- Appointment Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive ">
														<table class="table table-hover table-center mb-0">

															<thead>
																<tr>
																	<th>Doctor</th>
																	<th>Appt Date</th>

																	<th>Amount</th>
																	<th>Disease</th>
                                                                    <th>Status</th>

																</tr>
															</thead>
															<tbody>

                                                                @foreach ($patient as $data )

																<tr>
																	<td>
																		<h2 class="table-avatar">
																			<a h class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="/uploads/Images/{{$data->doc_profile}}" alt="User Image">
																			</a>

																			<a href="doctor-profile.html">{{$data->doc_name}}  <span>Dental</span></a>

																		</h2>

																	</td>

																	<td>{{$data->apoint_date}} <span class="d-block text-info">{{$data->apoint_time}}</span></td>

																	<td>₹ {{$data->fees}}</td>
																	<td>{{$data->disease}}</td>
                                                                    <td>
                                                                            <span class="badge badge-pill bg-success text-white py-1  px-3 inv-badge">Paid</span>
                                                                    </td>

																</tr>
                                                                @endforeach

															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>





										<!-- /Appointment Tab -->

                                    <!-- Prescription Tab -->
										<div class="tab-pane fade" id="pat_prescriptions">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Prescription Date </th>
																	<th>Prescription No</th>
																	<th>Doctor Name </th>
																	<th class="text-center">Actions</th>
																</tr>
															</thead>
															<tbody>
                                                                @foreach ($presc as $pr )
																<tr>


																	<td>{{$pr->created_at}}</td>
																	<td>Pres {{$pr->id}}</td>

																	<td>

																		<h2 class="table-avatar">

                                                                            {{$pr->doc_name}}

                                                                        </h2>
																	</td>
																	<td class="text-center">
																		<div class="table-action text-center">

																			<a href="{{url('/prescription_invoice',$pr->id)}}" class="btn btn-sm bg-info-light">
                                                                                <i class="far fa-eye"></i> View
                                                                            </a>

																		</div>
																	</td>
																</tr>
                                                                @endforeach


															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>

<!--pre-->




<!--pre-->





									</div>
									<!-- Tab Content -->

								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->



@include('Frontend.layouts.footer')

