@include('Frontend.admin.layouts.admin_header')
@include('Frontend.admin.layouts.admin_sidebar')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header ">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">List of Doctors</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Doctor</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row ">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-hover table-striped table-center mb-0">
                                <thead>
                                    <tr style="background-color:#09e5ab; color:white; ">
                                        <th>Doctor Name</th>
                                        <th>Speciality</th>
                                        <th>Member Since</th>
                                        {{-- <th>Earned</th> --}}
                                        <th>Account Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $doctors as $doctor )
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/uploads/Images/{{$doctor->profile_photo}}" alt="User Image"></a>
                                                <a href="profile.html">{{$doctor->name}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$doctor->specilist}}</td>

                                        <td>{{$doctor->created_at}}</td>

                                        {{-- <td>$3100.00</td> --}}

                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="status_1" class="check" checked>
                                                <label for="status_1" class="checktoggle">checkbox</label>
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
        </div>

    </div>
</div>
<!-- /Page Wrapper -->





@include('Frontend.admin.layouts.admin_footer')
@include('Frontend.layouts.scripts')
