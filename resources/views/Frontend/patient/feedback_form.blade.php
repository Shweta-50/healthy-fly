@include('Frontend.doctor.layouts.docHeader')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Feedback</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Feedback</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<div class="content">
    <div class="container-fluid">

        <div class="row">
         @include('Frontend.layouts.patient_sidebar')

         {{-- ////// --}}

         <div class="col-md-6 col-lg-6 col-sm-11 ">
            @if (session()->has('status'))
         <div class="alert alert-success  text-center  alert-dismissible fade show mt-2" role="alert">
         {{session('status')}}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         </div>
        @endif
            <div class="card flex-fill shadow">





                <div class="card-header">
                    <h4 class="card-title">Feedback Form</h4>
                </div>
                <div class="card-body ">


                    {{-- @foreach($doctors as $doctor) --}}

                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" class="form-control" name="p_id" value="{{Auth::user()->id}}" >
                        <input type="hidden" class="form-control" name="p_name"  value="{{Auth::user()->name}}" >
                        <input type="hidden" class="form-control" name="p_profile" value="{{Auth::user()->profile_photo}}" >
                        <input type="hidden" class="form-control" name="d_id" value="{{$doctor->doc_id}}">
                        <input type="hidden" class="form-control" name="d_profile" value="{{$doctor->doc_profile}}">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Dr. Name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="d_name" value="{{$doctor->doc_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Specialist</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="d_specialist" value="{{$doctor->doc_specialities}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Feedback</label>
                            <div class="col-lg-9">
                                <textarea rows="4" cols="5" class="form-control" name="feedback"></textarea>
                                @if ($errors->has('feedback'))
                                <span class="text-danger">{{ $errors->first('feedback') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="text-right">
                            <button type="submit" class="btn btn-primary shadow ">Submit</button>
                        </div>
                    </form>
                    {{-- @endforeach --}}
             </div>
            </div>
        </div>

         {{-- ////// --}}





         </div>
     </div>
</div>



@include('Frontend.layouts.footer')

