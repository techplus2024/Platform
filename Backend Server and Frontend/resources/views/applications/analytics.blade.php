@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav', ['title' => 'Analytics'])
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
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        @include('auth.logout')
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item position-relative pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
                                                alt="user image">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-6 col-12 d-flex ms-auto">
                <a href="javascript:;" class="btn btn-icon btn-outline-white ms-auto">
                    <span class="btn-inner--text">Export</span>
                    <span class="btn-inner--icon ms-2"><i class="ni ni-folder-17"></i></span>
                </a>
                <div class="dropleft ms-3">
                    <button class="btn bg-gradient-dark dropdown-toggle" type="button" id="dropdownImport"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Today
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownImport">
                        <li><a class="dropdown-item" href="javascript:;">Yesterday</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Last 7 days</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Last 30 days</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Users</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        930
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                    <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">New Users</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        744
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Sessions</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        1,414
                                        <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                    <i class="ni ni-watch-time text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Pages/Session</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        1.76
                                        <span class="text-success text-sm font-weight-bolder">+5%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                    <i class="ni ni-image text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 col-md-12">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Traffic channels</h6>
                        <div class="d-flex align-items-center">
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-primary"></i>
                                <span class="text-dark text-xs">Organic search</span>
                            </span>
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-dark"></i>
                                <span class="text-dark text-xs">Referral</span>
                            </span>
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-info"></i>
                                <span class="text-dark text-xs">Social media</span>
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Referrals</h6>
                            <button type="button"
                                class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="See which websites are sending traffic to your website">
                                <i class="fas fa-info"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-5 col-12 text-center">
                                <div class="chart mt-5">
                                    <canvas id="chart-doughnut" class="chart-canvas" height="200"></canvas>
                                </div>
                                <a class="btn btn-sm bg-gradient-secondary mt-4">See all referrals</a>
                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../../assets/img/small-logos/logo-xd.svg"
                                                                class="avatar avatar-sm me-2" alt="logo_xd">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Adobe</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 25% </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../../assets/img/small-logos/logo-atlassian.svg"
                                                                class="avatar avatar-sm me-2" alt="logo_atlassian">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Atlassian</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 3% </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../../assets/img/small-logos/logo-slack.svg"
                                                                class="avatar avatar-sm me-2" alt="logo_slack">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Slack</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 12% </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                                class="avatar avatar-sm me-2" alt="logo_spotify">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Spotify</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 7% </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../../assets/img/small-logos/logo-jira.svg"
                                                                class="avatar avatar-sm me-2" alt="logo_jira">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Jira</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 10% </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Social</h6>
                            <button type="button"
                                class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="See how much traffic do you get from social media">
                                <i class="fas fa-info"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-facebook btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-facebook fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Facebook</span>
                                        <span class="ms-auto text-sm font-weight-bold">80%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-80" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-twitter btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-twitter fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Twitter</span>
                                        <span class="ms-auto text-sm font-weight-bold">40%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-40" role="progressbar"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-reddit btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-reddit fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Reddit</span>
                                        <span class="ms-auto text-sm font-weight-bold">30%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-30" role="progressbar"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-youtube btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-youtube fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Youtube</span>
                                        <span class="ms-auto text-sm font-weight-bold">25%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-25" role="progressbar"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-slack btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-slack fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Slack</span>
                                        <span class="ms-auto text-sm font-weight-bold">15%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-15" role="progressbar"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card h-100 mt-4 mt-md-0">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex align-items-center">
                            <h6>Pages</h6>
                            <button type="button"
                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Data is based from sessions and is 100% accurate">
                                <i class="fas fa-check"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body px-3 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Page</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Page Views</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Avg. Time</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Bounce Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">1. /bits</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">345</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">00:17:07</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">40.91%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">2. /pages/argon-dashboard</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">520</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">00:23:13</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">30.14%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">3. /pages/soft-ui-dashboard</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">122</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">00:3:10</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">54.10%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">4. /bootstrap-themes</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">1,900</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">00:30:42</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">20.93%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">5. /react-themes</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">1,442</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">00:31:50</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">34.98%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">6. /product/argon-dashboard-angular
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">201</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">00:12:42</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">21.4%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">7. /product/material-dashboard-pro</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">2,115</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">00:50:11</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">34.98%</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="../../assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");
        var ctx2 = document.getElementById("chart-doughnut").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        // Line chart
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                        label: "Organic Search",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#5e72e4",
                        borderColor: "#5e72e4",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6
                    },
                    {
                        label: "Referral",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#3A416F",
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        maxBarThickness: 6
                    },
                    {
                        label: "Direct",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#17c1e8",
                        borderColor: "#17c1e8",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
                        maxBarThickness: 6
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#9ca2b7'
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: true,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
                            padding: 10
                        }
                    },
                },
            },
        });


        // Doughnut chart
        new Chart(ctx2, {
            type: "doughnut",
            data: {
                labels: ['Creative Tim', 'Github', 'Bootsnipp', 'Dev.to', 'Codeinwp'],
                datasets: [{
                    label: "Projects",
                    weight: 9,
                    cutout: 60,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 2,
                    backgroundColor: ['#2152ff', '#3A416F', '#f53939', '#a8b8d8', '#5e72e4'],
                    data: [15, 20, 12, 60, 20],
                    fill: false
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false,
                        }
                    },
                },
            },
        });
    </script>
    <script src="../../assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");
        var ctx2 = document.getElementById("chart-doughnut").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        // Line chart
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                        label: "Organic Search",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#5e72e4",
                        borderColor: "#5e72e4",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6
                    },
                    {
                        label: "Referral",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#3A416F",
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        maxBarThickness: 6
                    },
                    {
                        label: "Direct",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#17c1e8",
                        borderColor: "#17c1e8",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
                        maxBarThickness: 6
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#9ca2b7'
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: true,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
                            padding: 10
                        }
                    },
                },
            },
        });


        // Doughnut chart
        new Chart(ctx2, {
            type: "doughnut",
            data: {
                labels: ['Creative Tim', 'Github', 'Bootsnipp', 'Dev.to', 'Codeinwp'],
                datasets: [{
                    label: "Projects",
                    weight: 9,
                    cutout: 60,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 2,
                    backgroundColor: ['#2152ff', '#3A416F', '#f53939', '#a8b8d8', '#5e72e4'],
                    data: [15, 20, 12, 60, 20],
                    fill: false
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false,
                        }
                    },
                },
            },
        });
    </script>
@endpush
