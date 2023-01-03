@extends('frontend.master.post_master')

@section('content')
<div class="container post_container post_container">
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
                <form method="POST" action="{{ route('room_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="room_name_Rent" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" type="text" value="{{$list->title}}" class="form-control" id="room_name_Rent" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" type="date" value="{{$list->date}}" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="price_Rent" class="form-label me-2 fw-bold">Rent Per Month</label>
                            <input name="price" type="number" value="{{$list->price}}" class="form-control" id="price_Rent" placeholder="Enter Price">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="s_charge_Rent" class="form-label me-2 fw-bold">Service Charge</label>
                            <input name="s_charge" type="number" value="{{$list->s_charge}}" class="form-control" id="s_charge_Rent" placeholder="Enter Service Charge">
                        </div>


                        <div class="col-4 mb-3 ">
                            <label for="room_size_Rent" class="form-label me-2 fw-bold">Room Size</label>
                            <input name="room_size" type="text" value="{{$list->room_size}}" class="form-control" id="room_size_Rent" placeholder="Enter Room Size">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="guest_Rent" class="form-label me-2 fw-bold">Guest Count</label>
                            <input name="guest_count" type="number" value="{{$list->guest_count}}" class="form-control" id="guest_Rent" placeholder="Enter guest count">
                        </div>
                        <div class="col-8 mb-3 ">
                            <label for="address_Rent" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" type="text" value="{{$list->address}}" class="form-control" id="address_Rent" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-4 mb-3 ">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="electricity_Rent" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="electricity_Rent">
                                    Electricity
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_Rent" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gas_Rent">
                                    Gas
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="Water_Rent" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="Water_Rent">
                                    Water
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="furnished_Rent" name="furnished" {{  ($list->furnished == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="furnished_Rent">
                                    Furniture
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="attatched_toilet_Rent" name="attached_toilet" {{  ($list->attached_toilet == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="attatched_toilet_Rent">
                                    Attached Toilet
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="hot_water_Rent" name="hot_water" {{  ($list->hot_water == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="hot_water_Rent">
                                    Geyser
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_Rent" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="ac_Rent">
                                    A.C
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="cabel_tv_Rent" name="cable_tv" {{  ($list->cable_tv == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="cabel_tv_Rent">
                                    Cable Tv
                                </label>
                            </div>

                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_Rent" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gen_Rent">
                                    Generator
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_Rent" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="wifi_Rent">
                                    Wifi
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="laundry_Rent" name="varanda" {{  ($list->varanda == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="laundry_Rent">
                                    Attached Varanda
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_Rent" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="lift_Rent">
                                    Lift
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_Rent" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="parking_Rent">
                                    Parking
                                </label>
                            </div>
                            <div class="my-3">
                                <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                                <input type="text" class="form-control" value="{{$list->video}}" name="video" id="video_Rent" placeholder="  Youtube Link">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col">
                                    
                                    @if($list->photo == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="300" height="300">
                                    <div class=" input-group mt-2">
                                        <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/rooms/'.$list->photo)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Room',$list->id,'rooms','photo',$list->photo])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
                                    @endif

                                    <label for="photo_Rent" class="d-block"> Main Image</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                @if($list->photo1 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="300" height="300">
                                    <div class=" input-group mt-2">
                                        <input type="file" class="form-control " name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/rooms/'.$list->photo1)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Room',$list->id,'rooms','photo1',$list->photo1])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
                                    @endif
                                    <label for="photo1_Rent" class="d-block "> Photo 2</label>
                                </div>
                                <div class="col-4">
                                @if($list->photo2 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="300" height="300">
                                    <div class=" input-group mt-2">
                                        <input type="file" class="form-control " name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/rooms/'.$list->photo2)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Room',$list->id,'rooms','photo2',$list->photo2])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 3</label>
                                    
                                </div>
                                <div class="col-4">
                                @if($list->photo3 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="300" height="300">
                                    <div class=" input-group mt-2">
                                        <input type="file" class="form-control " name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/rooms/'.$list->photo3)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Room',$list->id,'rooms','photo3',$list->photo3])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 4</label>
                                </div>
                                <div class="col-4">
                                @if($list->photo4 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="300" height="300">
                                    <div class=" input-group mt-2">
                                        <input type="file" class="form-control " name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/rooms/'.$list->photo4)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Room',$list->id,'rooms','photo4',$list->photo4])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 5</label>
                                </div>
                                <div class="col-4">
                                @if($list->photo5 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="300" height="300">
                                    <div class=" input-group mt-2">
                                        <input type="file" class="form-control " name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/rooms/'.$list->photo5)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Room',$list->id,'rooms','photo5',$list->photo5])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 6</label>
                                </div>
                                <div class="col-4">
                                @if($list->photo6 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="300" height="300">
                                    <div class=" input-group mt-2">
                                        <input type="file" class="form-control " name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/rooms/'.$list->photo6)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Room',$list->id,'rooms','photo6',$list->photo6])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 7</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-25 mx-auto my-2" type="submit">Update Rent Post</button>
                    </div>
                </form>
                @else
                <form method="POST" action="{{ route('room_update',$list->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="room_name_Want" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" type="text" value="{{$list->title}}" class="form-control" id="room_name_Want" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" type="date" value="{{$list->date}}" class="form-control" id="date_Want" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" type="text" value="{{$list->phone}}" class="form-control" id="phone_Want" placeholder="Enter Phone Number">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="price_Want" class="form-label me-2 fw-bold">Rent Per Month</label>
                            <input name="price" type="number" value="{{$list->price}}" class="form-control" id="price_Want" placeholder="Enter Price">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="s_charge_Want" class="form-label me-2 fw-bold">Service Charge</label>
                            <input name="s_charge" type="number" value="{{$list->s_charge}}" class="form-control" id="s_charge_Want" placeholder="Enter Service Charge">
                        </div>


                        <div class="col-4 mb-3 ">
                            <label for="room_size_Want" class="form-label me-2 fw-bold">Room Size</label>
                            <input name="room_size" type="text" value="{{$list->room_size}}" class="form-control" id="room_size_Want" placeholder="Enter Room Size">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="guest_Want" class="form-label me-2 fw-bold">Guest Count</label>
                            <input name="guest_count" type="number" value="{{$list->guest_count}}" class="form-control" id="guest_Want" placeholder="Enter guest count">
                        </div>
                        <div class="col-8 mb-3 ">
                            <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" type="text" value="{{$list->address}}" class="form-control" id="address_Want" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Want" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Want" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="row ms-5 ">
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="electricity_Want" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="electricity_Want">
                                        Electricity
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gas_Want" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gas_Want">
                                        Gas
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="Water_Want" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="Water_Want">
                                        Water
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="furnished_Want" name="furnished" {{  ($list->furnished == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="furnished_Want">
                                        Furniture
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="attatched_toilet_Want" name="attached_toilet" {{  ($list->attached_toilet == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="attatched_toilet_Want">
                                        Attached Toilet
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="hot_water_Want" name="hot_water" {{  ($list->hot_water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="hot_water_Want">
                                        Geyser
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ac_Want" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="ac_Want">
                                        A.C
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="cabel_tv_Want" name="cable_tv" {{  ($list->cable_tv == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="cabel_tv_Want">
                                        Cable Tv
                                    </label>
                                </div>

                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gen_Want" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gen_Want">
                                        Generator
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="wifi_Want" name="wifi" {{  ($list->wifi == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="wifi_Want">
                                        Wifi
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="laundry_Want" name="varanda" {{  ($list->varanda == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="laundry_Want">
                                        Attached Varanda
                                    </label>
                                </div>
                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="lift_Want" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="lift_Want">
                                        Lift
                                    </label>
                                </div>

                                <div class="col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="parking_Want" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="parking_Want">
                                        Parking
                                    </label>
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
