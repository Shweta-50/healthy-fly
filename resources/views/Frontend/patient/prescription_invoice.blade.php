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
                <h2 class="breadcrumb-title">Prescription Invoice View</h2>
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

                        <h2 class="text-center">Prescription</h2>
                        <div class="row">
                            @foreach ($invoice as $invo)
                            <div class="col-md-6">
                                <div class="invoice-logo">
                                    <img src="{{asset('assets/img/LOGO.png')}}"  href="/" alt="Logo" height="65px" >
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <p class="invoice-details">

                                    <strong>Issued :  {{$invo->created_at}}</strong>

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
                                        {{$invo->doc_name}}
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="invoice-info invoice-info2">
                                    <strong class="customer-text">Invoice To</strong>
                                    <p class="invoice-details">
                                        {{Auth::user()->name}}
                                         <br>

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
                                    <table class="table table-hover table-center">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 200px">Name</th>
                                                <th style="min-width: 100px">Quantity</th>
                                                <th style="min-width: 100px">Days</th>
                                                <th style="min-width: 100px;">Time</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    {{$invo->name1}}
                                                </td>
                                                <td>
                                                    {{$invo->quantity1}}
                                                </td>

                                                <td>
                                                    {{$invo->days1}}
                                                </td>

                                                <td>
                                                    {{$invo->time1}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    {{$invo->name2}}
                                                </td>
                                                <td>
                                                    {{$invo->quantity2}}
                                                </td>

                                                <td>
                                                    {{$invo->days2}}
                                                </td>

                                                <td>
                                                    {{$invo->time2}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    {{$invo->name3}}
                                                </td>
                                                <td>
                                                    {{$invo->quantity3}}
                                                </td>

                                                <td>
                                                    {{$invo->days3}}
                                                </td>

                                                <td>
                                                    {{$invo->time3}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    {{$invo->name4}}
                                                </td>
                                                <td>
                                                    {{$invo->quantity4}}
                                                </td>

                                                <td>
                                                    {{$invo->days4}}
                                                </td>

                                                <td>
                                                    {{$invo->time4}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    {{$invo->name5}}
                                                </td>
                                                <td>
                                                    {{$invo->quantity5}}
                                                </td>

                                                <td>
                                                    {{$invo->days5}}
                                                </td>

                                                <td>
                                                    {{$invo->time5}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-11 col-sm-11">
                                                <textarea type="text" class="form-control" name="description">{{$invo->description}}</textarea>
                                                </td>
                                            </tr>

                                            @endforeach

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
                            <a href="{{asset(url('/patient/invoice/'))}}" class="btn btn-lg  bg-primary text-white">
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

{{-- @include('Frontend.layouts.footer') --}}

