@extends('frontend.master.post_master')

@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block" id="hello">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if($list->post_type == 'Rent')
                <form method="POST" action="{{ route('swimmingpool_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="Swmming_Pool_Rent" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="Swmming_Pool_Rent" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="price_Rent" class="form-label me-2 fw-bold"> Rent Per Day</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Rent" placeholder="Enter Price">
                        </div>


                        <div class="col-4 mb-3 ">
                            <label for="size_Rent" class="form-label me-2 fw-bold">Pool Size</label>
                            <input name="size" value="{{$list->size}}" type="text" class="form-control" id="size_Rent" placeholder="Enter Pool Size">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="room_type_Rent" class="form-label me-2 fw-bold">Pool Type</label>
                            <select id="room_type_Rent" class="form-select" name="type" required>
                                <option valie="" >Choose...</option>
                                <option value="in-grown"  {{$list->type == "in-grown" ? 'selected':''}}>in-grown</option>
                                <option value="swim"  {{$list->type == "swim" ? 'selected':''}}>swim</option>
                                <option value="lap"  {{$list->type == "lap" ? 'selected':''}}>lap</option>
                                <option value="hot tub"  {{$list->type == "hot tub" ? 'selected':''}}>hot tub</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_Rent" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_Rent" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-4 mb-3 ">
                            <h2 class="fw-bold mb-3">Ameneties</h2>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_rent" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="wifi_rent">
                                    Wifi
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="toilet_rent" name="toilet" {{  ($list->toilet == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="toilet_rent">
                                    Toilet
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="Change_room_rent" name="change_room" {{  ($list->change_room == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Change_room_rent">
                                    Changing Room
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="shed_rent" name="shed" {{  ($list->shed == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="shed_rent">
                                    Shed
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="generator_Rent" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="generator_Rent">
                                    Genarator
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="laundry_rent" name="laundry" {{  ($list->laundry == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="laundry_rent">
                                    Laundry
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_rent" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="parking_rent">
                                    Parking
                                </label>
                            </div>
                            <div class="my-3">
                                <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                                <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_Rent" placeholder="  Youtube Link">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col">
                                    @if($list->photo == '')
                                    <img src="{{asset('Frontend/img/th.webp')}}" alt="" srcset="" width="300" height="300">

                                    @else
                                    <img src="{{asset('public/uploads/swimmingpools/'.$list->photo)}}" alt="" srcset="" width="300" height="300">
                                    @endif
                                    <label for="photo_Rent" class="d-block"> Main Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    @if($list->photo1 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="200" height="200">
                                    @else
                                    <img src="{{asset('public/uploads/swimmingpools/'.$list->photo1)}}" class="my-3" srcset="" width="200" height="200">
                                    @endif
                                    <label for="photo1_Rent" class="d-block "> Photo 2</label>
                                    <div class="input-group ">
                                        <input type="file" class="form-control" name="photo1" id="photo1_Rent">
                                    </div>
                                </div>
                                <div class="col-4">
                                    @if($list->photo2 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="200" height="200">

                                    @else
                                    <img src="{{asset('public/uploads/swimmingpools/'.$list->photo2)}}" class="my-3" srcset="" width="200" height="200">
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 3</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="photo2" id="photo2_Rent">
                                    </div>
                                </div>
                                <div class="col-4">
                                    @if($list->photo3 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="200" height="200">

                                    @else
                                    <img src="{{asset('public/uploads/swimmingpools/'.$list->photo3)}}"  class="my-3" alt="" srcset="" width="200" height="200">
                                    @endif
                                    <label for="photo3_Rent" class="d-block"> Photo 4</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="photo3" id="photo3_Rent">
                                    </div>
                                </div>
                                <div class="col-4">
                                    @if($list->photo4 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="200" height="200">

                                    @else
                                    <img src="{{asset('public/uploads/swimmingpools/'.$list->photo4)}}"  class="my-3" alt="" srcset="" width="200" height="200">
                                    @endif
                                    <label for="photo4_Rent" class="d-block"> Photo 5</label>

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="photo4" id="photo4_Rent">
                                    </div>
                                </div>
                                <div class="col-4">
                                    @if($list->photo5 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="200" height="200">

                                    @else
                                    <img src="{{asset('public/uploads/swimmingpools/'.$list->photo5)}}"  class="my-3" alt="" srcset="" width="200" height="200">
                                    @endif
                                    <label for="photo5_Rent" class="d-block"> Photo 6</label>

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="photo5" id="photo5_Rent">
                                    </div>
                                </div>
                                <div class="col-4">
                                    @if($list->photo6 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="200" height="200">

                                    @else
                                    <img src="{{asset('public/uploads/swimmingpools/'.$list->photo6)}}"  class="my-3" width="200" height="200">
                                    @endif
                                    <label for="photo6_Rent" class="d-block"> Photo 7</label>

                                    <div class="input-group ">
                                        <input type="file" class="form-control" name="photo6" id="photo6_Rent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-25 mx-auto" type="submit">Update Rent Post</button>
                    </div>
                </form>
                @else
                <form method="POST" action="{{ route('swimmingpool_update',$list->id) }}">
                    @csrf

                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="Swimming_Pool_Want" class="form-label me-2 fw-bold">post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="Swimming_Pool_Want" placeholder="Enter post Title">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_Want" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>

                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="price_Want" class="form-label me-2 fw-bold"> Rent Per Day</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Want" placeholder="Enter Price">
                        </div>


                        <div class="col-4 mb-3 ">
                            <label for="size_Want" class="form-label me-2 fw-bold">Pool Size</label>
                            <input name="size" value="{{$list->size}}" type="text" class="form-control" id="size_Want" placeholder="Enter Pool Size">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="room_type_Want" class="form-label me-2 fw-bold">Pool Type</label>
                            <select id="room_type_Want" class="form-select" name="type" required>
                                <option valie="" >Choose...</option>
                                <option value="in-grown"  {{$list->type == "in-grown" ? 'selected':''}}>in-grown</option>
                                <option value="swim"  {{$list->type == "swim" ? 'selected':''}}>swim</option>
                                <option value="lap"  {{$list->type == "lap" ? 'selected':''}}>lap</option>
                                <option value="hot tub"  {{$list->type == "hot tub" ? 'selected':''}}>hot tub</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_Want" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Want" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Want" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Ameneties</h2>
                            <div class="row ms-5 ">
                                <div class="col-2 form-check mb-2we">
                                    <input class="form-check-input" type="checkbox" id="wifi_want" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="wifi_want">
                                        Wifi
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2we">
                                    <input class="form-check-input" type="checkbox" id="toilet_want" name="toilet" {{  ($list->toilet == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="toilet_want">
                                        Toilet
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2we">
                                    <input class="form-check-input" type="checkbox" id="Change_room_want" name="change_room" {{  ($list->change_room == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="Change_room_want">
                                        Changing Room
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2we">
                                    <input class="form-check-input" type="checkbox" id="shed_want" name="shed" {{  ($list->shed == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="shed_want">
                                        Shed
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2we">
                                    <input class="form-check-input" type="checkbox" id="generator_want" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="generator_want">
                                        Genarator
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2we">
                                    <input class="form-check-input" type="checkbox" id="laundry_want" name="laundry" {{  ($list->laundry == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="laundry_want">
                                        Laundry
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2we">
                                    <input class="form-check-input" type="checkbox" id="parking_want" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="parking_want">
                                        Parking
                                    </label>
                                </div>
                                <div class="my-3">
                                    <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                                    <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_Rent" placeholder="  Youtube Link">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-25 mx-auto" type="submit">Update Want Post</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#hello").slideDown(300).delay(1000).slideUp(300);
    });
</script>
@endsection
