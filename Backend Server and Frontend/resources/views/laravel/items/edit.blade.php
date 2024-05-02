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
            <div class="col-lg-12 col-12 mx-auto">
                <div class="card card-body">
                    <h6 class="mb-0">Edit existing CTI Offer</h6>
                    <hr class="horizontal dark my-3">
                    <form method="POST" action="{{ route('item-edit.update', $item->id) }}" enctype="multipart/form-data"
                        class="item-form">
                        @csrf
                        <label for="name" class="form-label">Title</label>
                        <div>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $item->name) }}">
                            @error('name')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>

                        <label class="mt-4">Description</label>
                        <div class="">
                            <div data-toggle="quill" id="editor" class="editor-description"
                                data-quill-placeholder="Description">
                                {!! old('description', $item->description) !!}
                            </div>
                            @error('description')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>

                        <label for="price" class="form-label mt-4">Price (in Tokens)</label>
                        <div>
                            <input type="number" class="form-control" id="price" name="price"
                                   value="{{ old('name', $item->price) }}">
                            @error('name')
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
                                           value="IoC" {{ old('status', $item->status) == 'IoC' ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="IoC">Indicator of Compromise</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="status" id="TR" value="TR"
                                        {{ old('status', $item->status) == 'TR' ? ' checked' : '' }}>
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
                                        {{ old('option', $item->options) && in_array('option-1', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-1">Malware</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-2"
                                           value="option-2"
                                        {{ old('option', $item->options) && in_array('option-2', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-2">Phishing</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-3"
                                           value="option-3"
                                        {{ old('option', $item->options) && in_array('option-3', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-3">Ransomware</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-4"
                                           value="option-4"
                                        {{ old('option', $item->options) && in_array('option-4', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-4">Insider Threat</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-5"
                                           value="option-5"
                                        {{ old('option', $item->options) && in_array('option-5', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-5">Social Engineering</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-6"
                                           value="option-6"
                                        {{ old('option', $item->options) && in_array('option-6', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-6">Man-in-the-Middle Attack</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-7"
                                           value="option-7"
                                        {{ old('option', $item->options) && in_array('option-7', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-7">Zero-Day Exploit</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-8"
                                           value="option-8"
                                        {{ old('option', $item->options) && in_array('option-8', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-8">Data Breach</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-9"
                                           value="option-9"
                                        {{ old('option', $item->options) && in_array('option-9', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-9">Denial of Service (DoS)</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-10"
                                           value="option-10"
                                        {{ old('option', $item->options) && in_array('option-10', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-10">Distributed Denial of Service (DDos)</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-11"
                                           value="option-11"
                                        {{ old('option', $item->options) && in_array('option-11', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-11">SQL Injection</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-12"
                                           value="option-12"
                                        {{ old('option', $item->options) && in_array('option-12', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-12">Cross-Site Scripting (XSS)</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-13"
                                           value="option-13"
                                        {{ old('option', $item->options) && in_array('option-13', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-13">Brute Force</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-14"
                                           value="option-14"
                                        {{ old('option', $item->options) && in_array('option-14', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-14">Credential Stuffing</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-15"
                                           value="option-15"
                                        {{ old('option', $item->options) && in_array('option-15', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-15">IoT Vulnerability</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="option[]" id="option-16"
                                           value="option-16"
                                        {{ old('option', $item->options) && in_array('option-16', old('option', $item->options)) ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="option-16">Eavesdropping</label>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-5">
                            <!--<a href="{{ route('item-destroy', $item->id) }}">
                                @csrf
                                <button onclick="confirm('Are you sure you want to delete this CTI?') || event.stopImmediatePropagation()"
                                        data-bs-toggle="tooltip" data-bs-original-title="Delete CTI"
                                        class="btn btn-danger m-0"
                                        style="margin-left: 0 !important;position: absolute;left: 15px;">
                                    Delete
                                </button>
                            </a>-->

                            <a href="{{ route('item-management') }}" class="btn btn-light m-0">Back</a>
                            <button type="submit" class="btn bg-gradient-primary m-0 ms-2">Edit</button>
                        </div>
                    </form>
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
            $(".item-form").on("submit", function(e) {
                let quillEditor = new Quill('#editor');
                let value = $('#editor > div.ql-editor').html();
                if (quillEditor.getLength() > 1) {
                    $(this).append("<textarea name='description' style='display:none'>" + value +
                        "</textarea>");
                }
            });
        });
    </script>
@endpush
