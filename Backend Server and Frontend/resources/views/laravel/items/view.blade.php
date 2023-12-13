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
                <div class="card">
                    <div class="card-body">
                        <!--<h5 class="mb-4">CTI Details</h5>-->
                        <div class="px-4" id="alert">
                            @include('components.alert')
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mx-auto">

                                <h3 class="mt-lg-0 mt-4">{{$item->name}} <span style="font-size: 1.875rem;font-weight:normal;margin-left: 5px;">@if($item->status == "TR")
                                            <!--(Threat Report)-->
                                        @elseif($item->status == "IoC")
                                            (Indicator of Compromise)
                                        @else
                                            (Indicator of Compromise)
                                        @endif</span> <span style="display:none;font-size: 1rem;font-weight:normal;margin-left: 5px;">(ID #{{$item->id}})</span></h3>
                                <!--<span class="badge badge-success">Over 1.000 purchases</span>-->

                                <div class="rating">
                                    @if($review_average === 0)
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    @elseif($review_average === 1)
                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    @elseif($review_average === 2)
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    @elseif($review_average === 3)
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    @elseif($review_average === 4)
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    @elseif($review_average === 5)
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    @elseif($review_average === 6)
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    @elseif($review_average === 7)
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    @elseif($review_average === 8)
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    @elseif($review_average === 9)
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                    @elseif($review_average === 10)
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
                                </div>
                                <br>

                                @if($purchased)
                                    <h6 class="mb-0 mt-4">Purchase Date</h6>
                                    <p>{{date('m/d/Y', strtotime($purchase->created_at))}}</p>
                                @else
                                    <h6 class="mb-0 mt-3">Price</h6>
                                    <h5>{{$item->price}} @if($item->price===1) Token @else <i class="fa-light fa-coin" style="margin-left:1px;" data-bs-toggle="tooltip" data-bs-original-title="Tokens"></i> @endif</h5>
                                @endif

                                <!--<h6 class="mb-0 mt-3">Categories</h6>-->
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

                                <p>
                                    @foreach($item->options as &$option)
                                        @php
                                            $option = explode("-", $option)[1]-1;
                                        @endphp
                                        <span class="badge badge-secondary">{{$list[$option]}}</span>
                                    @endforeach
                                </p>

                                <h6 class="mb-0 mt-4">Description</h6>
                                <span>{!! $item->description !!}</span>

                                <div class="row mt-4">

                                    @if($owner)
                                        <div class="col-lg-5">
                                            <a href="{{ route('item-edit', $item->id) }}" class="btn btn-primary mb-0 mt-lg-auto w-100" data-bs-toggle="tooltip" data-bs-original-title="Edit CTI">
                                                <i class="fas fa-user-edit text-secondary text-white mr-4" style="margin-right:4px;"></i> Edit CTI
                                            </a>
                                        </div>

                                        <div class="col-lg-5">
                                            <form action="{{ route('item-destroy', $item->id) }}" method="post">
                                                @csrf
                                                <button onclick="confirm('Are you sure you want to delete this CTI?') || event.stopImmediatePropagation()"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete CTI"
                                                        class="btn btn-dark mb-0 mt-lg-auto w-100">
                                                    <i class="fas fa-trash text-secondary text-white mr-4" style="margin-right:4px;"></i> Delete CTI
                                                </button>
                                            </form>
                                        </div>

                                    @elseif($purchased)
                                        <div class="col-lg-5">
                                            <a href="/items/{{$item->download}}" class="btn btn-primary mb-0 mt-lg-auto w-100" download><i class="fas fa-download text-secondary text-white mr-4" style="margin-right:4px;"></i> Download CTI</a>
                                        </div>

                                        <div class="col-lg-5">
                                        </div>

                                        <h5 class="mt-4">Rating</h5>
                                        <div class="col-lg-5 mt-2">

                                            <form method="POST" action="{{ route('item-rate', $item->id) }}" enctype="multipart/form-data" class="item-form">
                                                @csrf


                                                <div class="row">
                                                    <div class="col-6">
                                                        <select class="form-control" name="rating" id="rating">
                                                            <option value="" disabled @if($own_review!==null) @if($own_review->review==="-") selected @endif @else selected @endif>Choose Rating</option>
                                                            <!--☆ ☆ ☆ ☆ ☆ ★-->
                                                            <!--<option value="0">0 Stars</option>
                                                            <option value="1">0.5 Stars</option>
                                                            <option value="2">1 Star</option>
                                                            <option value="3">1.5 Stars</option>
                                                            <option value="4">2 Stars</option>
                                                            <option value="5">2.5 Stars</option>
                                                            <option value="6">3 Stars</option>
                                                            <option value="7">3.5 Stars</option>
                                                            <option value="8">4 Stars</option>
                                                            <option value="9">4.5 Stars</option>
                                                            <option value="10">5 Stars</option>-->
                                                            <!--<option value="0" @if($own_review!==null) @if($own_review->review===0) selected @endif @endif>☆ ☆ ☆ ☆ ☆</option>-->
                                                            <option value="2" @if($own_review!==null) @if($own_review->review===2) selected @endif @endif>★ ☆ ☆ ☆ ☆</option>
                                                            <option value="4" @if($own_review!==null) @if($own_review->review===4) selected @endif @endif>★ ★ ☆ ☆ ☆</option>
                                                            <option value="6" @if($own_review!==null) @if($own_review->review===6) selected @endif @endif>★ ★ ★ ☆ ☆</option>
                                                            <option value="8" @if($own_review!==null) @if($own_review->review===8) selected @endif @endif>★ ★ ★ ★ ☆</option>
                                                            <option value="10" @if($own_review!==null) @if($own_review->review===10) selected @endif @endif>★ ★ ★ ★ ★</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <input type="text" class="form-control" name="rating-description" id="rating-description" value="@if($own_review!==null) {{$own_review->description}} @endif" placeholder="Rating Description...">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <!--<a class="btn btn-dark mb-0 mt-lg-auto w-100" type="button" name="button" id="rating-submit" href="{{ route('item-rate', ['id' => $item->id, 'rating' => '-'])}}">Submit Rating</a>-->
                                                        <button class="btn btn-dark mb-0 mt-lg-auto w-100" type="submit" name="button">Submit Rating</button>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    @else
                                        <div class="col-lg-5">
                                            <a class="btn btn-primary mb-0 mt-lg-auto w-100" href="{{ route('item-buy', $item->id) }}"><i class="fas fa-shopping-cart text-secondary text-white mr-4" style="margin-right:4px;"></i> Purchase CTI</a>
                                            @error('buy')
                                            <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>

                        @if($review_count>0)
                            <div class="row mt-5">
                                <div class="col-12">
                                    <h5 class="">Reviews</h5>
                                    <div class="table table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Review
                                                </th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                                                    Description
                                                </th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Date
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach ($reviews as $review)
                                                <tr>
                                                    <td>
                                                        <div class="rating">
                                                            @if($review->review === 0)
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @elseif($review->review === 1)
                                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @elseif($review->review === 2)
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @elseif($review->review === 3)
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @elseif($review->review === 4)
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @elseif($review->review === 5)
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @elseif($review->review === 6)
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @elseif($review->review === 7)
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @elseif($review->review === 8)
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @elseif($review->review === 9)
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                            @elseif($review->review === 10)
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
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <span class="mb-0 text-sm">{{$review->description}}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm">{{date('m/d/Y', strtotime($review->updated_at))}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
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

        $('#rating-submit').click(function(){
            let rating = $('#rating').children("option:selected").val();

            /*if(rating===0 || rating===2 || rating===4 || rating===6 || rating===8 || rating===10) {
                window.location.href = '...';
            }*/

            /*$.post('/item-management/rate/{{$item->id}}/'+rating, { description: $('rating-description').val(), time: "2pm" })
                .done(function( data ) {
                    alert( "Data Loaded: " + data );
                });*/

        });

        /*$('#rating').on('change', function() {
            let link = $('#rating-submit').attr('href');
            $('#rating-submit').attr('href', link.slice(0, -1) + this.value);
        });*/
    </script>
@endpush
