@include('Frontend.admin.layouts.admin_header')
@include('Frontend.admin.layouts.admin_sidebar')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Transactions</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Transactions</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @if (session()->has('status'))
                                        <div class="alert alert-success  text-center  alert-dismissible fade show mt-2" role="alert">
                                        {{session('status')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                    @endif

        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-hover table-striped table-center mb-0">
                                <thead>
                                    <tr style="background-color:#09e5ab; color:white; ">
                                        <th>Invoice Number</th>
                                        <th>Patient ID</th>
                                        <th>Patient Name</th>
                                        <th>Total Amount</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaction as $data )


                                    <tr>
                                        <td><a href="invoice.html">#IN000{{$data->id}}</td>
                                        <td>#PT00{{$data->pid}}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                {{-- <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a> --}}
                                                <a href="profile.html">{{$data->pname}}</a>
                                            </h2>
                                        </td>
                                        <td><i class="fa fa-rupee"> {{$data->amount}}</td>
                                        <td class="text-center">
                                            @if ($data->payment_done)
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                            @else
                                                <span class="badge badge-pill bg-danger inv-badge">Unpaid</span>

                                            @endif


                                        </td>
                                        <td class="text-right">
                                            <div class="actions">
                                                <a class="btn btn-sm bg-danger-light"  href="{{url('/admin/admin_transaction',$data->id)}}">
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

