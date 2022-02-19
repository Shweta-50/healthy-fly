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

       <div class="col-md-9 col-sm-11 mx-auto" >
        <div class="row">
            @foreach($doctors as $doctor)
            <div class="col-xl-3 col-sm-6 col-12 ">
                <div class="card text-center shadow">
                    <div class="card-body"  style="height:250px;">
                        <div class="dash-widget-header">
                            <div class="avatar avatar-xl ">
                                <img class="avatar-img rounded-circle shadow" alt="User Image" src="/uploads/Images/{{$doctor->doc_profile}}">
                            </div>
                            <div class="dash-count mt-2">
                                <h5>{{$doctor->doc_name}}</h5>
                                <h6 class="text-muted">{{$doctor->doc_specialities}}</h6>
                                <a href="{{url('/patient/feedback_form',$doctor->doc_id)}}" type="button" class="btn btn-primary shadow mt-2">Feedback</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
         </div>
       </div>



         {{-- ////// --}}





         </div>
     </div>
</div>



@include('Frontend.layouts.footer')

