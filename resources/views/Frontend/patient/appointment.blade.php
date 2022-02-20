

@include('Frontend.layouts.header')


<!-- Breadcrumb -->
<div class="breadcrumb-bar" style="margin-top: 50px;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Appointment Booking</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="booking-doc-info">
                            <a href="doctor-profile.html" class="booking-doc-img">
                                <img src="/uploads/Images/{{$doctor->profile_photo}}" alt="User Image">
                            </a>
                            <div class="booking-info">
                                <h4><a href="doctor-profile.html">{{$doctor->name}}</a></h4>
                                <p class="text-muted mb-0"><i class="fas fa-stethoscope"></i> {{$doctor->specilist}}</p>
                                <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> {{$doctor->address}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Schedule Widget -->
                <div class="card booking-schedule schedule-widget">



                    <!-- Schedule Content -->
                    <div class="schedule-cont">
                        <div class="row">
                            <div class="col-md-12">

                                <!-- Time Slot -->
                                <div class="table-responsive shadow">
                                    <table class="table table-striped  text-center table-light table-success">
                                        <thead>
                                          <tr class="bg-primary ">
                                            <th scope="col">Date</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Start Time </th>
                                            <th scope="col">End Time </th>
                                            <th scope="col">Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>

                                         @foreach ($doctor_schedule as $data )
                                            <tr>

                                                <td>{{$data->date}}</td>
                                                <td>{{$data->day}}</td>
                                                <td>{{$data->start_time}}</td>
                                                <td>{{$data->end_time}}</td>
                                                <td>{{$data->availability}}</td>
                                            </tr>
                                         @endforeach
                                        </tbody>
                                      </table>
                                </div>
                                <!-- /Time Slot -->



                            </div>
                        </div>
                    </div>
                    <!-- /Schedule Content -->

                </div>
                <!-- /Schedule Widget -->


            @if (session()->has('status'))
            <div class="alert alert-success  text-center alert-dismissible fade show mt-2" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

            </div>
        </div>
    </div>

</div>


    {{-- Contact Us --}}

<section class="section section-features cont-form" >
    <div class="container-fluid ">
       <div class="row testimonial-section">
        <div class="col-xl-5 col-sm-11 col-md-6 d-flex Contact-img mx-auto" >
            <img class="img-fluid appoint-img" alt="User Image" src="{{asset('assets/img/appointment.jpg')}}" data-aos="zoom-in" >
        </div>
        <div class="col-xl-5 col-sm-11 d-flex mx-auto Contact-form  ">

            <div class="card flex-fill shadow ">
                <div class="card-header cont-box " style="background-image: linear-gradient(to right,#09e5ab, #2f80c7 );">
                    <h4 class="card-title cont-title text-white text-center mx-auto">Appointment Form</h4>
                </div>
                <div class="card-body appoint">

                    <form action="#" enctype="multipart/form-data" method="post" autocomplete="off" >
                     @csrf
                     <input type="hidden" value="{{Auth::user()->id}}" name="pid">

                     @if (Auth::user()->profile_photo===null)
                     <input type="hidden" value="default.png" name="profile">
                    @else
                    <input type="hidden" value="{{Auth::user()->profile_photo}}" name="profile">

                     @endif
                        <div class="form-group row">
                            <div class="col-lg-9 mx-auto">
                                <input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Patient name" class="form-control" autocomplete="off" >
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-9 mx-auto" >
                                <input type="email" name="email"  value="{{Auth::user()->email}}" placeholder="Email" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-9 mx-auto">
                                <input type="text" name="phone"  placeholder="Mobile" class="form-control" autocomplete="off">

                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif


                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-9 mx-auto">
                                <input type="text" name="address" placeholder="Address" class="form-control" autocomplete="off" >

                                @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif



                            </div>
                        </div>

                        <fieldset class="form-group "style="margin-left:92px;">
                            <div class="row">
                              <legend class="col-form-label col-sm-4 pt-0">Gender</legend>
                              <div class="col-sm-10" >
                                <div class="form-check appoin-radio">
                                    <label class="form-check-label" for="radio2">
                                        <input type="radio" class="form-check-input" name="gender" value="male"> Male

                                      </label>

                                </div>
                                <div class="form-check appoin-radio">
                                    <label class="form-check-label" for="radio2">
                                        <input type="radio" class="form-check-input" name="gender" value="female">Female
                                      </label>
                                </div>
                                @if ($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                              </div>
                            </div>
                          </fieldset>


                          <div class="form-group row">
                            <div class="col-lg-9 mx-auto">
                            <label for="date">Select appointment date</label>
                            <select class="form-control" name="date">
                                @foreach ($doctor_schedule as $data )
                              <option value="{{$data->date}}">{{$data->date}}</option>

                                                                @endforeach
                                                            </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-9 mx-auto">
                                                            <label for="day">Select appointment day</label>
                                                            <select class="form-control" name="day">
                                                                @foreach ($doctor_schedule as $data )
                                                            <option value="{{$data->day}}">{{$data->day}}</option>
                                                                @endforeach
                                                            </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-9 mx-auto">
                                                            <label for="time">Select appointment time</label>
                                                            <select class="form-control" name="start_time">
                                                                @foreach ($doctor_schedule as $data )
                                                            <option value="{{$data->start_time}}">{{$data->start_time}}</option>

                                                                @endforeach
                                                            </select>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">

                            <div class="col-lg-9 mx-auto">
                                <input type="text" name="disease" placeholder="Disease" class="form-control" autocomplete="off" >

                                @if ($errors->has('disease'))
                                <span class="text-danger">{{ $errors->first('disease') }}</span>
                            @endif



                            </div>
                        </div>

                                                        <div class="form-group row">

                            <div class="col-lg-9 mx-auto">
                                <textarea class="form-control" type="text" name="msg" placeholder="Disease description" rows="3" autocomplete="off"></textarea>

                                @if ($errors->has('msg'))
                                <span class="text-danger">{{ $errors->first('msg') }}</span>
                            @endif



                            </div>
                        </div>

                                                        <div class="form-group row appoin-fileUpload">

                            <div class="col-lg-9 mx-auto  ">
                                <label for="fileUpload" class="mx-auto">If you have any medical files, please upload here.</label>
                                <input type="file" name="data"  class="form-control " autocomplete="off" >

                            </div>
                        </div>
                        <div class="form-group row">

                                                            <div class="col-lg-9 mx-auto">
                                                                @if (Session::has('doc_fees'))
                                                                <input class="form-control" type="hidden" name="fees" value="{{Session::get('doc_fees')}}" readonly>

                                                    @endif
                                                            </div>
                                                        </div>
                                                        <input type="hidden" value="{{$doctor->id}}" name="d_id">
                                                        <input type="hidden" value="{{$doctor->name}}" name="d_name">
                                                        <input type="hidden" value="{{$doctor->profile_photo}}" name="d_profile">
                                                        <input type="hidden" value="{{$doctor->specilist}}" name="d_specialities">



                                                        <div class="text-right text-center mb-3 mx-auto" width="80px">
                                                            <button type="submit" class="btn appoi-btn btn-primary shadow">Proceed to Pay</button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    </div>
                                    </div>


                            </section>
{{-- End Contact Us --}}
@include('Frontend.layouts.footer')





