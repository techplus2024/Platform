@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.topnav', [
        'classes' => 'top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4',
        'container' => 'container',
        'text' => 'text-white',
        'arrow' => '/assets/img/down-arrow-white.svg',
    ])
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reset-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-7">Reset Password</h1>
                        <p class="text-lead text-white">Change the password of your account</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card mb-md-8">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="icon icon-shape bg-primary shadow text-center border-radius-md">
                                    <i class="ni ni-circle-08 text-white text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">Can't log in?</h5>
                                    <p class="text-sm mb-0">Restore access to your account</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('change.perform') }}">
                                @csrf
                                <label>Email</label>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Your e-mail" aria-label="Email">
                                    @error('email')  <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <label>Password</label>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                                    @error('password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <label>Password Confirmation</label>
                                <div class="mb-3">
                                    <input type="password" name="confirm-password" class="form-control" placeholder="Password" aria-label="Password">
                                    @error('confirm-password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Change password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footers.auth.desc-footer')
@endsection
