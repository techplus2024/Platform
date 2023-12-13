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
    <div class="min-height-300 bg-primary position-absolute w-100" style="position: fixed !important; min-height: 380px !important; top: 0; left: 0;"></div>
    <div class="container-fluid py-4 pt-0">
        <div class="row mt-4">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-header p-3">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="font-weight-bolder mb-0">Validation Link for Quality Label</h5>
                            </div>
                        </div>
                        <hr class="horizontal dark mb-0">
                    </div>
                    <div class="card-body p-3 pt-0">
                        <p class="text-sm mb-2">Acquired quality label on 10/01/2023 </p>
                        <p class="text-sm mb-3"></p>
                        <div class="d-flex align-items-center">
                            <div class="form-group w-70">
                                <div class="input-group bg-gray-200">
                                    <input class="form-control" value="https://platform.uversy.com/verify/e13581k9"
                                           type="text" id="link" style="background-color: #e9ecef;">
                                </div>
                            </div>
                            <button onclick="copy()" class="btn btn-sm btn-outline-dark ms-2 px-3">Copy</button>
                            <a href="/verify/e13581k9" target="_blank" class="btn btn-sm bg-gradient-primary ms-2 px-3">Open</a>
                        </div>
                        <p class="text-xs mb-1">Reference the validation link to your quality label.</p>
                        <p class="text-xs mb-0">Your customers can very the validity by opening the validation link.</p>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header p-3">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="font-weight-bolder mb-0">Quality Label Requirements</h5>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end align-items-center">
                                <span class="badge bg-gradient-primary ms-auto float-end">Completed</span>
                            </div>
                        </div>
                        <hr class="horizontal dark mb-0">
                    </div>
                    <div class="card-body p-3 pt-0">
                        <ul class="list-group list-group-flush" data-toggle="checklist">
                            <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                <div class="checklist-item checklist-item-primary ps-2 ms-3">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" style="opacity: 1 !important;" type="checkbox" value="" id="flexCheckDefault1"
                                                   checked disabled>
                                        </div>
                                        <h6 class="mb-0 text-dark font-weight-bold text-sm">Sales</h6>
                                    </div>
                                    <div class="d-flex align-items-center ms-4 mt-3 ps-1 label-table">
                                        <div>
                                            <p class="text-xs mb-0 text-secondary font-weight-bold">Required</p>
                                            <span class="text-xs font-weight-bolder">5 Sales</span>
                                        </div>
                                        <div class="ms-auto">
                                            <p class="text-xs mb-0 text-secondary font-weight-bold">Completed</p>
                                            <span class="text-xs font-weight-bolder">5 Sales</span>
                                        </div>
                                        <div class="mx-auto">
                                            <p class="text-xs mb-0 text-secondary font-weight-bold">Completion Date</p>
                                            <span class="text-xs font-weight-bolder">10/01/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-4 mb-0">
                            </li>
                            <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                <div class="checklist-item checklist-item-primary ps-2 ms-3">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" style="opacity: 1 !important;" type="checkbox" value="" id="flexCheckDefault2"
                                                   checked disabled>
                                        </div>
                                        <h6 class="mb-0 text-dark font-weight-bold text-sm">Purchases</h6>
                                    </div>
                                    <div class="d-flex align-items-center ms-4 mt-3 ps-1 label-table">
                                        <div>
                                            <p class="text-xs mb-0 text-secondary font-weight-bold">Required</p>
                                            <span class="text-xs font-weight-bolder">20 Purchases</span>
                                        </div>
                                        <div class="ms-auto">
                                            <p class="text-xs mb-0 text-secondary font-weight-bold">Completed</p>
                                            <span class="text-xs font-weight-bolder">20 Purchases</span>
                                        </div>
                                        <div class="mx-auto">
                                            <p class="text-xs mb-0 text-secondary font-weight-bold">Completion Date</p>
                                            <span class="text-xs font-weight-bolder">10/01/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-4 mb-0">
                            </li>
                            <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                <div class="checklist-item checklist-item-primary ps-2 ms-3">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" style="opacity: 1 !important;" type="checkbox" value="" id="flexCheckDefault3"
                                                   checked disabled>
                                        </div>
                                        <h6 class="mb-0 text-dark font-weight-bold text-sm">Membership</h6>
                                    </div>
                                    <div class="d-flex align-items-center ms-4 mt-3 ps-1 label-table">
                                        <div>
                                            <p class="text-xs mb-0 text-secondary font-weight-bold">Required</p>
                                            <span class="text-xs font-weight-bolder">6 Month</span>
                                        </div>
                                        <div class="ms-auto">
                                            <p class="text-xs mb-0 text-secondary font-weight-bold">Completed</p>
                                            <span class="text-xs font-weight-bolder">6 Month</span>
                                        </div>
                                        <div class="mx-auto">
                                            <p class="text-xs mb-0 text-secondary font-weight-bold">Completion Date</p>
                                            <span class="text-xs font-weight-bolder">10/01/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-4 mb-0">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                <div class="card overflow-hidden" style="display:none;">
                    <div class="card-header p-3 pb-0">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-secondary shadow text-center border-radius-md icon-middle">
                                <i class="fas fa-link text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="font-weight-bolder mb-0">
                                    Validation Page
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pt-1">
                        <p class="text-sm mt-2">Your customers can verify the validity of the quality label with the validation page.</p>
                        <a target="_blank" href="/verify/e13581k9" class="btn btn-outline-dark mb-0">Open Page</a>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <!--<div class="card-header p-3 pb-0">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md icon-middle">
                                <i class="fas fa-image text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="font-weight-bolder mb-0">
                                    Quality Label
                                </h5>
                            </div>
                        </div>
                    </div>-->
                    <div class="card-header p-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="font-weight-bolder mb-0" style="width:100%;text-align:center;">Quality Label</h5>
                            </div>
                        </div>
                        <hr class="horizontal dark mb-0">
                    </div>
                    <div class="card-body p-3 pt-1" style="text-align: center;">
                        <p class="text-sm mt-2">Download your quality label, display it to your customers and link it to the validation link.</p>
                        <img class="mb-4" src="/assets/img/seal.svg" style="max-width: 180px;display:block;margin-left:auto;margin-right:auto;">
                        <a href="/assets/img/seal.svg" class="btn btn-outline-dark mb-0" download>Download</a>
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
    <script src="../../assets/js/plugins/countup.min.js"></script>
    <script>
        if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state2')) {
            const countUp = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state3')) {
            const countUp = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state4')) {
            const countUp = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }

        function copy() {
            // Get the text field
            var copyText = document.getElementById("link");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied link");
        }
    </script>
@endpush
