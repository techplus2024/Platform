@extends('layouts.app')

@section('content')
    <main class="main-content  mt-0">
        <div class="page-header align-items-start pt-8 pb-10 m-3 border-radius-lg"
            style="min-height: 43vh !important; background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-cover.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                        <p class="text-lead text-white text-lg">Login to the CTI Sharing Platform with the default user:</p>
                        <ul style="list-style: none;padding:0;">
                            <li class="text-white text-md"><strong>user@uversy.com</strong> with the password <strong>secret</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card mt-5">
                            <div class="card-header pb-0 text-start">
                                <h3 class="font-weight-bolder">Login</h3>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{route('login.perform') }}" class="text-start">
                                    @csrf
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="email" name="email" value="{{ old('email') ?? 'user@uversy.com' }}" class="form-control" placeholder="Email" aria-label="Email">
                                        @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" name="password" value="secret" class="form-control" placeholder="Password" aria-label="Password">
                                        @error('password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

        </div>
    </main>
@endsection
