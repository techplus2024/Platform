@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
         data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-xl-none d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item d-flex align-items-center ml-auto">
                        @include('auth.logout')
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4 pt-0">
        <div class="row">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-header mx-4 p-4 text-center">
                        <div
                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                            <i class="fas fa-landmark opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-4 text-center">
                        <h6 class="text-center mb-0">Balance</h6>
                        <span class="text-xs">Current Token Balance</span>
                        <hr class="horizontal dark my-3">
                        <h5 class="mb-0">{{$settings->balance}} <i class="fa-light fa-coin" style="margin-left:1px;" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <!--<div class="card h-100">
                    <div class="card-body pt-0 p-4 text-center">
                        <div class="full-background" style="">
                        </div>
                        <div class="card-body pt-4 text-center">
                            <h6 class="mt-4 mb-0">Earnings</h6>
                            <h3 class="">5.000 Tokens</h3>
                            <span class="badge d-block bg-gradient-primary mb-2">+15% since last month</span>
                            <p>They're slowed down by their perception of themselves. </p>
                        </div>
                    </div>
                </div>-->
                <div class="card h-100">
                    <div class="card-header mx-4 p-4 text-center">
                        <div
                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                            <i class="fas fa-money-bill-alt opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-4 text-center">
                        <h6 class="text-center mb-0">Earnings</h6>
                        <span class="text-xs">Total Token Earnings</span>
                        <hr class="horizontal dark my-3">
                        <h5 class="mb-0">{{$sales["total"]}} <i class="fa-light fa-coin" style="margin-left:1px;" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="card h-100">
                    <div class="card-header mx-4 p-4 text-center">
                        <div
                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                            <i class="fas fa-coins opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-4 text-center">
                        <h6 class="text-center mb-0">Subscription</h6>
                        <span class="text-xs">Monthly Token Deposit</span>
                        <hr class="horizontal dark my-3">
                        <h5 class="mb-0">{{$settings->subscription}} <i class="fa-light fa-coin" style="margin-left:1px;" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 mt-md-0 mt-4">
                <div class="card h-100 mb-4">
                    <div class="card-header pb-0 px-4">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0">Your Transaction's</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Subscriptions</h6>
                        <ul class="list-group">
                            @foreach ($sales['list']['subscription'] as $row)
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded
                                             @if($row['type']==0)
                                                btn-outline-danger
                                            @elseif($row['type']==1)
                                                btn-outline-success
                                            @endif
                                             mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas
                                            @if($row['type']==0)
                                                fa-arrow-down
                                            @elseif($row['type']==1)
                                                fa-arrow-up
                                            @endif"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">{{$row['name']}}</h6>
                                            <span class="text-xs">{{date('d F Y', strtotime($row['created_at']))}} at {{date('g:i A', strtotime($row['created_at']))}}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center
                                     @if($row['type']==0)
                                        text-danger
                                     @elseif($row['type']==1)
                                        text-success
                                     @endif
                                     font-weight-bold">
                                        @if($row['type']==0)
                                            - {{$row['price']}} <i class="fa-light fa-coin" style="margin-left:6px;color:var(--bs-body-color);" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i>
                                        @elseif($row['type']==1)
                                            + {{$row['price']}} <i class="fa-light fa-coin" style="margin-left:6px;color:var(--bs-body-color);" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Sales</h6>
                        <ul class="list-group">
                            @foreach ($sales['list']['sell'] as $row)
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded
                                             @if($row['type']==0)
                                                btn-outline-danger
                                            @elseif($row['type']==1)
                                                btn-outline-success
                                            @endif
                                             mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas
                                            @if($row['type']==0)
                                                fa-arrow-down
                                            @elseif($row['type']==1)
                                                fa-arrow-up
                                            @endif"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">{{$row['name']}}</h6>
                                            <span class="text-xs">{{date('d F Y', strtotime($row['created_at']))}} at {{date('g:i A', strtotime($row['created_at']))}}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center
                                     @if($row['type']==0)
                                        text-danger
                                     @elseif($row['type']==1)
                                        text-success
                                     @endif
                                     font-weight-bold">
                                        @if($row['type']==0)
                                            - {{$row['price']}} <i class="fa-light fa-coin" style="margin-left:6px;color:var(--bs-body-color);" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i>
                                        @elseif($row['type']==1)
                                            + {{$row['price']}} <i class="fa-light fa-coin" style="margin-left:6px;color:var(--bs-body-color);" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Purchases</h6>
                        <ul class="list-group">
                            @foreach ($sales['list']['buy'] as $row)
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded
                                             @if($row['type']==0)
                                                btn-outline-danger
                                            @elseif($row['type']==1)
                                                btn-outline-success
                                            @endif
                                             mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas
                                            @if($row['type']==0)
                                                fa-arrow-down
                                            @elseif($row['type']==1)
                                                fa-arrow-up
                                            @endif"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">{{$row['name']}}</h6>
                                            <span class="text-xs">{{date('d F Y', strtotime($row['created_at']))}} at {{date('g:i A', strtotime($row['created_at']))}}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center
                                     @if($row['type']==0)
                                        text-danger
                                     @elseif($row['type']==1)
                                        text-success
                                     @endif
                                     font-weight-bold">
                                        @if($row['type']==0)
                                            - {{$row['price']}} <i class="fa-light fa-coin" style="margin-left:6px;color:var(--bs-body-color);" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i>
                                        @elseif($row['type']==1)
                                            + {{$row['price']}} <i class="fa-light fa-coin" style="margin-left:6px;color:var(--bs-body-color);" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('css')
    <style>
        .choices {
            margin-bottom: 0;
        }
    </style>
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/js/plugins/choices.min.js"></script>
    <script src="/assets/js/plugins/quill.min.js"></script>
    <script src="/assets/js/plugins/flatpickr.min.js"></script>
@endpush
