@extends('../Frontend.layouts.main')
@section('main-container')

{{-- Contact Us --}}

<section class="section section-features bg-light cont-section" id="contact">
    <div class="container-fluid cont-form  bg-light  ">
        {{-- <div class=" text-center mt-4 bg-light pb-3  ">
            <h2>Contact Us</h2>
            <p class="sub-title"> If you'd want to share a compliment or concern about your care at healthGuider, please contact us.</p>
        </div> --}}


        @if (session()->has('status'))
        <div class="alert alert-success text-center mt-3 alert-dismissible fade show mt-2" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif


       <div class="row testimonial-section mt-4 ">
        <div class="col-xl-6 col-sm-11 d-flex mx-auto Contact-form mt-4 ">
            <div class="card flex-fill shadow">
                <div class="card-header cont-box " style="background-image: linear-gradient(to right,#09e5ab, #2f80c7 );">
                    <h4 class="card-title cont-title text-white text-center mx-auto">Contact Form</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" autocomplete="off" class="mt-4" >
                     @csrf
                        <div class="form-group row">

                            <div class="col-lg-9 mx-auto">
                                <input type="text" name="name" placeholder="Full name" class="form-control" autocomplete="off" >
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-9 mx-auto" >
                                <input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-9 mx-auto">
                                <input type="text" name="phone" placeholder="Mobile" class="form-control" autocomplete="off">
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-9 mx-auto">
                                <input type="text" name="add" placeholder="Address" class="form-control" autocomplete="off" >
                                @if ($errors->has('add'))
                                <span class="text-danger">{{ $errors->first('add') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-9 mx-auto">
                                <input class="form-control" type="text" name="msg" placeholder="Your query" autocomplete="off">
                                @if ($errors->has('msg'))
                                <span class="text-danger">{{ $errors->first('msg') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="text-right text-center ">
                            <button type="submit" class="btn cont-btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

            <div class="col-xl-4 col-sm-11 col-md-4 d-flex Contact-img mx-auto animate__animated animate__pulse animate__infinite infinite" >
            <img class="img-fluid  " alt="User Image" src="assets/img/contact.png" id="contact-img">
            </div>


       </div>
    </div>
</section>


</div>

{{-- End Contact Us --}}



@endsection
@include('Frontend.layouts.scripts')
