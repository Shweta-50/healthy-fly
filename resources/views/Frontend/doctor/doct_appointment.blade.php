@include('Frontend.doctor.layouts.docHeader')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Appointments</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
         @include('Frontend.layouts.doctor_sidebar')
            {{-- page content --}}
            <div class="col-md-7 col-lg-8 col-xl-9">

                <div class="appointments">
                    @if (session()->has('status'))
                    <div class="alert alert-success  text-center  alert-dismissible fade show mt-2" role="alert">
                    {{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif

                    <!-- Appointment List -->
                    @foreach ( $appointment as $item )
                    <div class="appointment-list shadow">
                        <div class="profile-info-widget">
                            <a href="patient-profile.html" class="booking-doc-img">
                                @if ($item->profile_photo ===null)
                                <img src="{{asset('uploads/Images/default.png')}}" alt="User Image">
                                @else
                                <img src="{{asset('uploads/Images')}}/{{ $item->profile_photo }}" alt="User Image">

                                @endif
                            </a>
                            <div class="profile-det-info">
                                <h3><a href="patient-profile.html">{{$item->pname}}</a></h3>
                                <div class="patient-details">
                                    <h5><i class="far fa-clock"></i>{{$item->apoint_date}} - {{$item->apoint_time}}</h5>
                                    <h5><i class="fas fa-map-marker-alt"></i> {{$item->address}}</h5>
                                    <h5><i class="fas fa-envelope"></i>{{$item->email}}</h5>
                                    <h5 class="mb-0"><i class="fas fa-phone"></i>{{$item->phone}}</h5>
                                </div>
                            </div>

                        </div>
                        <div class="appointment-action ">
                            <a href="{{url('/doctor/doct_appointment/destroy',$item->id)}}" class="btn btn-lg text-white bg-primary shadow font-weight-bolder">Completed <i class="fa fa-check"></i></a>
                        </div>
                    </div>
                    @endforeach
                    <!-- /Appointment List -->

                </div>
            </div>
             {{--end  page content --}}
        </div>
    </div>
</div>






@include('Frontend.layouts.footer')
@include('Frontend.layouts.scripts')
