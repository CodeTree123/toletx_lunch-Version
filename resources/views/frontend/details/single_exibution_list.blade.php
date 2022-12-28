@extends('frontend.master.post_master')

@section('content')

<div class="main-wrapperX container">
    @if($list->post_type == 'Want')
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="slider-for d1">
            @if ($list->user->photo == null )
                @if($list->user->gender == 'Male' )
                <img src="{{asset('public/man-dummy.png') }}" class=" mx-auto img-img" alt="" srcset="">
                @else
                <img src="{{asset('public/dummy-female.jpg') }}" class=" mx-auto img-img" alt="" srcset="">
                @endif
                @else
                <img src="{{asset('public/uploads/registers') }}/{{($list->user->photo)}}" class=" mx-auto img-img" alt="" srcset="" id="test">
                </a>
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 product-div-right">
            <div>
                <span class="product-name">
                    {{$list->title}}
                </span>
                <div class=" ">
                    <span> <strong>Post For : </strong>{{$list->post_type}}</span>
                </div><br>
                <div class=" ">
                    <span> <strong>Hall Size : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Hall Height : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Floor level : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Decor : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Road Width : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Available From:</strong> {{$list->date}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Price:</strong> {{$list->price}} / Day</span>
                </div>

            </div>
            <br>

            <p class="product-description">
                <span class="fw-bold mb-2">Description:</span> {{$list->description}}
            </p>
            <p class="product-description">
                <span class="fw-bold mb-2">Video Link:</span> {{$list->video}}
            </p>
            @if(Auth::user())
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                View Address
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h4>Contact Number : {{$list->phone}} </h4>
                            <h4>Address : {{$list->address}} </h4>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-2 col-2">
                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Address
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sAtaticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-body p-4">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="font-weight-bold"><a href="{{url('/#login')}}"> <i class="fa-solid fa-circle-exclamation me-3"></i>Login First...! </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- <div class="btn-groups d-flex flex-lg-row flex-md-row flex-sm-column flex-column">
                <button type="button" class="btn btn-primary text-white rounded-pill  me-2 mt-2">
                    <i class="fas fa-shopping-cart"></i>
                    Add to My Shortlist
                </button>
                <button type="button" onclick="location.href='tel:{{$list->phone}}'" class="btn btn-dark rounded-pill text-white me-2 mt-sm-2 mt-2">
                    <i class="fas fa-phone"></i>
                    Call
                </button>
            </div> -->
            <h2 class="amenities">Amenities</h2>
            <div class="icon1 flex-wrap">

                @if($list->lift == null)
                <div class="d-none">
                    <i class="fas fa-elevator"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-elevator"></i>
                    <h6>Lift</h6>
                </div>
                @endif

                @if($list->toilet == null)
                <div class="d-none">
                    <i class="fas fa-toilet"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-toilet"></i>
                    <h6>Toilet</h6>
                </div>
                @endif

                @if($list->fire_exit == null)
                <div class="d-none">
                    <i class="fas fa-chair"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-door-open"></i>
                    <h6>Fire Exit</h6>
                </div>
                @endif

                @if($list->generator == null)
                <div class="d-none">
                    <i class="fas fa-soap"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fa-solid fa-car-battery"></i>
                    <h6>Generator</h6>
                </div>
                @endif

                @if($list->laundry == null)
                <div class="d-none">
                    <i class="fas fa-soap"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-soap"></i>
                    <h6>Laundry</h6>
                </div>
                @endif

                @if($list->cable_tv == null)
                <div class="d-none">
                    <i class="fas fa-tv"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-tv"></i>
                    <h6>Cable TV</h6>
                </div>
                @endif




                @if($list->parking == null)
                <div class="d-none">
                    <i class="fas fa-parking"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-parking"></i>
                    <h6>Parking</h6>
                </div>
                @endif
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="slider-for d1">
                @if($list->photo == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/exhibutions/'.$list->photo)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo)}}" alt="">
                </a>
                @endif
                @if($list->photo1 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/exhibutions/'.$list->photo1)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo1)}}" alt="">
                </a>
                @endif
                @if($list->photo2 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/exhibutions/'.$list->photo2)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo2)}}" alt="">
                </a>
                @endif
                @if($list->photo3 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/exhibutions/'.$list->photo3)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo3)}}" alt="">
                </a>
                @endif
                @if($list->photo4 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/exhibutions/'.$list->photo4)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo4)}}" alt="">
                </a>
                @endif
                @if($list->photo5 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/exhibutions/'.$list->photo5)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo5)}}" alt="">
                </a>
                @endif
                @if($list->photo6 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/exhibutions/'.$list->photo6)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo6)}}" alt="">
                </a>
                @endif
            </div>
            <div class="container">
                <div class="slider-nav mt-2">
                    @if($list->photo == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo1 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo1)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo2 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo2)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo3 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo3)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo4 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo4)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo5 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo5)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo6 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/exhibutions/'.$list->photo6)}}" alt="">
                    </a>
                    @endif

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 product-div-right">
            <div>
                <span class="product-name">
                    {{$list->title}}
                </span>
                <div class=" ">
                    <span> <strong>Post For : </strong>{{$list->post_type}}</span>
                </div><br>
                <div class=" ">
                    <span> <strong>Hall Size : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Hall Height : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Floor level : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Decor : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Road Width : </strong>{{$list->room_size}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Available From:</strong> {{$list->date}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Price:</strong> {{$list->price}} / Day</span>
                </div>

            </div>
            <br>

            <p class="product-description">
                <span class="fw-bold mb-2">Description:</span> {{$list->description}}
            </p>
            <p class="product-description">
                <span class="fw-bold mb-2">Video Link:</span> {{$list->video}}
            </p>
            @if(Auth::user())
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                View Address
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h4>Contact Number : {{$list->phone}} </h4>
                            <h4>Address : {{$list->address}} </h4>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-2 col-2">
                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Address
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sAtaticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-body p-4">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="font-weight-bold"><a href="{{url('/#login')}}"> <i class="fa-solid fa-circle-exclamation me-3"></i>Login First...! </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- <div class="btn-groups d-flex flex-lg-row flex-md-row flex-sm-column flex-column">
                <button type="button" class="btn btn-primary text-white rounded-pill  me-2 mt-2">
                    <i class="fas fa-shopping-cart"></i>
                    Add to My Shortlist
                </button>
                <button type="button" onclick="location.href='tel:{{$list->phone}}'" class="btn btn-dark rounded-pill text-white me-2 mt-sm-2 mt-2">
                    <i class="fas fa-phone"></i>
                    Call
                </button>
            </div> -->
            <h2 class="amenities">Amenities</h2>
            <div class="icon1 flex-wrap">

                @if($list->lift == null)
                <div class="d-none">
                    <i class="fas fa-elevator"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-elevator"></i>
                    <h6>Lift</h6>
                </div>
                @endif

                @if($list->toilet == null)
                <div class="d-none">
                    <i class="fas fa-toilet"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-toilet"></i>
                    <h6>Toilet</h6>
                </div>
                @endif

                @if($list->fire_exit == null)
                <div class="d-none">
                    <i class="fas fa-chair"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-door-open"></i>
                    <h6>Fire Exit</h6>
                </div>
                @endif

                @if($list->generator == null)
                <div class="d-none">
                    <i class="fas fa-soap"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fa-solid fa-car-battery"></i>
                    <h6>Generator</h6>
                </div>
                @endif

                @if($list->laundry == null)
                <div class="d-none">
                    <i class="fas fa-soap"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-soap"></i>
                    <h6>Laundry</h6>
                </div>
                @endif

                @if($list->cable_tv == null)
                <div class="d-none">
                    <i class="fas fa-tv"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-tv"></i>
                    <h6>Cable TV</h6>
                </div>
                @endif




                @if($list->parking == null)
                <div class="d-none">
                    <i class="fas fa-parking"></i>
                    <h6>Not available</h6>
                </div>
                @else
                <div class="m-2">
                    <i class="fas fa-parking"></i>
                    <h6>Parking</h6>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
