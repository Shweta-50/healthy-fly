@include('Frontend.doctor.layouts.docHeader')
<div class="row">
    @include('Frontend.layouts.doctor_sidebar')
<div class="col-md-12 col-lg-12 col-xl-9">
    <div class="row">
        <div class="col-sm-12">
            @if (session()->has('status'))
            <div class="alert alert-success  text-center alert-dismissible fade show mt-2" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
            <div class="card">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="profile-box mt-5 ">
                        <div class="row col-md-7 col-sm-11">


                            <input type="hidden" name="doct_id" class="form-control appoit-input " value="{{ Auth::user()->id}}">
                            <label class="control-label font-weight-bold col-sm-2 col-md-3 requiredField" for="starttime">
                                Date

                            </label>
                            <div class="col-sm-10 col-md-8">
                            <input type="date" name="cal" class="form-control appoit-input"  value="{{$doctor_schedule->date}}" >
                            </div>
                        </div>

                        <div class="row col-md-7 col-sm-11 mt-4">
                            <label class="control-label font-weight-bold  col-sm-2 col-md-3 requiredField" for="starttime">
                                Days

                            </label>
                            <div class="col-sm-10 col-md-8">
                            <select class="select form-control appoit-input"  id="scheduleday" name="scheduleday" value="{{$doctor_schedule->day}}" required>
                                <option value="Monday">
                                 Monday
                                </option>
                                <option value="Tuesday">
                                 Tuesday
                                </option>
                                <option value="Wednesday">
                                 Wednesday
                                </option>
                                <option value="Thursday">
                                 Thursday
                                </option>
                                <option value="Friday">
                                 Friday
                                </option>
                                <option value="Saturday">
                                 Saturday
                                </option>
                                <option value="Sunday">
                                 Sunday
                                </option>
                               </select>
                            </div>
                        </div>

                        <div class="row col-md-7 col-sm-11 mt-4">
                            <div class="control-label font-weight-bold  col-sm-2 col-md-3 requiredField" for="starttime">
                                Start Time

                        </div>
                            <div class="col-sm-10 col-md-8">
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o">
                                        </i>
                                    </div>
                                    <input class="form-control appoit-input" id="starttime" name="starttime" type="time" value="{{$doctor_schedule->start_time}}" required />
                                </div>
                            </div>

                        </div>


                        <div class="row col-md-7 col-sm-11 mt-4">
                            <label class="control-label  font-weight-bold  col-md-2 col-md-3 requiredField" for="starttime">
                                End Time

                            </label>
                            <div class="col-sm-10 col-md-8">
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o">
                                        </i>
                                    </div>
                                    <input class="form-control appoit-input" id="starttime" name="endtime" type="time"value="{{$doctor_schedule->end_time}}" required />
                                </div>
                            </div>

                        </div>

                        <div class="row col-md-7 col-sm-11 mt-4 ">
                            <label class="control-label font-weight-bold   col-sm-2 col-md-3 requiredField" for="bookavail">
                                Availabilty

                            </label>
                            <div class="col-sm-10 col-md-8">
                                <select class="select form-control appoit-input" id="bookavail" name="bookavail" value="{{$doctor_schedule->availability}}" required>
                                    <option value="available">
                                        available
                                    </option>
                                    <option value="not available">
                                        not available
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7 mx-auto">
                            <button class="btn btn-primary ml-5 mt-5 appint-btn" >Update</button>
                        </div>



                        </div>
                    </form>

            </div>
        </div>
    </div>

</div>
</div>




@include('Frontend.layouts.footer')
@include('Frontend.layouts.scripts')
