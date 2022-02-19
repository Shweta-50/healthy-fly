
@include('Frontend.doctor.layouts.docHeader')
	<!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Booking</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content success-page-cont">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <!-- Success Card -->
                    <div class="card success-card">
                        <div class="card-body">
                            <div class="success-cont">
                                <i class="fas fa-check"></i>
                                <h5>{{Auth::user()->name}}</h5>
                                <h4>Your payment @if (Session::has('doc_fees'))
                                    {{Session::get('doc_fees')}}
                                    @endif ₹ is done</h4>
                                <h3>Appointment booked Successfully!</h3>
                                <p>Appointment booked with <strong>@if (Session::has('doc_name'))
                                    {{Session::get('doc_name')}}
                                    @endif</strong>@if (Session::has('doc_specilist'))
                                    {{Session::get('doc_specilist')}}
                                @endif<br> on <strong>@if (Session::has('doc_apoint'))
                                        {{Session::get('doc_apoint')}}
                                    @endif </strong><strong>@if (Session::has('doc_apoint_time'))
                                    {{Session::get('doc_apoint_time')}}
                                @endif</strong>@if (Session::has('order_id'))
                                {{Session::get('order_id')}}
                            @endif</p>
                                {{-- <a href="{{url('/patient/invoice',Auth::user()->id)}}" class="btn btn-primary view-inv-btn">View Invoice</a> --}}
                                <a class="btn btn-primary view-inv-btn" href="/patient-profile-dashboard">Dashboard</a>
                                <a class="btn btn-primary view-inv-btn" href="/">Home</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Success Card -->

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->
    @include('Frontend.layouts.footer')
