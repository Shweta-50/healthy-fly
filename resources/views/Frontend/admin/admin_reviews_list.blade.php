@include('Frontend.admin.layouts.admin_header')
@include('Frontend.admin.layouts.admin_sidebar')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Reviews</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Reviews</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                @if (session()->has('status'))
                <div class="alert alert-success  text-center  alert-dismissible fade show mt-2" role="alert">
                {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
               @endif
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-hover table-striped table-center mb-0">
                                <thead>
                                    <tr style="background-color:#09e5ab; color:white; ">
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $feedbacks as $feedback )
                                   <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/uploads/Images/{{$feedback->p_profile}}" alt="User Image"></a>
                                                <a href="profile.html">{{$feedback->p_name}}</a>
                                            </h2>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/uploads/Images/{{$feedback->d_profile}}" alt="User Image"></a>
                                                <a href="profile.html">{{$feedback->d_name}}</a>
                                            </h2>
                                        </td>
                                        <td>
                                            {{$feedback->feedback}}
                                        </td>
                                            <td>3 Nov 2019 <br><small>09.59 AM</small></td>
                                        <td class="text-right">
                                            <div class="actions">
                                                <a class="btn btn-sm bg-danger-light"  href="{{url('/admin/admin_reviews_list',$feedback->id)}}">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>

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
