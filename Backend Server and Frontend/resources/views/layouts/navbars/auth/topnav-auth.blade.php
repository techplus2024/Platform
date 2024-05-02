<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute {{ $classes }}">
    <div class="{{ $container ?? 'container-fluid'}} ps-2 pe-0">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ $text ?? ''}}"
            href="/default">
            Argon Dashboard 2 PRO Laravel
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover mx-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                        id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                        <img src="{{ $arrow ?? '/assets/img/down-arrow-dark.svg'  }}" alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="/assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="dropdown-menu dropdown-menu-animation dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3 shadow-none"
                        aria-labelledby="dropdownMenuPages">
                        <div class="row d-none d-lg-block">
                            <div class="col-12 px-4 py-2">
                                <div class="row">
                                    <div class="col-4 position-relative">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <i class="ni ni-spaceship me-3 text-primary"></i>
                                            Dashboards
                                        </div>
                                        <a href="/landing"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Landing</span>
                                        </a>
                                        <a href="/default"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Default</span>
                                        </a>
                                        <a href="/automotive"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Automotive</span>
                                        </a>
                                        <a href="/smart-home"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Smart Home</span>
                                        </a>
                                        <a href="/vr-default"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Virtual Reality</span>
                                        </a>
                                        <a href="/crm"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">CRM</span>
                                        </a>
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                            <i class="ni ni-circle-08 me-3 text-primary"></i>
                                            Users
                                        </div>
                                        <a href="{{ route('users', ['page' => 'reports']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Reports</span>
                                        </a>
                                        <a href="{{ route('users', ['page' => 'new-user']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">New User</span>
                                        </a>
                                        <hr class="vertical dark">
                                    </div>
                                    <div class="col-4 position-relative">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <i class="ni ni-badge me-3 text-primary"></i>
                                            Profile
                                        </div>
                                        <a href="{{ route('profiles', ['page' => 'overview']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Overview</span>
                                        </a>
                                        <a href="{{ route('profiles', ['page' => 'teams']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Teams</span>
                                        </a>
                                        <a href="{{ route('profiles', ['page' => 'projects']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Projects</span>
                                        </a>
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                            <i class="ni ni-app me-3 text-primary"></i>
                                            Projects
                                        </div>
                                        <a href="{{ route('projects', ['page' => 'general']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">General</span>
                                        </a>
                                        <a href="{{ route('projects', ['page' => 'timeline']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Timeline</span>
                                        </a>
                                        <a href="{{ route('projects', ['page' => 'new-project']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">New Project</span>
                                        </a>
                                        <hr class="vertical dark">
                                    </div>
                                    <div class="col-4">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <i class="ni ni-single-02 me-3 text-primary"></i>
                                            Account
                                        </div>
                                        <a href="{{ route('accounts', ['page' => 'settings']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Settings</span>
                                        </a>
                                        <a href="{{ route('accounts', ['page' => 'billing']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Billing</span>
                                        </a>
                                        <a href="{{ route('accounts', ['page' => 'invoice']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Invoice</span>
                                        </a>
                                        <a href="{{ route('accounts', ['page' => 'security']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Security</span>
                                        </a>
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <i class="ni ni-folder-17 me-3 text-primary"></i>
                                            Extra
                                        </div>
                                        <a href="{{ route('pages', ['page' => 'pricing-page']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Pricing Page</span>
                                        </a>
                                        <a href="{{ route('pages', ['page' => 'rtl']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">RTL Page</span>
                                        </a>
                                        <a href="{{ route('pages', ['page' => 'widgets']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Widgets</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- responsive -->
                        <div class="d-lg-none">
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                <i class="ni ni-spaceship me-3 text-primary"></i>
                                Dashboards
                            </div>
                            <a href="/landing"
                                class="dropdown-item border-radius-md ms-3">
                                Landing
                            </a>
                            <a href="/default"
                                class="dropdown-item border-radius-md ms-3">
                                Default
                            </a>
                            <a href="/automotive"
                                class="dropdown-item border-radius-md ms-3">
                                Automotive
                            </a>
                            <a href="/smart-home"
                                class="dropdown-item border-radius-md ms-3">
                                Smart Home
                            </a>
                            <a href="/vr-default"
                                class="dropdown-item border-radius-md ms-3">
                                Virtual Reality
                            </a>
                            <a href="/crm"
                                class="dropdown-item border-radius-md ms-3">
                                CRM
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                <i class="ni ni-circle-08 me-3 text-primary"></i>
                                Users
                            </div>
                            <a href="{{ route('users', ['page' => 'reports']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Reports
                            </a>
                            <a href="{{ route('users', ['page' => 'new-user']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                New user
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                <i class="ni ni-badge me-3 text-primary"></i>
                                Profile
                            </div>
                            <a href="{{ route('profiles', ['page' => 'overview']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Overview
                            </a>
                            <a href="{{ route('profiles', ['page' => 'teams']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Teams
                            </a>
                            <a href="{{ route('profiles', ['page' => 'projects']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Projects
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <i class="ni ni-app me-3 text-primary"></i>
                                Projects
                            </div>
                            <a href="{{ route('projects', ['page' => 'general']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                General
                            </a>
                            <a href="{{ route('projects', ['page' => 'timeline']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Timeline
                            </a>
                            <a href="{{ route('projects', ['page' => 'new-project']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                New Project
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <i class="ni ni-single-02 me-3 text-primary"></i>
                                Account
                            </div>
                            <a href="{{ route('accounts', ['page' => 'settings']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Settings
                            </a>
                            <a href="{{ route('accounts', ['page' => 'billing']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Billing
                            </a>
                            <a href="{{ route('accounts', ['page' => 'invoice']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Invoice
                            </a>
                            <a href="{{ route('accounts', ['page' => 'security']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Security
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <i class="ni ni-folder-17 me-3 text-primary"></i>
                                Extra
                            </div>
                            <a href="{{ route('pages', ['page' => 'pricing-page']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Pricing Page
                            </a>
                            <a href="{{ route('pages', ['page' => 'rtl']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                RTL Page
                            </a>
                            <a href="{{ route('pages', ['page' => 'widgets']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Widgets
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                        id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                        Authentication
                        <img src="{{ $arrow ?? '/assets/img/down-arrow-dark.svg'  }}" alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="/assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="dropdown-menu dropdown-menu-animation dropdown-lg border-radius-xl p-3 mt-0 mt-lg-3 shadow-none"
                        aria-labelledby="dropdownMenuAccount">
                        <div class="row d-none d-lg-flex">
                            <div class="col-6">
                                <div class="py-6 h-100 w-100 d-flex border-radius-lg position-relative dropdown-image"
                                    style="background-image:url('https://images.unsplash.com/photo-1635944095210-23114a1fb7c0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1335&q=80')">
                                    <div class="mask bg-gradient-primary border-radius-lg"></div>
                                    <div
                                        class="d-flex justify-content-center align-items-center text-center text-white font-weight-bold w-100 z-index-1 flex-column">
                                        <span class="text-lg">Explore our<br>Authentication
                                            pages</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 ps-0 d-flex justify-content-center flex-column">
                                <ul class="list-group">
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownSignIn">
                                            <span>Sign In</span>
                                            <img src="/assets/img/down-arrow.svg"
                                                alt="down-arrow" class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2"
                                            aria-labelledby="dropdownSignIn">
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('signins', ['page' => 'signin-basic']) }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('signins', ['page' => 'signin-cover']) }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('signins', ['page' => 'signin-illustration']) }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownSignUp">
                                            <span>Sign Up</span>
                                            <img src="/assets/img/down-arrow.svg"
                                                alt="down-arrow" class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2"
                                            aria-labelledby="dropdownSignUp">
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('signups', ['page' => 'signup-basic']) }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('signups', ['page' => 'signup-cover']) }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('signups', ['page' => 'signup-illustration']) }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownPasswordReset">
                                            <span>Reset Password</span>
                                            <img src="/assets/img/down-arrow.svg"
                                                alt="down-arrow" class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2"
                                            aria-labelledby="dropdownPasswordReset">
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('resets', ['page' => 'reset-basic']) }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('resets', ['page' => 'reset-cover']) }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('resets', ['page' => 'reset-illustration']) }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownLock">
                                            <span>Lock</span>
                                            <img src="/assets/img/down-arrow.svg"
                                                alt="down-arrow" class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2"
                                            aria-labelledby="dropdownLock">
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('locks', ['page' => 'lock-basic']) }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('locks', ['page' => 'lock-cover']) }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('locks', ['page' => 'lock-illustration']) }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdown2fa">
                                            <span>2-Step Verification</span>
                                            <img src="/assets/img/down-arrow.svg"
                                                alt="down-arrow" class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2"
                                            aria-labelledby="dropdown2fa">
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('verifications', ['page' => 'verification-basic']) }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('verifications', ['page' => 'verification-cover']) }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('verifications', ['page' => 'verification-illustration']) }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownError">
                                            <span>Error</span>
                                            <img src="/assets/img/down-arrow.svg"
                                                alt="down-arrow" class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2"
                                            aria-labelledby="dropdownError">
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('errors', ['page' => '404']) }}">
                                                <span>404</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="{{ route('errors', ['page' => '500']) }}">
                                                <span>500</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row d-lg-none">
                            <div class="col-12 d-flex justify-content-center flex-column">
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                    Sign In
                                </h6>
                                <a href="{{ route('signins', ['page' => 'signin-basic']) }}"
                                    class="dropdown-item border-radius-md">
                                    Basic
                                </a>
                                <a href="{{ route('signins', ['page' => 'signin-cover']) }}"
                                    class="dropdown-item border-radius-md">
                                    Cover
                                </a>
                                <a href="{{ route('signins', ['page' => 'signin-illustration']) }}"
                                    class="dropdown-item border-radius-md">
                                    Illustration
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    Sign Up
                                </h6>
                                <a href="{{ route('signups', ['page' => 'signup-basic']) }}"
                                    class="dropdown-item border-radius-md">
                                    Basic
                                </a>
                                <a href="{{ route('signups', ['page' => 'signup-cover']) }}"
                                    class="dropdown-item border-radius-md">
                                    Cover
                                </a>
                                <a href="{{ route('signups', ['page' => 'signup-illustration']) }}"
                                    class="dropdown-item border-radius-md">
                                    Illustration
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    Reset Password
                                </h6>
                                <a href="{{ route('resets', ['page' => 'reset-basic']) }}"
                                    class="dropdown-item border-radius-md">
                                    Basic
                                </a>
                                <a href="{{ route('resets', ['page' => 'reset-cover']) }}"
                                    class="dropdown-item border-radius-md">
                                    Cover
                                </a>
                                <a href="{{ route('resets', ['page' => 'reset-illustration']) }}"
                                    class="dropdown-item border-radius-md">
                                    Illustation
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    Lock
                                </h6>
                                <a href="{{ route('resets', ['page' => 'lock-basic']) }}"
                                    class="dropdown-item border-radius-md">
                                    Basic
                                </a>
                                <a href="{{ route('locks', ['page' => 'lock-cover']) }}"
                                    class="dropdown-item border-radius-md">
                                    Cover
                                </a>
                                <a href="{{ route('locks', ['page' => 'lock-illustration']) }}"
                                    class="dropdown-item border-radius-md">
                                    Illustration
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    2-Step Verification
                                </h6>
                                <a href="{{ route('verifications', ['page' => 'verification-basic']) }}"
                                    class="dropdown-item border-radius-md">
                                    Basic
                                </a>
                                <a href="{{ route('verifications', ['page' => 'verification-cover']) }}"
                                    class="dropdown-item border-radius-md">
                                    Cover
                                </a>
                                <a href="{{ route('verifications', ['page' => 'verification-illustration']) }}"
                                    class="dropdown-item border-radius-md">
                                    Illustration
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    Error
                                </h6>
                                <a href="{{ route('errors', ['page' => '404']) }}"
                                    class="dropdown-item border-radius-md">
                                    404
                                </a>
                                <a href="{{ route('errors', ['page' => '500']) }}"
                                    class="dropdown-item border-radius-md">
                                    500
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                        id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                        Applications
                        <img src="{{ $arrow ?? '/assets/img/down-arrow-dark.svg'  }}" alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="/assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="dropdown-menu dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3 shadow-none"
                        aria-labelledby="dropdownMenuBlocks">
                        <div class="d-none d-lg-block">
                            <ul class="list-group">
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="{{ route('applications', ['page' => 'kanban']) }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-single-copy-04 text-primary"></i>
                                            </div>
                                            <div
                                                class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Kanban</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="{{ route('applications', ['page' => 'wizard']) }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-laptop text-primary"></i>
                                            </div>
                                            <div
                                                class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Wizard</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="{{ route('applications', ['page' => 'datatables']) }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-badge text-primary"></i>
                                            </div>
                                            <div
                                                class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">DataTables
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="{{ route('applications', ['page' => 'calendar']) }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-notification-70 text-primary"></i>
                                            </div>
                                            <div
                                                class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Calendar
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- responsive -->
                        <div class="row d-lg-none">
                            <div class="col-md-12">
                                <a class="py-2 ps-3 border-radius-md"
                                    href="{{ route('applications', ['page' => 'kanban']) }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-single-copy-04 text-primary"></i>
                                        </div>
                                        <div
                                            class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">Kanban</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="py-2 ps-3 border-radius-md"
                                    href="{{ route('applications', ['page' => 'wizard']) }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-laptop text-primary"></i>
                                        </div>
                                        <div
                                            class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">Wizard</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="py-2 ps-3 border-radius-md"
                                    href="{{ route('applications', ['page' => 'datatables']) }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-badge text-primary"></i>
                                        </div>
                                        <div
                                            class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">DataTables</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="py-2 ps-3 border-radius-md"
                                    href="{{ route('applications', ['page' => 'calendar']) }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-notification-70 text-primary"></i>
                                        </div>
                                        <div
                                            class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">Calendar</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                        id="dropdownMenuEcommerce" data-bs-toggle="dropdown" aria-expanded="false">
                        Ecommerce
                        <img src="{{ $arrow ?? '/assets/img/down-arrow-dark.svg'  }}" alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="/assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="dropdown-menu dropdown-menu-animation dropdown-lg p-3 border-radius-xl mt-0 mt-lg-3 shadow-none"
                        aria-labelledby="dropdownMenuEcommerce">
                        <div class="row d-none d-lg-block">
                            <div class="col-12 px-4 py-2">
                                <div class="row">
                                    <div class="col-6 position-relative">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <i class="ni ni-cart text-primary me-3"></i>
                                            Orders
                                        </div>
                                        <a href="{{ route('orders', ['page' => 'order-list']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Order List</span>
                                        </a>
                                        <a href="{{ route('orders', ['page' => 'details']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Order Details</span>
                                        </a>
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <i class="ni ni-box-2 text-primary me-3"></i>
                                            General
                                        </div>
                                        <a href="{{ route('ecommerce', ['page' => 'overview-ecommerce']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Overview</span>
                                        </a>
                                        <a href="{{ route('ecommerce', ['page' => 'referral']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Referral</span>
                                        </a>
                                        <hr class="vertical dark">
                                    </div>
                                    <div class="col-6 position-relative">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <i class="ni ni-planet text-primary me-3"></i>
                                            Products
                                        </div>
                                        <a href="{{ route('products', ['page' => 'new-product']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">New Product</span>
                                        </a>
                                        <a href="{{ route('products', ['page' => 'edit-product']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Edit Product</span>
                                        </a>
                                        <a href="{{ route('products', ['page' => 'product-page']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Product Page</span>
                                        </a>
                                        <a href="{{ route('products', ['page' => 'product-list']) }}"
                                            class="dropdown-item border-radius-md">
                                            <span class="ps-3">Products List</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- responsive -->
                        <div class="d-lg-none">
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                <i class="ni ni-cart text-primary me-3"></i>
                                Orders
                            </div>
                            <a href="{{ route('orders', ['page' => 'order-list']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Order List
                            </a>
                            <a href="{{ route('orders', ['page' => 'details']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Order Details
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                <i class="ni ni-box-2 text-primary me-3"></i>
                                General
                            </div>
                            <a href="{{ route('ecommerce', ['page' => 'overview-ecommerce']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Overview
                            </a>
                            <a href="{{ route('ecommerce', ['page' => 'referral']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Referral
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                <i class="ni ni-planet text-primary me-3"></i>
                                Products
                            </div>
                            <a href="{{ route('products', ['page' => 'new-product']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                New Product
                            </a>
                            <a href="{{ route('products', ['page' => 'edit-product']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Edit Product
                            </a>
                            <a href="{{ route('products', ['page' => 'product-page']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Product Page
                            </a>
                            <a href="{{ route('products', ['page' => 'product-list']) }}"
                                class="dropdown-item border-radius-md ms-3">
                                Products List
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                        Docs
                        <img src="{{ $arrow ?? '/assets/img/down-arrow-dark.svg'  }}" alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="/assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg shadow-none"
                        aria-labelledby="dropdownMenuDocs">
                        <div class="d-none d-lg-block">
                            <ul class="list-group">
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="../../docs/bootstrap/overview/argon-dashboard/index.html">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-planet text-primary"></i>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Getting Started</h6>
                                                <span class="text-sm">All about overview, quick
                                                    start, license and contents</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="../../docs/bootstrap/colors/argon-dashboard/index.html">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-single-copy-04 text-primary"></i>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Foundation</h6>
                                                <span class="text-sm">See our colors, icons and
                                                    typography</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="../../docs/bootstrap/alerts/argon-dashboard/index.html">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-app text-primary"></i>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Components</h6>
                                                <span class="text-sm">Explore our collection of
                                                    fully designed components</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="../../docs/bootstrap/datepicker/argon-dashboard/index.html">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-chart-bar-32 text-primary"></i>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Plugins</h6>
                                                <span class="text-sm">Check how you can
                                                    integrate
                                                    our plugins</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="../../docs/bootstrap/utilities/argon-dashboard/index.html">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-settings text-primary"></i>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Utility Classes</h6>
                                                <span class="text-sm">For those who want
                                                    flexibility, use our utility classes</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row d-lg-none">
                            <div class="col-md-12 g-0">
                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                    href="../../docs/bootstrap/overview/argon-dashboard/index.html">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-planet text-primary"></i>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Getting Started</h6>
                                            <span class="text-sm">All about overview, quick
                                                start,
                                                license and contents</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                    href="../../docs/bootstrap/learning-lab/bootstrap/colors/argon-dashboard/index.html">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-single-copy-04 text-primary"></i>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Foundation</h6>
                                            <span class="text-sm">See our colors, icons and
                                                typography</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                    href="../../docs/bootstrap/learning-lab/bootstrap/alerts/argon-dashboard/index.html">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-app text-primary"></i>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Components</h6>
                                            <span class="text-sm">Explore our collection of
                                                fully
                                                designed components</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                    href="../../docs/bootstrap/learning-lab/bootstrap/datepicker/argon-dashboard/index.html">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-chart-bar-32 text-primary"></i>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Plugins</h6>
                                            <span class="text-sm">Check how you can integrate
                                                our
                                                plugins</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                    href="../../docs/bootstrap/utilities/argon-dashboard/index.html">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-settings text-primary"></i>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Utility Classes</h6>
                                            <span class="text-sm">All about overview, quick
                                                start,
                                                license and contents</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <a href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel"
                        class="btn btn-sm  btn-primary  mb-0 me-1"
                        onclick="smoothToPricing('pricing-argon')">Buy Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
