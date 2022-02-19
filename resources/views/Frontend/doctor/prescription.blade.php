@include('Frontend.doctor.layouts.docHeader')
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Prescription</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Add Prescription</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

							<!-- Profile Widget -->
							<div class="card widget-profile pat-widget-profile">
								<div class="card-body " style="background-color: #2f80c7;">
									<div class="pro-widget-content">
										<div class="profile-info-widget">

											<div class="profile-det-info">
												<h3 class="text-white">Patient Name: {{Session::get('pname')}}</h3>
												<div class="patient-details">

													<h5 class="text-white"><b>Patient ID : #PT00{{Session::get('p_id')}} </b></h5>
													<h5 class="mb-0 text-white"><i class="fas fa-map-marker-alt"></i>{{Session::get('address')}}</h5>
												</div>
											</div>
										</div>
									</div>
									<div class="patient-info ">
										<ul>
											<li class="text-white">Phone <span class="text-white">{{Session::get('phone')}}</span></li>
											<li class="text-white">Gender <span class="text-white"> {{Session::get('gender')}}</span></li>
                                            <li class="text-white">Disease <span class="text-white">{{Session::get('disease')}}</span></li>


										</ul>
									</div>
								</div>

							</div>
							<!-- /Profile Widget -->

						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-header" style="background-color: #09e5ab;">
									<h4 class="card-title mb-0 text-white">Add Prescription</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="biller-info">
                                                @if (Session::has('doc_name'))
												<h4 class="d-block">{{Session::get('doc_name')}}</h4>
                                                @endif

												<span class="d-block text-sm text-muted">{{Session::get('doc_specialities')}}</span>
                                                @if (Session::has('address'))
												<span class="d-block text-sm text-muted"></span>
                                                @endif
											</div>
										</div>
										<div class="col-sm-6 text-sm-right">
											<div class="billing-info">
												<h4 class="d-block"></h4>
												<span class="d-block text-muted"></span>
											</div>
										</div>
									</div>


                                    <!-- Add Item
									<div class="add-more-item text-right">
										<a href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Add Item</a>
									</div>
									 /Add Item -->

									<!-- Prescription Item -->
									<div class="card card-table">
										<div class="card-body">
											<div class="table-responsive">
                                                <form action="#" method="POST" enctype="multipart/form-data">
                                                    @csrf
												<table class="table table-hover table-center">
													<thead>
														<tr>
															<th style="min-width: 200px">Medicine Name</th>
															<th style="min-width: 100px">Quantity</th>
															<th style="min-width: 100px">Days</th>
															<th style="min-width: 100px;">Time</th>
															<th style="min-width: 80px;"></th>
														</tr>
													</thead>
													<tbody>
                                                        <input type="hidden" value="{{$doc_appt->p_id}}" name="p_id">
                                                        <input type="hidden" value="{{$doc_appt->doc_name}}" name="doc_name">
                                                        <input type="hidden" value="{{$doc_appt->id}}" name="patient_appointment_id">

                                                        <tr>
															<td>
																<input class="form-control" type="text" name="name1">
															</td>
															<td>
																<input class="form-control" type="text" name="quantity1">
															</td>

															<td>
																<input class="form-control" type="text" name="days1">
															</td>

                                                            <td>
																<input class="form-control" type="text" name="time1">
															</td>

															<td>
																<a href="#" class="btn bg-danger-light trash"><i class="far fa-trash-alt"></i></a>
															</td>
														</tr>

                                                        <tr>
															<td>
																<input class="form-control" type="text" name="name2">
															</td>
															<td>
																<input class="form-control" type="text" name="quantity2">
															</td>

															<td>
																<input class="form-control" type="text" name="days2">
															</td>

                                                            <td>
																<input class="form-control" type="text" name="time2">
															</td>

															<td>
																<a href="#" class="btn bg-danger-light trash"><i class="far fa-trash-alt"></i></a>
															</td>
														</tr>

                                                        <tr>
															<td>
																<input class="form-control" type="text" name="name3">
															</td>
															<td>
																<input class="form-control" type="text" name="quantity3">
															</td>

															<td>
																<input class="form-control" type="text" name="days3">
															</td>

															<td>
																<input class="form-control" type="text" name="time3">
															</td>

															<td>
																<a href="#" class="btn bg-danger-light trash"><i class="far fa-trash-alt"></i></a>
															</td>
														</tr>





													</tbody>
                                                    <tr>
                                                        <td class="col-md-11 col-sm-11">
                                                        <textarea type="text" class="form-control" row="3" placeholder="prescription description.." name="description"></textarea>
                                                        </td>
                                                    </tr>
												</table>

											</div>
										</div>
									</div>
									<!-- /Prescription Item -->

									<!-- Signature -->
									<div class="row">
										<div class="col-md-12 text-right">
											<div class="signature-wrap">

												<div class="sign-name">
													<p class="mb-0">{{$doc_appt->doc_name}}</p>
													<span class="text-muted">Signature</span>
												</div>
											</div>
										</div>
									</div>
									<!-- /Signature -->






									<!-- Submit Section -->
									<div class="row">
										<div class="col-md-12">
											<div class="submit-section">
												<button type="submit" class="btn btn-primary submit-btn">Save</button>

											</div>
										</div>
									</div>
									<!-- /Submit Section -->
                                </form>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->

            @include('Frontend.layouts.footer')
            @include('Frontend.layouts.scripts')
