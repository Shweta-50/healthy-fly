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
    <div class="container-fluid">

        <div class="row">
         @include('Frontend.layouts.doctor_sidebar')
            {{-- dashboard --}}
            <div class="col-md-7 col-lg-8 col-xl-9 ">

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card dash-card ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-4 ">
                                        <div class="dash-widget dct-border-rht  dct-border-rht shadow py-3  mx-auto" style="border-right:7px solid rgb(245, 90, 90)">
                                            <div  style="height:100px; width:100px;border-radius:50px; border:4px solid rgb(245, 90, 90)" class="shadow  ml-4 animate__animated animate__pulse animate__infinite	infinite">
                                                <div   class="text-center" style="line-height: 90px;">
                                                    <img src="{{asset('assets/img/patient.png')}}" class="img-fluid animate__animated animate__pulse animate__infinite	infinite" alt="patient" height="50px" width="50px">
                                                </div>
                                            </div>
                                            <div class="dash-widget-info  ml-3">
                                                <h6><b>Total Patient</b></h6>
                                                <h3 class="badge badge-danger">{{$total_Doctor}}</h3>
                                                <p class="text-muted">Till Today</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-4">
                                        <div class="dash-widget  dct-border-rht shadow py-3  mx-auto " style="border-right:7px solid royalblue">
                                            <div style="height:100px; width:100px;border-radius:50px; border:4px solid royalblue" class="shadow  ml-4 animate__animated animate__pulse animate__infinite	infinite">
                                                <div  class="text-center" style="line-height: 90px;">
                                                    <img src="{{asset('assets/img/appointment.png')}}" class="img-fluid animate__animated animate__pulse animate__infinite	infinite" alt="Patient" height="50px" width="50px">
                                                </div>
                                            </div>
                                            <div class="dash-widget-info  ml-3">
                                                <h6><b>Total Appoinments</b></h6>
                                                <h3 class="badge badge-info">{{$total_appointment}}</h3>
                                                <p class="text-muted">Till Today</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-md-12 col-lg-4 ">
                                        <div class="dash-widget dct-border-rht shadow py-3  mx-auto  " style="border-right:7px solid seagreen">
                                            <div style="height:100px; width:100px;border-radius:50px; border:4px solid seagreen" class="shadow  ml-4 animate__animated animate__pulse animate__infinite	infinite" >
                                                <div class="text-center" style="line-height: 90px;">
                                                    <img src="{{asset('assets/img/wallet.png')}}" class="img-fluid animate__animated animate__pulse animate__infinite	infinite" alt="Patient" height="50px" width="50px">
                                                </div>
                                            </div>
                                            <div class="dash-widget-info ml-3">
                                                <h6><b>Total Earning</b></h6>
                                                <h3 class="badge badge-success">₹ {{ $total_earning}}</h3>
                                                <p class="text-muted">Till Today</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @if (session()->has('status'))
                    <div class="alert alert-success  text-center alert-dismissible fade show mt-2" role="alert">
                    {{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
                    <div class="col-md-12 ">
                        <h4 class="mb-4">Patient Appoinment</h4>
                        <div class="appointment-tab shadow">

                            <div class="tab-content">

                                <!-- Upcoming Appointment Tab -->
                                <div class="tab-pane show active" id="upcoming-appointments">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped table-center mb-0">
                                                    <thead>
                                                        <tr style="background-color:#09e5ab; color:white; ">
                                                            <th>Patient Name</th>
                                                            <th>Appt Date</th>
                                                            <th>Purpose</th>

                                                            <th class="text-center">Paid Amount</th>
                                                            <th class="text-center">Prescription</th>
                                                            <th class="text-center">Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($patients as $patient)


                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('uploads/Images')}}/{{ $patient->profile_photo }}" alt="User Image"></a>
                                                                    <a href="patient-profile.html">{{ $patient->pname }}<span>#PT00{{ $patient->p_id }}</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>{{ $patient->apoint_date}}<span class="d-block text-info">{{ $patient->apoint_time }}</span></td>
                                                            <td>{{ $patient->disease}}</td>

                                                            <td class="text-center">
                                                                ₹ {{ $patient->fees}}</td>
                                                                <td class="text-center">
                                                                    <div class="table-action">
                                                                        <a href="{{url('/prescription',$patient->id)}}" class="btn btn-sm bg-primary-light">
                                                                            Click Here
                                                                        </a>
                                                                    </div>
                                                                </td>

                                                                <td class="text-center">
                                                                    <div class="table-action">
                                                                        <a href="{{url('/doctor/DoctorDashboard/destroy',$patient->id)}}" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
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
                                <!-- /Upcoming Appointment Tab -->



                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- dashboard --}}



        </div>
    </div>
</div>

@include('Frontend.layouts.footer')
@include('Frontend.layouts.scripts')





