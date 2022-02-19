
    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar fixed">

        <!-- Profile Sidebar -->
        <div class="profile-sidebar doct-sidebar  shadow ">
            <div class="widget-profile pro-widget-content ">
                <div class="profile-info-widget">
                    <a href="" class="booking-doc-img ">
                        @if (Auth::user()->profile_photo===null)
                        <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                        @else
                        <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image">

                        @endif
                    </a>
                    <div class="profile-det-info mb-0">
                        <h3 class="text-center font-weight-bolder">{{ Auth::user()->name }}</h3>

                        <div class="patient-details">
                            <h5 class="mb-0">{{ Auth::user()->education }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-widget ">
                <nav class="dashboard-menu sidebar-menu" >
                    <ul id="doctor_menus" class="menu">
                        <li>
                            <a href="{{url('/doctor/DoctorDashboard')}}">
                                <i class="fas fa-columns"></i>
                                <span >Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/doctor/doct_appointment')}}">
                                <i class="fas fa-calendar-check"></i>
                                <span>Appointments</span>
                            </a>
                        </li>
                        <li >
                            <a href="{{url('/doctor/schedule_timing')}}">
                                <i class="fas fa-hourglass-start"></i>
                                <span>Schedule Timings</span>
                            </a>
                        </li>
                        <li>
                            <a href="/doctor/doctor_invoice">
                                <i class="fas fa-file-invoice"></i>
                                <span>Invoices</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/doctor/doctor_profile')}}">
                                <i class="fas fa-user-cog"></i>
                                <span>Profile Settings</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/doctor/doctor_side_blog')}}">
                                <i class="fas fa-book"></i>
                                <span>Blog</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/doctor/doctor_change_password')}}">
                                <i class="fas fa-lock"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('logout')}}">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /Profile Sidebar -->

    </div>

  <!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}   "></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/popper.min.js')}}   "></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}    "></script>

<!-- Sticky Sidebar JS -->
<script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}   "></script>
<script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}   "></script>

<!-- Circle Progress JS -->
<script src="{{asset('assets/js/circle-progress.min.js')}}  "></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}   "></script>

