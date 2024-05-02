@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav-auth', [
        'classes' => 'top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4',
        'container' => 'container',
        'text' => 'text-white',
        'arrow' => '/assets/img/down-arrow-white.svg',
    ])
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/lock-cover.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="info mb-4 mt-n6">
                                <img class="avatar avatar-xxl shadow-lg border border-white" alt="Image placeholder"
                                    src="../../../assets/img/team-2.jpg">
                            </div>
                            <h4 class="mb-0 font-weight-bolder">Mike Priesler</h4>
                            <p class="mb-4">Enter password to unlock your account.</p>
                            <form role="form">
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password"
                                        aria-label="password">
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-lg bg-gradient-dark mt-3 mb-0">Unlock</button>
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
