@include('Frontend.doctor.layouts.docHeader')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctor Blog</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Doctor Profile</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
         @include('Frontend.layouts.doctor_sidebar')



<div class="col-md-7 col-lg-8 col-xl-9">

    @if (session()->has('status'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    {{session('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

    <!-- Basic Information -->
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title">Add Blog</h3>
            <form action="" method="post">
                @csrf





            <div class="row form-row">
                <input type="hidden" class="form-control" name="doc_id" value="{{ Auth::user()->id}}">

                <input type="hidden" class="form-control" name="profile_photo" value="{{ Auth::user()->profile_photo}}">

                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-user "></i>
                        <label>Username <span class="text-danger ">*</span></label>
                        <input type="text" class="form-control" name="doc_name" value="{{ Auth::user()->name}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-envelope "></i>
                        <label>Email <span class="text-danger ">*</span></label>
                        <input type="email" class="form-control" name="doc_email" value="{{ Auth::user()->email}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-stethoscope"></i>
                        <label>Specialization</label>
                        <input type="text" class="form-control " name="doc_specilist" value="{{ Auth::user()->specilist}}" readonly >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <i class="fas fa-briefcase-medical "></i>
                        <label>Blog Title</label>
                        <input type="text" class="form-control" name="blog_title" value="">
                        @if ($errors->has('blog_title'))
                                <span class="text-danger">{{ $errors->first('blog_title') }}</span>
                            @endif
                    </div>
                </div>



                <div class="col-md-12">
                    <div class="form-group">
                        <i class="fas fa-address-book "></i>
                        <label>Blog</label>
                        <textarea type="text" name="blog" placeholder="Write blog here.." value="" class="form-control" row="6" style="height: 210px"></textarea>
                        @if ($errors->has('blog'))
                        <span class="text-danger">{{ $errors->first('blog') }}</span>
                        @endif
                    </div>
                </div>

            </div>




    <div class="submit-section my-4" style="text-align: center;">
        <button class="btn btn-primary w-45  mb-2 shadow ">Submit </button>
    </div>




        </form>

        </div>
    </div>
    <!-- /Basic Information -->

</div>
</div>
    </div>
</div>


<!-- Sticky Sidebar JS -->
<script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

@include('Frontend.layouts.footer')
@include('Frontend.layouts.scripts')
