@include('Frontend.doctor.layouts.docHeader')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Invoices</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Invoices</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
         @include('Frontend.layouts.doctor_sidebar')
         {{-- invoice start --}}
         <div class="col-md-7 col-lg-8 col-xl-9">
            <div class="card card-table shadow">
                <div class="card-body">

                    <!-- Invoice Table -->
                    <div class="table-responsive table-striped">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr  style="background-color:#09e5ab; color:white; ">
                                    <th>Invoice No</th>
                                    <th>Patient</th>
                                    <th>Amount</th>
                                    <th>Paid On</th>
                                    <th class="text-center">Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($transaction===null)
                                    <tr>
                                        <td colspan="5">
                                            <h3>No Record Found</h3>
                                        </td>
                                    </tr>
                                @else
                                @foreach ($transaction as $data)
                                <tr>
                                 <td>
                                     <a href="invoice-view.html">#IN000{{$data->id}}</a>
                                 </td>
                                 <td>
                                     <h2 class="table-avatar">
                                         <a href="patient-profile.html">{{$data->pname}}<span>#PT00{{$data->pid}}</span></a>
                                     </h2>
                                 </td>
                                 <td>₹ {{$data->amount}}</td>
                                 <td>{{$data->created_at}}</td>
                                 @if ($data->payment_done)
                                 <td class="text-center">
                                     <span class="badge badge-pill bg-success text-white py-1 px-3 inv-badge">Paid</span> </td>
                                     @else
                                     <td class="text-center">
                                         <span class="badge badge-pill bg-danger text-white py-1 px-3 inv-badge">Unpaid</span>
                                    </td>
                                     @endif
                                 <td >
                                     <div class="table-action">
                                         <a href="{{url('/doctor/doct_invoice_view',$data->id)}}" class="btn btn-sm bg-info-light">
                                             <i class="far fa-eye"></i> View
                                         </a>

                                     </div>
                                 </td>
                             </tr>

                             @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /Invoice Table -->

                </div>
            </div>
        </div>
                    <!-- /Invoice Table -->

                </div>
            </div>
        </div>
         {{-- invoice end --}}
        </div>
    </div>
</div>

@include('Frontend.layouts.footer')
@include('Frontend.layouts.scripts')

