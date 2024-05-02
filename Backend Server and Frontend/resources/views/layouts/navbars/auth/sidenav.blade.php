<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-2
    {{ $bg ?? ''}} {{ $box ?? ''}}"
    id="sidenav-main">
    <div class="sidenav-header" style="height:auto;">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
            href-not="{{ route('dashboards', ['page' => 'default']) }}">
            <!--<img src="{{ $logo ?? '/assets/img/logo-ct-dark.png'}}" class="navbar-brand-img h-100" alt="main_logo">-->
            <span class="ms-1 font-weight-bold" style="font-size:1.125rem">CTI Sharing Platform</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Platform" class="nav-link {{ (Route::currentRouteName() == 'item-management' || Route::currentRouteName() == 'item-view' || Route::currentRouteName() == 'item-new' || Route::currentRouteName() == 'item-new.price' || Route::currentRouteName() == 'item-edit' || Route::currentRouteName() == 'item-offers' || Route::currentRouteName() == 'item-purchases' || Route::currentRouteName() == 'best-sellers')  ? 'active' : '' }}"
                   aria-controls="Platform" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Platform</span>
                </a>
                <div class="collapse {{ (Route::currentRouteName() == 'item-management' || Route::currentRouteName() == 'item-view' || Route::currentRouteName() == 'item-new' || Route::currentRouteName() == 'item-new.price' || Route::currentRouteName() == 'item-edit' || Route::currentRouteName() == 'item-offers' || Route::currentRouteName() == 'item-purchases' || Route::currentRouteName() == 'best-sellers')  ? 'show' : '' }}" id="Platform">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'item-management' ? 'active' : '' }}" href="{{ route('item-management') }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> Marketplace </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'item-offers' ? 'active' : '' }}" href="{{ route('item-offers') }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> My Offers </span>
                            </a>
                        </li>
                        <!--<li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'item-management-1' ? 'active' : '' }}" href="{{ route('item-management') }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> My Offers </span>
                            </a>
                        </li>-->
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'item-purchases' ? 'active' : '' }}" href="{{ route('item-purchases') }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> My Purchases </span>
                            </a>
                        </li>
                        <!--<li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'best-sellers' ? 'active' : '' }}" href="{{ route('best-sellers') }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> Best Sellers </span>
                            </a>
                        </li>-->
                    </ul>
                </div>
            </li>

            <!--<li class="nav-item">
                <a href="{{ route('item-management') }}" class="nav-link {{ Route::currentRouteName() == 'item-management' ? 'active' : '' }}">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Marketplace</span>
                </a>
            </li>-->

            <!--<li class="nav-item">
                <a href="{{ route('item-seal') }}" class="nav-link {{ Route::currentRouteName() == 'item-seal' ? 'active' : '' }}">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-paper-diploma text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quality Label</span>
                </a>
            </li>-->

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Label" class="nav-link {{ (Route::currentRouteName() == 'item-seal' || (Route::currentRouteName() == 'verify' && isset($label_id) && $label_id == 'e13581k9'))  ? 'active' : '' }}"
                   aria-controls="Label" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-paper-diploma text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quality Label</span>
                </a>
                <div class="collapse {{ (Route::currentRouteName() == 'item-seal' || (Route::currentRouteName() == 'verify' && isset($label_id) && $label_id == 'e13581k9'))  ? 'show' : '' }}" id="Label">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link {{ (Route::currentRouteName() == 'verify' && isset($label_id) && $label_id == 'e13581k9')  ? 'active' : '' }}" href="/verify/e13581k9">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> Validation Page </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'item-seal' ? 'active' : '' }}" href="{{ route('item-seal') }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> Label Management </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="{{ route('item-balance') }}" class="nav-link {{ Route::currentRouteName() == 'item-balance' ? 'active' : '' }}">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-money-coins text-danger text-sm opacity-10"></i>
                    </div>
                    <!--<div class="icon icon-shape icon-sm text-center d-flex align-items-end justify-content-center">
                        <i class="fab fa-laravel" style="color: #f4645f; font-size: large; font-weight: 500 "></i>
                    </div>-->
                    <span class="nav-link-text ms-1">Token Balance</span>
                </a>
            </li>

            <!--<a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link {{ Route::currentRouteName() == 'dashboards' ? 'active' : '' }}"-->

            <!--<li class="nav-item">
                <a data-bs-toggle="collapse" href="#laravelExamples" class="nav-link active"
                    aria-controls="laravelExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-end justify-content-center">
                        <i class="fab fa-laravel" style="color: #f4645f; font-size: large; font-weight: 500 "></i>
                    </div>
                    <span class="nav-link-text ms-1">Laravel Examples </span>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}" href="{{ route('user-profile') }}">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal"> User Profile </span>
                            </a>
                        </li>
                        @can('manage-users', auth()->user())
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="{{ route('user-management') }}">
                                    <span class="sidenav-mini-icon"> U </span>
                                    <span class="sidenav-normal"> User Management </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'role-management' ? 'active' : '' }}" href="{{ route('role-management') }}">
                                    <span class="sidenav-mini-icon"> R </span>
                                    <span class="sidenav-normal"> Role Management </span>
                                </a>
                            </li>
                        @endcan
                        @can('manage-items', auth()->user())
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'category-management' ? 'active' : '' }}" href="{{ route('category-management') }}">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Category Management </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'tag-management' ? 'active' : '' }}" href="{{ route('tag-management') }}">
                                    <span class="sidenav-mini-icon"> T </span>
                                    <span class="sidenav-normal"> Tag Management </span>
                                </a>
                            </li>
                        @endcan
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'item-management' ? 'active' : '' }}" href="{{ route('item-management') }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> Items Management </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>-->

        </ul>
    </div>
    <div class="sidenav-footer mx-3 my-3" style="position:absolute;bottom:0;">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-60 mx-auto" src="/assets/img/illustrations/icon-documentation-warning.svg" alt="sidebar_illustration">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <h6 class="mb-0">Want a fresh start?</h6>
                    <p class="text-xs font-weight-bold mb-0">Reset all data to the default demo data and explore the prototype.</p>
                </div>
            </div>
        </div>

        <form action="{{ route('reset') }}" method="get">
            @csrf
            <button onclick="confirm('Are you sure you want to reset the data to the default demo data?') || event.stopImmediatePropagation()"
                    data-bs-toggle="tooltip" data-bs-original-title="Reset data"
                    class="btn btn-dark btn-sm w-100" style="margin-bottom: 0 !important;">
                Reset Data
            </button>
            <a href="/items/demo.json" data-bs-toggle="tooltip" data-bs-original-title="Reset data"
                    class="btn btn-primary btn-sm w-100 mt-2" style="margin-bottom: 0 !important;" download>
                Download Demo CTI
            </a>
        </form>
    </div>
</aside>
