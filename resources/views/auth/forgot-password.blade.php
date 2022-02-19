@extends('../Frontend.layouts.main')
@section('main-container')
  <div class="cotainer mt-5 h-100" >
      <div class="row justify-content-center">
          <div class="col-md-1"></div>
           <div class="col-md-5 mt-5">
              <img src="{{asset('assets/img/forget.jpg')}}" class="img-fluid " alt="" width="400" height="400">
          </div>
          <div class="col-md-5 mx-auto mt-5">
              <div class="card my-5 shadow">
                  <div class="card-header mx-auto"><h4>Reset Password</h4></div>
                  <div class="card-body">

                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                      <form action="{{ route('forgot.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <div class="col-md-12 ">
                                  <input type="text" id="email_address" class="form-control" placeholder="Enter Register Email" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class=" ">
                              <button type="submit" class="btn btn-block btn-primary">
                                 Reset
                              </button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>

          <div class="col-md-1"></div>
      </div>
  </div>
</main>
@endsection
