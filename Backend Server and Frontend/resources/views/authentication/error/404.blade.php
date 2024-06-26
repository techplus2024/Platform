@extends('layouts.app', ['class' => 'error-page'])

@section('content')
    <main class="main-content  mt-0">
        <div class="page-header min-vh-100" style="background-image: url('/assets/img/illustrations/404.svg');">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-7 mx-auto text-center">
                        <h1 class="display-1 text-bolder text-primary">Error 404</h1>
                        <h2>Page not found</h2>
                        <p class="lead">We suggest you to go to the homepage.</p>
                        <a href="/" class="btn bg-gradient-dark mt-4">Go to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
