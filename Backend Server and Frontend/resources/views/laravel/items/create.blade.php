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
                <div class="multisteps-form">

                    <div class="card shadow-lg mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-12 col-lg-8 mx-auto mt-4 mb-2">
                                    <div class="multisteps-form__progress">
                                        <!--<button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                                            <span>1. CTI Upload</span>
                                        </button>-->
                                        <button class="multisteps-form__progress-btn no-click @if(isset($values)) js-active @else js-active @endif" type="button" title="Information">
                                            1. Information
                                        </button>
                                        <button class="multisteps-form__progress-btn no-click @if(isset($values)) js-active @else  @endif" type="button" title="Pricing">
                                            2. Pricing
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(isset($values))
                        <!--with values-->
                        <div class="row">
                            <div class="col-12 m-auto">
                                <form class="multisteps-form__form mb-8" method="POST" action="{{ route('item-new.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!--single form panel-->
                                    <!--<div class="card multisteps-form__panel p-4 border-radius-xl bg-white js-active"
                                         data-animation="FadeIn">
                                        <h5 class="font-weight-bolder">CTI Upload</h5>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <p>Upload CTI in the STIX Format</p>
                                                    <div action="/file-upload" class="form-control dropzone"
                                                         id="productImg"></div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                        title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>-->
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-4 border-radius-xl bg-white"
                                         data-animation="FadeIn" style="display:none;">
                                        <h5 class="font-weight-bolder">Information</h5>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <label for="name" class="form-label">Title</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="name" name="name" value="@if(isset($values['name'])){{$values['name']}}@endif">
                                                    </div>

                                                    <label class="mt-4 form-label" for="upload">Upload CTI in STIX Format</label>
                                                    <input type="text" name="upload" value="@if(isset($values['upload'])){{$values['upload']}}@endif" class="form-control">

                                                    <label class="mt-4">Description</label>
                                                    <div class="">
                                                        <div data-toggle="quill" id="editor" class="editor-description"
                                                             data-quill-placeholder="Description"
                                                             style="border-bottom-right-radius: 0.5rem; border-bottom-left-radius: 0.5rem; border-top: 0;">
                                                            @if(isset($values['description'])){{$values['description']}}@endif
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4 d-flex flex-column">
                                                        <label class="form-label">Type</label>
                                                        <div class=" d-flex flex-column">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" name="status" id="IoC"
                                                                       value="IoC" @if(isset($values['status'])){{ $values['status'] == 'IoC' ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="IoC">Indicator of Compromise</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" name="status" id="TR" value="TR"
                                                                @if(isset($values['status'])){{ $values['status'] == 'TR' ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="TR">Threat Report</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label class="mt-4 form-label">Categories</label>
                                                        @error('option')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                        @enderror
                                                        <div class=" d-flex flex-column">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-1"
                                                                       value="option-1"
                                                                @if(isset($values['options'])){{ in_array('option-1', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-1">Malware</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-2"
                                                                       value="option-2"
                                                                @if(isset($values['options'])){{ in_array('option-2', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-2">Phishing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-3"
                                                                       value="option-3"
                                                                @if(isset($values['options'])){{ in_array('option-3', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-3">Ransomware</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-4"
                                                                       value="option-4"
                                                                @if(isset($values['options'])){{ in_array('option-4', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-4">Insider Threat</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-5"
                                                                       value="option-5"
                                                                @if(isset($values['options'])){{ in_array('option-5', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-5">Social Engineering</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-6"
                                                                       value="option-6"
                                                                @if(isset($values['options'])){{ in_array('option-6', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-6">Man-in-the-Middle Attack</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-7"
                                                                       value="option-7"
                                                                @if(isset($values['options'])){{ in_array('option-7', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-7">Zero-Day Exploit</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-8"
                                                                       value="option-8"
                                                                @if(isset($values['options'])){{ in_array('option-8', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-8">Data Breach</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-9"
                                                                       value="option-9"
                                                                @if(isset($values['options'])){{ in_array('option-9', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-9">Denial of Service (DoS)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-10"
                                                                       value="option-10"
                                                                @if(isset($values['options'])){{ in_array('option-10', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-10">Distributed Denial of Service (DDos)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-11"
                                                                       value="option-11"
                                                                @if(isset($values['options'])){{ in_array('option-11', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-11">SQL Injection</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-12"
                                                                       value="option-12"
                                                                @if(isset($values['options'])){{ in_array('option-12', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-12">Cross-Site Scripting (XSS)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-13"
                                                                       value="option-13"
                                                                @if(isset($values['options'])){{ in_array('option-13', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-13">Brute Force</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-14"
                                                                       value="option-14"
                                                                @if(isset($values['options'])){{ in_array('option-14', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-14">Credential Stuffing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-15"
                                                                       value="option-15"
                                                                @if(isset($values['options'])){{ in_array('option-15', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-15">IoT Vulnerability</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-16"
                                                                       value="option-16"
                                                                @if(isset($values['options'])){{ in_array('option-16', $values['options']) ? ' checked' : '' }}@endif>
                                                                <label class="custom-control-label" for="option-16">Eavesdropping</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-primary ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-4 border-radius-xl bg-white js-active"
                                         data-animation="FadeIn">
                                        <h5 class="font-weight-bolder">Pricing</h5>
                                        <div class="px-4" id="alert">
                                            @if(isset($error))
                                                <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between align-items-sm-center " role="alert">
                                                    <p class="text-white mb-0">{{$error}}</p>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-md-3 col-12">
                                                    <label for="price" class="form-label mt-4">Price (in Tokens)</label>
                                                    <div>
                                                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
                                                        @error('price')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                @if(isset($average) && isset($median))
                                                    <div class="col-md-6 col-12">
                                                        <label for="price" class="form-label mt-4">Price Suggestion (Summary)</label>
                                                        <ul>
                                                            <li>Average: {{$average}} <i class="fa-light fa-coin" style="margin-left:2px;" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i></li>
                                                            <li>Median: {{$median}} <i class="fa-light fa-coin" style="margin-left:2px;" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i></li>
                                                        </ul>
                                                        <!--<div>
                                                            <div id="container">
                                                                <canvas id="canvas"></canvas>
                                                            </div>
                                                        </div>-->
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row mt-6">
                                                <div class="col-12">
                                                    <h5 class="font-weight-bolder">In-Depth Price Suggestion</h5>
                                                    <p class="text-sm mb-2">In-depth price suggestion based on similar CTI purchases. Each column displays the delta to the current CTI.</p>

                                                    <div class="table-responsive">
                                                        <table class="table table-flush" id="datatable-basic">
                                                            <thead class="thead-light">
                                                            <tr>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Title
                                                                </th>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                                    <!--<i class="fas fa-triangle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-original-title="Delta of Report Size" style="margin-right:2px;"></i>-->
                                                                    Delta Report Size
                                                                </th>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                                    <!--<i class="fas fa-triangle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-original-title="Delta of STIX Objects" style="margin-right:2px;"></i>-->
                                                                    Delta Content (STIX Objects)
                                                                </th>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                                    <!--<i class="fas fa-triangle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-original-title="Delta of Adversary Tactics" style="margin-right:2px;"></i>-->
                                                                    Delta Attack Phase
                                                                </th>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                                    <!--<i class="fas fa-triangle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-original-title="Delta of Report Size" style="margin-right:2px;"></i>-->
                                                                    Total Delta
                                                                </th>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                                    Price
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach ($prices as $price)
                                                                <tr>
                                                                    <td class="text-sm font-weight-normal">
                                                                        <a href="{{ route('item-view', $price['id']) }}" target="_blank" class="fw-middle" data-bs-toggle="tooltip" data-bs-original-title="View CTI">{{$price['title']}}</a>
                                                                    </td>
                                                                    <td class="text-sm font-weight-normal text-center">
                                                                        {{$price['report_size']}}
                                                                    </td>
                                                                    <td class="text-sm font-weight-normal text-center">
                                                                        {{$price['stix_objects']}}
                                                                    </td>
                                                                    <td class="text-sm font-weight-normal text-center">
                                                                        {{$price['adversary_tactics']}}
                                                                    </td>
                                                                    <td class="text-sm font-weight-normal text-center">
                                                                        {{$price['total_delta']}}
                                                                    </td>
                                                                    <td class="text-sm font-weight-normal text-center">
                                                                        {{$price['price']}} <i class="fa-light fa-coin" style="margin-left:2px;" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>







                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="button-row d-flex mt-4 col-12">
                                                    <a href="{{ route('item-new') }}" class="btn btn-light mb-0 js-btn-prev" type="button" title="Back">Back</a>
                                                    <button class="btn bg-gradient-primary ms-auto mb-0" type="submit" title="Create">Create</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @else
                        <!--without values-->
                        <!--form panels-->
                        <div class="row">
                            <div class="col-12 m-auto">
                                <form class="multisteps-form__form mb-8" method="POST" action="{{ route('item-new.price') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!--single form panel-->
                                    <!--<div class="card multisteps-form__panel p-4 border-radius-xl bg-white js-active"
                                         data-animation="FadeIn">
                                        <h5 class="font-weight-bolder">CTI Upload</h5>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <p>Upload CTI in the STIX Format</p>
                                                    <div action="/file-upload" class="form-control dropzone"
                                                         id="productImg"></div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                        title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>-->
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-4 border-radius-xl bg-white js-active"
                                         data-animation="FadeIn">
                                        <h5 class="font-weight-bolder">Information</h5>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <label for="name" class="form-label">Title</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                                        @error('name')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                        @enderror
                                                    </div>

                                                    <label class="mt-4 form-label" for="upload">Upload CTI in STIX Format</label>
                                                    <input type="file" name="upload" accept="application/JSON,application/PDF" id="upload" class="form-control">
                                                    @error('upload')
                                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror

                                                    <label class="mt-4">Description</label>
                                                    <div class="">
                                                        <div data-toggle="quill" id="editor" class="editor-description"
                                                             data-quill-placeholder="Description"
                                                             style="border-bottom-right-radius: 0.5rem; border-bottom-left-radius: 0.5rem; border-top: 0;">
                                                            {!! old('description') !!}
                                                        </div>
                                                        @error('description')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                        @enderror
                                                    </div>

                                                    <div class="row mt-4 d-flex flex-column">
                                                        <label class="form-label">Type</label>
                                                        @error('status')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                        @enderror
                                                        <div class=" d-flex flex-column">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" name="status" id="IoC"
                                                                       value="IoC" {{ old('status') == 'IoC' ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="IoC">Indicator of Compromise</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" name="status" id="TR" value="TR"
                                                                    {{ old('status') == 'TR' ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="TR">Threat Report</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label class="mt-4 form-label">Categories</label>
                                                        @error('option')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                        @enderror
                                                        <div class=" d-flex flex-column">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-1"
                                                                       value="option-1"
                                                                    {{ old('option') && in_array('option-1', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-1">Malware</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-2"
                                                                       value="option-2"
                                                                    {{ old('option') && in_array('option-2', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-2">Phishing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-3"
                                                                       value="option-3"
                                                                    {{ old('option') && in_array('option-3', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-3">Ransomware</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-4"
                                                                       value="option-4"
                                                                    {{ old('option') && in_array('option-4', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-4">Insider Threat</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-5"
                                                                       value="option-5"
                                                                    {{ old('option') && in_array('option-5', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-5">Social Engineering</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-6"
                                                                       value="option-6"
                                                                    {{ old('option') && in_array('option-6', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-6">Man-in-the-Middle Attack</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-7"
                                                                       value="option-7"
                                                                    {{ old('option') && in_array('option-7', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-7">Zero-Day Exploit</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-8"
                                                                       value="option-8"
                                                                    {{ old('option') && in_array('option-8', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-8">Data Breach</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-9"
                                                                       value="option-9"
                                                                    {{ old('option') && in_array('option-9', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-9">Denial of Service (DoS)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-10"
                                                                       value="option-10"
                                                                    {{ old('option') && in_array('option-10', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-10">Distributed Denial of Service (DDos)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-11"
                                                                       value="option-11"
                                                                    {{ old('option') && in_array('option-11', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-11">SQL Injection</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-12"
                                                                       value="option-12"
                                                                    {{ old('option') && in_array('option-12', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-12">Cross-Site Scripting (XSS)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-13"
                                                                       value="option-13"
                                                                    {{ old('option') && in_array('option-13', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-13">Brute Force</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-14"
                                                                       value="option-14"
                                                                    {{ old('option') && in_array('option-14', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-14">Credential Stuffing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-15"
                                                                       value="option-15"
                                                                    {{ old('option') && in_array('option-15', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-15">IoT Vulnerability</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="option[]" id="option-16"
                                                                       value="option-16"
                                                                    {{ old('option') && in_array('option-16', old('option')) ? ' checked' : '' }}>
                                                                <label class="custom-control-label" for="option-16">Eavesdropping</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-primary ms-auto mb-0 js-btn-next" type="submit" title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-lg-12 col-12 mx-auto">
                <div class="card card-body mt-0">
                    <h6 class="mb-0">Create new CTI Offer</h6>
                    <hr class="horizontal dark my-3">
                    <form method="POST" action="{{ route('item-new.store') }}" enctype="multipart/form-data"
                        class="item-form">
                        @csrf
        <label for="name" class="form-label">Title</label>
        <div>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
        </div>

        <label class="mt-4">Description</label>
        <div class="">
            <div data-toggle="quill" id="editor" class="editor-description"
                data-quill-placeholder="Description">
{!! old('description') !!}
        </div>
@error('description')
        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
        </div>

        <div class="row mt-4 d-flex flex-column">
            <label class="form-label">Type</label>
@error('status')
        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
        <div class=" d-flex flex-column">
            <div class="form-check">
                <input type="radio" class="form-check-input" name="status" id="IoC"
                    value="IoC" {{ old('status') == 'IoC' ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="IoC">Indicator of Compromise</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="status" id="TR" value="TR"
                                        {{ old('status') == 'TR' ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="TR">Threat Report</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="mt-4 form-label">Categories</label>
                            @error('options')
        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
        <div class=" d-flex flex-column">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="option[]" id="option-1"
                                           value="option-1"
                                        {{ old('option') && in_array('option-1', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-1">Malware</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-2"
                                           value="option-2"
                                        {{ old('option') && in_array('option-2', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-2">Phishing</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-3"
                                           value="option-3"
                                        {{ old('option') && in_array('option-3', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-3">Ransomware</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-4"
                                           value="option-4"
                                        {{ old('option') && in_array('option-4', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-4">Insider Threat</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-5"
                                           value="option-5"
                                        {{ old('option') && in_array('option-5', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-5">Social Engineering</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-6"
                                           value="option-6"
                                        {{ old('option') && in_array('option-6', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-6">Man-in-the-Middle Attack</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-7"
                                           value="option-7"
                                        {{ old('option') && in_array('option-7', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-7">Zero-Day Exploit</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-8"
                                           value="option-8"
                                        {{ old('option') && in_array('option-8', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-8">Data Breach</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-9"
                                           value="option-9"
                                        {{ old('option') && in_array('option-9', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-9">Denial of Service (DoS)</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-10"
                                           value="option-10"
                                        {{ old('option') && in_array('option-10', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-10">Distributed Denial of Service (DDos)</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-11"
                                           value="option-11"
                                        {{ old('option') && in_array('option-11', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-11">SQL Injection</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-12"
                                           value="option-12"
                                        {{ old('option') && in_array('option-12', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-12">Cross-Site Scripting (XSS)</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-13"
                                           value="option-13"
                                        {{ old('option') && in_array('option-13', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-13">Brute Force</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-14"
                                           value="option-14"
                                        {{ old('option') && in_array('option-14', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-14">Credential Stuffing</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-15"
                                           value="option-15"
                                        {{ old('option') && in_array('option-15', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-15">IoT Vulnerability</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-16"
                                           value="option-16"
                                        {{ old('option') && in_array('option-16', old('option')) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-16">Eavesdropping</label>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{ route('item-management') }}" class="btn btn-light m-0">Back</a>
                            <button type="submit" class="btn bg-gradient-primary m-0 ms-2">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
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
    <script src="/assets/js/plugins/dropzone.min.js"></script>
    <script src="/assets/js/plugins/multistep-form.js"></script>
    <script>
        if (document.getElementById('editor')) {
            var quill = new Quill('#editor', {
                theme: 'snow' // Specify theme in configuration
            });
        }

        if (document.getElementById('choices-category')) {
            var element2 = document.getElementById('choices-category');
            const example2 = new Choices(element2);
        }

        if (document.getElementById('choices-multiple-remove-button')) {
            var element1 = document.getElementById('choices-multiple-remove-button');
            const example1 = new Choices(element1, {
                removeItemButton: true
            });
        }

        if (document.querySelector('.datetimepicker')) {
            flatpickr('.datetimepicker', {
                allowInput: true
            }); // flatpickr
        }
    </script>
    <script>
        $(document).ready(function() {
            $(".multisteps-form__form").on("submit", function(e) {
                let quillEditor = new Quill('#editor');
                let value = $('#editor > div.ql-editor').html();
                if (quillEditor.getLength() > 1) {
                    $(this).append("<textarea name='description' style='display:none'>" + value +
                        "</textarea>");
                }
            });
        });

        $('.js-btn-prev').click(function(){
            scrollToTop();
        });

        $('.js-btn-next').click(function(){
            scrollToTop();
        });

        function scrollToTop() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
    </script>


    <!--<script src="https://unpkg.com/d3@5.5.0/dist/d3.min.js" />-->
    <!--<script src="https://unpkg.com/d3-boxplot@1.0.0/dist/d3-boxplot.min.js" />
    <script>
        //let d3 = require(['d3-boxplot']);
        let data = [1, 2, 3, 4, 5];
        let stats = d3.boxplotStats(data);
        let x = d3.scaleLinear()
            .domain(d3.extent(data))
            .range([0, 300]);
        let plot = d3.boxplot().scale(x);
        d3.select('svg').datum(stats).call(plot);
    </script>-->

    <!--<script type="module">
        import * as d3 from 'https://unpkg.com/d3?module';
        import * as d3bp from 'https://unpkg.com/d3-boxplot?module';

        let margin = {top: 10, right: 30, bottom: 30, left: 40},
            width = 400 - margin.left - margin.right,
            height = 400 - margin.top - margin.bottom;

        let svg = d3.select("#svg_container")
            .append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
            .append("g")
            .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

        let data = [1, 2, 3, 4, 5];
        let stats = d3bp.boxplotStats(data);
        let x = d3.scaleLinear()
            .domain(d3.extent(data))
            .range([0, 300]);
        let plot = d3bp.boxplot().scale(x);
        d3.select("svg").datum(stats).call(plot);
    </script>-->

    <script src="https://unpkg.com/chart.js@4"></script>
    <script src="https://unpkg.com/@sgratzl/chartjs-chart-boxplot@4"></script>
    <script>

        /*const boxplotData = {
            // define label tree
            labels: ['January'],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: 'rgba(255,0,0,0.5)',
                borderColor: 'red',
                borderWidth: 1,
                outlierColor: '#999999',
                padding: 10,
                itemRadius: 0,
                data: [
                    @if(isset($price_plot)){{json_encode($price_plot)}}@endif
                ],
                legend: {
                    position: 'bottom',
                },
            }]
        };
        window.onload = () => {
            const ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'boxplot',
                data: boxplotData,
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    legend: {
                        display: false,
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: 'Chart.js Box Plot Chart'
                    },
                }
            });

        };*/

    </script>
@endpush
