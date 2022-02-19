@include('Frontend.admin.layouts.admin_header')
@include('Frontend.admin.layouts.admin_sidebar')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Appointments</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Appointments</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-md-12">

                <!-- Recent Orders -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-hover table-striped table-center mb-0">
                                <thead>
                                    <tr style="background-color:#09e5ab; color:white; ">
                                        <th>Doctor Name</th>
                                        <th>Speciality</th>
                                        <th>Patient Name</th>
                                        <th>Apointment Time</th>

                                        <th class="text-right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $appointments as $appointment )


                                    <tr>
                                        <td>
                                            <h2 class="table-avatar ">
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
                                        <td>{{$appointment->apoint_date}}<span class="text-primary d-block">{{$appointment->apoint_timeP}}</span></td>

                                        <td class="text-right">
                                            <i class="fa fa-rupee"> {{$appointment->fees}}
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
