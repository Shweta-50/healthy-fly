@include('Frontend.admin.layouts.admin_header')
@include('Frontend.admin.layouts.admin_sidebar')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">List of Patient</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Patient</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-striped table-center mb-0">
                                    <thead>

                                        <tr style="background-color:#09e5ab; color:white; ">
                                            <th>Patient ID</th>
                                            <th>Patient Name</th>
                                            <th>Date of birth</th>
                                            <th>Address</th>
                                            <th>Phone</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($patients as $patient)
                                            <tr>
                                                <td>#PT00{{ $patient->id }}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm mr-2">
                                                            @if ($patient->profile_photo === null)
                                                                <img src="{{ asset('/uploads/Images/default.png') }}"
                                                                    alt="User Image" class="avatar-img rounded-circle">
                                                            @else
                                                                <img class="avatar-img rounded-circle"
                                                                    src="/uploads/Images/{{ $patient->profile_photo }}"
                                                                    alt="User Image">
                                                            @endif

                                                        </a>
                                                        <a href="profile.html">{{ $patient->name }}</a>
                                                    </h2>
                                                </td>
                                                <td>{{ $patient->dob }}</td>
                                                <td>{{ $patient->address }}</td>
                                                <td>{{ $patient->phone }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->


@include('Frontend.admin.layouts.admin_footer')
@include('Frontend.layouts.scripts')
