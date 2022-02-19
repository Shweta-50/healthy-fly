@include('Frontend.admin.layouts.admin_header')
@include('Frontend.admin.layouts.admin_sidebar')


<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome Admin</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-12 ">
                <div class="card dash-card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 ">
                                <div class="dash-widget dct-border-rht  dct-border-rht shadow py-3 " style="border-right:7px solid rgb(245, 90, 142);">
                                    <div  style="height:100px; width:100px;border-radius:50px; border:4px solid rgb(245, 90, 142);" class="shadow mx-auto ml-4  animate__animated animate__pulse animate__infinite	infinite">
                                        <div   class="text-center" style="line-height: 90px; ">
                                            <img src="{{asset('assets/img/doctor.png')}}" class="img-fluid animate__animated animate__pulse animate__infinite	infinite" alt="patient" height="50px" width="50px">
                                        </div>
                                    </div>
                                    <div class="dash-widget-info text-center mt-2">
                                        <h6><b>Total Doctors</b></h6>
                                        <h1 class="badge" style="background-color:rgb(245, 90, 142); color:white; font-size:1.5rem;" >{{$total_Doctor}}</h1>
                                        <p class="text-muted">Till Today</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-3 ">
                                <div class="dash-widget dct-border-rht  dct-border-rht shadow py-3  mx-auto" style="border-right:7px solid rgb(245, 90, 90)">
                                    <div  style="height:100px; width:100px;border-radius:50px; border:4px solid rgb(245, 90, 90)" class="shadow mx-auto ml-4  animate__animated animate__pulse animate__infinite	infinite">
                                        <div   class="text-center" style="line-height: 90px;">
                                            <img src="{{asset('assets/img/patient.png')}}" class="img-fluid  animate__animated animate__pulse animate__infinite	infinite" alt="patient" height="50px" width="50px">
                                        </div>
                                    </div>
                                    <div class="dash-widget-info  text-center mt-2">
                                        <h6><b>Total Patients</b></h6>
                                        <h1 class="badge badge-danger" style="font-size:1.5rem;">{{$total_Patient}}</h1>
                                        <p class="text-muted">Till Today</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-3">
                                <div class="dash-widget  dct-border-rht shadow py-3  mx-auto " style="border-right:7px solid royalblue">
                                    <div style="height:100px; width:100px;border-radius:50px; border:4px solid royalblue" class="shadow mx-auto ml-4  animate__animated animate__pulse animate__infinite	infinite">
                                        <div  class="text-center" style="line-height: 90px;">
                                            <img src="{{asset('assets/img/appointment.png')}}" class="img-fluid  animate__animated animate__pulse animate__infinite	infinite" alt="Patient" height="50px" width="50px">
                                        </div>
                                    </div>
                                    <div class="dash-widget-info text-center mt-2">
                                        <h6><b>Total Appoinments</b></h6>
                                        <h1 class="badge badge-info" style="font-size:1.5rem;">{{$total_appointment}}</h1>
                                        <p class="text-muted">Till Today</p>
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-12 col-lg-3 ">
                                <div class="dash-widget dct-border-rht shadow py-3  mx-auto  " style="border-right:7px solid seagreen">
                                    <div style="height:100px; width:100px;border-radius:50px; border:4px solid seagreen" class="shadow mx-auto ml-4  animate__animated animate__pulse animate__infinite	infinite" >
                                        <div class="text-center" style="line-height: 90px;">
                                            <img src="{{asset('assets/img/wallet.png')}}" class="img-fluid  animate__animated animate__pulse animate__infinite	infinite" alt="Patient" height="50px" width="50px">
                                        </div>
                                    </div>
                                    <div class="dash-widget-info text-center mt-2">
                                        <h6><b>Total Revenue</b></h6>
                                        <h1 class="badge badge-success"  style="font-size:1.5rem;"> ₹ {{$total_revenue}}</h1>
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
            <div class="col-md-6 d-flex">

                <!-- Recent Orders -->
                <div class="card card-table flex-fill shadow">
                    <div class="card-header">
                        <h4 class="card-title">Doctors List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-center mb-0">
                                <thead>
                                    <tr style="background-color:#09e5ab; color:white; ">
                                        <th>Doctor Name</th>
                                        <th>Speciality</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/uploads/Images/{{$doctor->profile_photo}}" alt="User Image"></a>
                                                <a href="profile.html">{{$doctor->name}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$doctor->specilist}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->

            </div>
            <div class="col-md-6 d-flex">

                <!-- Feed Activity -->
                <div class="card  card-table flex-fill shadow ">
                    <div class="card-header " >
                        <h4 class="card-title">Patients List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-center mb-0">
                                <thead>
                                    <tr style="background-color:#09e5ab; color:white; ">
                                        <th>Patient Name</th>
                                        <th>Phone</th>
                                        <th>Last Visit</th>
                                        <th>Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/uploads/Images/{{$patient->profile_photo}}" alt="User Image"></a>
                                                <a href="profile.html">{{$patient->pname}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$patient->phone}}</td>
                                        <td>{{$patient->created_at}}</td>
                                        <td><i class="fa fa-rupee"></i>{{$patient->fees}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Feed Activity -->

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- Recent Orders -->
                <div class="card card-table shadow">
                    <div class="card-header">
                        <h4 class="card-title">Appointment List</h4>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-center mb-0">
                                <thead>
                                    <tr style="background-color:#09e5ab; color:white; ">
                                        <th>Doctor Name</th>
                                        <th>Speciality</th>
                                        <th>Patient Name</th>
                                        <th>Apointment Time</th>
                                        {{-- <th>Status</th> --}}
                                        <th class="text-right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/uploads/Images/{{$appointment->doc_profile}}" alt="User Image"></a>
                                                <a href="profile.html">{{$appointment->doc_name}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$appointment->doc_specialities}}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/uploads/Images/{{$appointment->profile_photo}}" alt="User Image"></a>
                                                <a href="profile.html">{{$appointment->pname}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$appointment->apoint_date}}<span class="text-primary d-block">{{$appointment->apoint_time}}</span></td>
                                        {{-- <td>

                                            <div class="status-toggle" >

                                                <input type="checkbox" id="status_1" class="check" checked>
                                                <label for="status_1" class="checktoggle">checkbox</label>
                                            </div>
                                        </td> --}}
                                        <td class="text-right"><i class="fa fa-rupee"> {{$appointment->fees}}
                                        </td>
                                    </tr>
                                     @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->

            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->



@include('Frontend.admin.layouts.admin_footer')
@include('Frontend.layouts.scripts')

