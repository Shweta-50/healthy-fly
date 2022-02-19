@extends('../Frontend.layouts.main')
@section('main-container')

<!-- Page Content -->
<div class="content" >
    <div class="container-fluid ">


        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row mb-4 align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 col-sm-11 mx-auto login-left mt-5 mr-5">
                            <img src="assets/img/login.jpg" class="img-fluid" alt="Login">
                        </div>

                        <div class="col-md-12 col-lg-6 col-sm-11 mx-auto shadow login-right">
                            <div class="login-header">
                                <h3>Login</h3>
                                <x-jet-validation-errors class="mb-4 text-danger" />

                                @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group form-focus">
                                    <x-jet-input id="email" class="form-control floating" type="email" name="email" :value="old('email')" required autofocus />
                                    <label class="focus-label">Email</label>
                                </div>
                                <div class="form-group form-focus">

                                    <x-jet-input id="password" class="form-control floating" type="password" name="password" required autocomplete="current-password" />
                                    <label class="focus-label">Password</label>
                                </div>
                                <div class="text-right">
                                    <a class="forgot-link" href="{{ route('forgot.password.get') }}">Forgot Password ?</a>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>


                                <div class="text-center dont-have">Don’t have an account? <a href="{{url('register')}}">Register</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->

            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->




@endsection











{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
