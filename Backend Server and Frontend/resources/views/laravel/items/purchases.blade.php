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
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mb-0">My Purchases</h5>
                        @can('manage-items')
                            <a href="{{ route('item-new') }}" class="btn btn-dark btn-sm float-end mb-0">Create new CTI Offer</a>
                        @endcan
                    </div>
                    <div class="px-4" id="alert">
                        @include('components.alert')
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Title
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Type
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Categories
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Purchase Date
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Rating
                                </th>
                                <!--<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Rated CTI
                                </th>-->
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)

                                @if(isset($purchases[$item->id]))
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <a href="{{ route('item-view', $item->id) }}" class="fw-middle" data-bs-toggle="tooltip" data-bs-original-title="View CTI">{{ $item->name }}</a>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            @if($item->status == "TR")
                                                Threat Report
                                            @elseif($item->status == "IoC")
                                                Indicator of Compromise
                                            @else
                                                Indicator of Compromise
                                            @endif
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="my-2 text-xs">

                                                @php
                                                    $list = array(
                                                        "Malware",
                                                        "Phishing",
                                                        "Ransomware",
                                                        "Insider Threat",
                                                        "Social Engineering",
                                                        "Man-in-the-Middle Attack",
                                                        "Zero-Day Exploit",
                                                        "Data Breach",
                                                        "Denial of Service (DoS)",
                                                        "Distributed Denial of Service (DDos)",
                                                        "SQL Injection",
                                                        "Cross-Site Scripting (XSS)",
                                                        "Brute Force",
                                                        "Credential Stuffing",
                                                        "IoT Vulnerability",
                                                        "Eavesdropping",
                                                    );
                                                @endphp

                                                @if(isset($item->options))
                                                    @foreach($item->options as &$option)
                                                        @php
                                                            $option = explode("-", $option)[1]-1;
                                                        @endphp
                                                        <span class="badge badge-secondary">{{$list[$option]}}</span>
                                                    @endforeach
                                                @endif

                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">{{date('m/d/Y', strtotime($purchases[$item->id]))}}</td>
                                        <td class="text-sm font-weight-normal">
                                            @if($ratings[$item->id] === 0)
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 1)
                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 2)
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 3)
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 4)
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 5)
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 6)
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 7)
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 8)
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 9)
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                            @elseif($ratings[$item->id] === 10)
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                            @else
                                                <span data-bs-toggle="tooltip" data-bs-original-title="Rating of Seller">
                                                    <i class="fas fa-star" aria-hidden="true"></i>
                                                    <i class="fas fa-star" aria-hidden="true"></i>
                                                    <i class="fas fa-star" aria-hidden="true"></i>
                                                    <i class="fas fa-star" aria-hidden="true"></i>
                                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                </span>
                                            @endif
                                        </td>
                                        <!--<td class="text-sm font-weight-normal">
                                            <i class="fas fa-check-circle" aria-hidden="true"></i>
                                            <i class="fas fa-times-circle" aria-hidden="true"></i>
                                        </td>-->
                                        <td class="text-sm">
                                            <span class="d-flex">
                                                @can('manage-items', auth()->user())

                                                    @if($item->owner == $user_id)
                                                        <a href="{{ route('item-view', $item->id) }}" class="me-3" data-bs-toggle="tooltip" data-bs-original-title="View CTI">
                                                            <i class="fas fa-eye text-secondary"></i>
                                                        </a>

                                                        <a href="{{ route('item-edit', $item->id) }}" class="me-3" data-bs-toggle="tooltip" data-bs-original-title="Edit CTI">
                                                            <i class="fas fa-edit text-secondary"></i>
                                                        </a>

                                                        <!--<form action="{{ route('item-destroy', $item->id) }}" method="post">
                                                            @csrf
                                                        <button onclick="confirm('Are you sure you want to remove the item?') || event.stopImmediatePropagation()"
                                                                data-bs-toggle="tooltip" data-bs-original-title="Delete item"
                                                                class="border-0 bg-white">
                                                            <i class="fas fa-trash text-secondary"></i>
                                                        </button>
                                                    </form>-->
                                                    @elseif($item->owner != $user_id)
                                                        @if(isset($purchases[$item->id]))
                                                            <a href="{{ route('item-view', $item->id) }}" class="" data-bs-toggle="tooltip" data-bs-original-title="View CTI">
                                                                <i class="fas fa-eye text-secondary"></i>
                                                            </a>
                                                            <a href="{{ route('item-view', $item->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Rate CTI">
                                                                <i class="fas fa-star text-secondary"></i>
                                                            </a>
                                                            <a href="/items/{{$item->download}}" class="" data-bs-toggle="tooltip" data-bs-original-title="Download CTI" download>
                                                                <i class="fas fa-download text-secondary"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('item-view', $item->id) }}" class="" data-bs-toggle="tooltip" data-bs-original-title="Purchase CTI">
                                                                <i class="fas fa-shopping-cart text-secondary"></i>
                                                            </a>
                                                        @endif
                                                    @else

                                                    @endif
                                                @endcan
                                            </span>
                                        </td>
                                    </tr>
                                @endif

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="/assets/js/plugins/datatables.js"></script>
    <script>
        const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
            searchable: true,
            fixedHeight: true,
            columns: [{
                select: [1, 5],
                sortable: false
            }]
        });
    </script>
@endpush
