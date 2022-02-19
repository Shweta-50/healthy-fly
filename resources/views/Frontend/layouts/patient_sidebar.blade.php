
    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

<!-- Profile Sidebar -->
<div class="profile-sidebar doct-sidebar shadow ">
    <div class="widget-profile pro-widget-content ">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                @if (Auth::user()->profile_photo===null)
                <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                @else
                <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle">

                @endif
            </a>
            <div class="profile-det-info">
                <h3>{{Auth::user()->name}}</h3>

            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li>
                    <a href="{{url('patient-profile-dashboard')}}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>



                <li>
                    <a href="{{url('/edit',Auth::user()->id)}}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/patient/invoice')}}">
                        <i class="fas fa-user-cog"></i>
                        <span>Invoice</span>
                    </a>
                </li>


                <li>
                    <a href="{{url('/patient/patient_feedback')}}">
                        <i class="fas fa-comments"></i>
                        <span>Feedback</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/patient/change-password')}}">
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


