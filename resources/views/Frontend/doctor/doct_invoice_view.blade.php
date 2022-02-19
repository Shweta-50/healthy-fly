@include('Frontend.doctor.layouts.docHeader')
<!-- Breadcrumb -->
<div class="breadcrumb-bar d-print-none">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Invoice View</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Invoice View</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="invoice-content">
                    <div class="invoice-item">

                        <h2 class="text-center">Billing Invoice</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="invoice-logo">
                                    <img src="{{asset('assets/img/LOGO.png')}}"  href="/" alt="Logo" height="65px" >
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <p class="invoice-details">
                                    <strong>Order :</strong>  {{$invoice_payment_id}}<br>
                                    <strong>Issued:</strong> {{$invoice_created_at}}

                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Invoice Item -->
                    <div class="invoice-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="invoice-info">
                                    <strong class="customer-text">Invoice From</strong>
                                    <p class="invoice-details invoice-details-two">
                                        {{$invoice_doc_name}}<br>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="invoice-info invoice-info2">
                                    <strong class="customer-text">Invoice To</strong>
                                    <p class="invoice-details">
                                        {{$invoice_pname}} <br>
                                        {{Auth::user()->address}} <br>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Invoice Item -->



                    <!-- Invoice Item -->
                    <div class="invoice-item invoice-table-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="invoice-table table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>General Consultation</td>
                                                <td class="text-right">{{$invoice_amount}}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 ml-auto">
                                <div class="table-responsive">
                                    <table class="invoice-table-two table">
                                        <tbody>
                                        <tr>
                                            <th>Total Amount:</th>
                                            <td><span>{{$invoice_amount}}</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Invoice Item -->

                    <!-- Invoice Information -->
                    <center>
                        <div class="other-info mx-auto  d-print-none">
                            <a href="javascript:void(0);" onclick="window.print()"class="btn btn-lg  bg-primary-light">
                                <i class="fas fa-print"></i> Print
                            </a>
                            <a href="{{asset(url('/doctor/doctor_invoice'))}}" class="btn btn-lg  bg-primary text-white">
                                Back
                            </a>
                        </div>
                    </center>
                    <!-- /Invoice Information -->

                </div>
            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->
@include('Frontend.layouts.scripts')

{{-- @include('Frontend.layouts.footer') --}}
