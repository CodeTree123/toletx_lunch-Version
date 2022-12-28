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
                </div>
                <div class=" ">
                    <span> <strong>Pond area : </strong>{{$list->pond_area}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Pond Water Level : </strong>{{$list->water_level}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Road Width : </strong>{{$list->road_width}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Available From:</strong> {{$list->date}}</span>
                </div>
                @if($list->price == null)
                @else
                <div class=" ">
                    <span> <strong>Price :</strong> {{$list->price}} / Month</span>
                </div>
                @endif
                @if($list->y_price == null)
                @else
                <div class=" ">
                    <span> <strong>Price :</strong> {{$list->y_price}}/ Year</span>
                </div>
                @endif

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
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="slider-for d1">
                @if($list->photo == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/ponds/'.$list->photo)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo)}}" alt="">
                </a>
                @endif
                @if($list->photo1 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/ponds/'.$list->photo1)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo1)}}" alt="">
                </a>
                @endif
                @if($list->photo2 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/ponds/'.$list->photo2)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo2)}}" alt="">
                </a>
                @endif
                @if($list->photo3 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/ponds/'.$list->photo3)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo3)}}" alt="">
                </a>
                @endif
                @if($list->photo4 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/ponds/'.$list->photo4)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo4)}}" alt="">
                </a>
                @endif
                @if($list->photo5 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/ponds/'.$list->photo5)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo5)}}" alt="">
                </a>
                @endif
                @if($list->photo6 == null)
                @else
                <a data-fancybox="gallery" href="{{asset('public/uploads/ponds/'.$list->photo6)}}">
                    <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo6)}}" alt="">
                </a>
                @endif
            </div>
            <div class="container">
                <div class="slider-nav mt-2">
                    @if($list->photo == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo1 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo1)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo2 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo2)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo3 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo3)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo4 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo4)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo5 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo5)}}" alt="">
                    </a>
                    @endif
                    @if($list->photo6 == null)
                    @else
                    <a class="thumb border mx-2 px-2 ">
                        <img class="img-fluid" src="{{asset('public/uploads/ponds/'.$list->photo6)}}" alt="">
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
                </div>
                <div class=" ">
                    <span> <strong>Pond area : </strong>{{$list->pond_area}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Pond Water Level : </strong>{{$list->water_level}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Road Width : </strong>{{$list->road_width}}</span>
                </div>
                <div class=" ">
                    <span> <strong>Available From:</strong> {{$list->date}}</span>
                </div>
                @if($list->price == null)
                @else
                <div class=" ">
                    <span> <strong>Price :</strong> {{$list->price}} / Month</span>
                </div>
                @endif
                @if($list->y_price == null)
                @else
                <div class=" ">
                    <span> <strong>Price :</strong> {{$list->y_price}}/ Year</span>
                </div>
                @endif

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
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        </div>
    </div>
    @endif
</div>
@endsection
