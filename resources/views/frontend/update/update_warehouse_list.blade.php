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
                <form method="POST" action="{{ route('warehouse_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="title_Rent" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_Rent" placeholder="Enter Post Title">
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
                            <label for="price_Rent" class="form-label me-2 fw-bold">Rent Per Month</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Rent" placeholder="Enter Price">
                        </div>
                        <div class="col-4 mb-3">
                            <label for="type_Rent" class="form-label me-2 fw-bold">Warehouse Type</label>
                            <select id="type_Rent" class="form-select" name="type" required>
                                <option value="">Choose...</option>
                                <option value="grocery" {{$list->type == "grocery" ? 'selected':''}}>grocery</option>
                                <option value="cosmetic" {{$list->type == "cosmetic" ? 'selected':''}}>cosmetic</option>
                                <option value="medicine" {{$list->type == "medicine" ? 'selected':''}}>medicine</option>
                                <option value="camical" {{$list->type == "camical" ? 'selected':''}}>camical</option>
                                <option value="machineries" {{$list->type == "machineries" ? 'selected':''}}>Machineries</option>
                                <option value="readymade" {{$list->type == "readymade" ? 'selected':''}}>Readymade Garments</option>
                                <option value="chemical" {{$list->type == "chemical" ? 'selected':''}}>Ceramic</option>
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="floor_Rent" class="form-label me-2 fw-bold">Floor Level</label>
                            <select id="floor_Rent" class="form-select" name="floor_level" required>
                                <option value="">Choose...</option>
                                <option value="1" {{$list->floor_level == "1" ? 'selected':''}}>1</option>
                                <option value="2" {{$list->floor_level == "2" ? 'selected':''}}>2</option>
                                <option value="3" {{$list->floor_level == "3" ? 'selected':''}}>3</option>
                                <option value="4" {{$list->floor_level == "4" ? 'selected':''}}>4</option>
                                <option value="5" {{$list->floor_level == "5" ? 'selected':''}}>5</option>
                                <option value="6" {{$list->floor_level == "6" ? 'selected':''}}>6</option>
                                <option value="7" {{$list->floor_level == "7" ? 'selected':''}}>7</option>
                                <option value="8" {{$list->floor_level == "8" ? 'selected':''}}>8</option>
                                <option value="9" {{$list->floor_level == "9" ? 'selected':''}}>9</option>
                                <option value="10" {{$list->floor_level == "10" ? 'selected':''}}>10</option>
                                <option value="11" {{$list->floor_level == "11" ? 'selected':''}}>11</option>
                                <option value="12" {{$list->floor_level == "12" ? 'selected':''}}>12</option>
                                <option value="13" {{$list->floor_level == "13" ? 'selected':''}}>13</option>
                                <option value="14" {{$list->floor_level == "14" ? 'selected':''}}>14</option>
                                <option value="15" {{$list->floor_level == "15" ? 'selected':''}}>15</option>
                                <option value="15+" {{$list->floor_level == "15+" ? 'selected':''}}>15+</option>
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="building_Rent" class="form-label me-2 fw-bold">Building Condition</label>
                            <select id="building_Rent" class="form-select" name="building_condition" required>
                                <option value="">Choose...</option>
                                <option value="good" {{$list->building_condition == "good" ? 'selected':''}}>good</option>
                                <option value="moderate" {{$list->building_condition == "moderate" ? 'selected':''}}>moderate</option>
                                <option value="best" {{$list->building_condition == "best" ? 'selected':''}}>best</option>
                            </select>
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="floor_size_Rent" class="form-label me-2 fw-bold">Floor Area</label>
                            <input name="floor_size" value="{{$list->floor_size}}" type="text" class="form-control" id="floor_size_Rent" placeholder="Enter Floor Area">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="road_width_Rent" class="form-label me-2 fw-bold">Road Width</label>
                            <input name="road_width" value="{{$list->road_width}}" type="number" class="form-control" id="road_width_Rent" placeholder="Enter Road Width">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_Want" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-4 mb-3 ">
                            <h2 class="fw-bold mb-3">Ameneties</h2>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="elect_Rent" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="elect_Rent">
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
                                <input class="form-check-input" type="checkbox" id="water_Rent" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="water_Rent">
                                    Water
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_Rent" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="ac_Rent">
                                    A.C
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="drainage_system_Rent" name="drainage_system" {{  ($list->drainage_system == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="drainage_system_Rent">
                                    Drainage System
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_Rent" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="lift_Rent">
                                    Lift
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_Rent" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gen_Rent">
                                    Generator
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="fire_safety_Rent" name="fire_safety" {{  ($list->fire_safety == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="fire_safety_Rent">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_Rent" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="parking_Rent">
                                    Parking
                                </label>
                            </div>
                            <div class="my-3 ">
                                <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                                <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_Rent" placeholder="  Youtube Link">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col">
                                    @if($list->photo == ' ')
                                    <img src="{{asset('Frontend/img/th.webp')}}" alt="" srcset="" width="300" height="300">

                                    @else
                                    <img src="{{asset('public/uploads/warehouses/'.$list->photo)}}" alt="" srcset="" width="300" height="300">
                                    @endif
                                    <label for="photo_Rent" class="d-block"> Main Image</label>
                                    <div class="input-group  ">
                                        <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    @if($list->photo1 == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="200" height="200">
                                    @else
                                    <img src="{{asset('public/uploads/warehouses/'.$list->photo1)}}" class="my-3" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/warehouses/'.$list->photo2)}}" class="my-3" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/warehouses/'.$list->photo3)}}" class="my-3" alt="" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/warehouses/'.$list->photo4)}}" class="my-3" alt="" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/warehouses/'.$list->photo5)}}" class="my-3" alt="" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/warehouses/'.$list->photo6)}}" class="my-3" width="200" height="200">
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
                <form method="POST" action="{{ route('warehouse_update',$list->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="title_Want" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_Want" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_Want" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="price_Want" class="form-label me-2 fw-bold">Rent Per Month</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_Want" placeholder="Enter Price">
                        </div>
                        <div class="col-4 mb-3">
                            <label for="type_Want" class="form-label me-2 fw-bold">Warehouse Type</label>
                            <select id="type_Want" class="form-select" name="type" required>
                                <option value="">Choose...</option>
                                <option value="grocery" {{$list->type == "grocery" ? 'selected':''}}>grocery</option>
                                <option value="cosmetic" {{$list->type == "cosmetic" ? 'selected':''}}>cosmetic</option>
                                <option value="medicine" {{$list->type == "medicine" ? 'selected':''}}>medicine</option>
                                <option value="camical" {{$list->type == "camical" ? 'selected':''}}>camical</option>
                                <option value="machineries" {{$list->type == "machineries" ? 'selected':''}}>Machineries</option>
                                <option value="readymade" {{$list->type == "readymade" ? 'selected':''}}>Readymade Garments</option>
                                <option value="chemical" {{$list->type == "chemical" ? 'selected':''}}>Ceramic</option>
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="floor_Want" class="form-label me-2 fw-bold">Floor Level</label>
                            <select id="floor_Want" class="form-select" name="floor_level" required>
                                <option value="">Choose...</option>
                                <option value="1" {{$list->floor_level == "1" ? 'selected':''}}>1</option>
                                <option value="2" {{$list->floor_level == "2" ? 'selected':''}}>2</option>
                                <option value="3" {{$list->floor_level == "3" ? 'selected':''}}>3</option>
                                <option value="4" {{$list->floor_level == "4" ? 'selected':''}}>4</option>
                                <option value="5" {{$list->floor_level == "5" ? 'selected':''}}>5</option>
                                <option value="6" {{$list->floor_level == "6" ? 'selected':''}}>6</option>
                                <option value="7" {{$list->floor_level == "7" ? 'selected':''}}>7</option>
                                <option value="8" {{$list->floor_level == "8" ? 'selected':''}}>8</option>
                                <option value="9" {{$list->floor_level == "9" ? 'selected':''}}>9</option>
                                <option value="10" {{$list->floor_level == "10" ? 'selected':''}}>10</option>
                                <option value="11" {{$list->floor_level == "11" ? 'selected':''}}>11</option>
                                <option value="12" {{$list->floor_level == "12" ? 'selected':''}}>12</option>
                                <option value="13" {{$list->floor_level == "13" ? 'selected':''}}>13</option>
                                <option value="14" {{$list->floor_level == "14" ? 'selected':''}}>14</option>
                                <option value="15" {{$list->floor_level == "15" ? 'selected':''}}>15</option>
                                <option value="15+" {{$list->floor_level == "15+" ? 'selected':''}}>15+</option>
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="building_Want" class="form-label me-2 fw-bold">Building Condition</label>
                            <select id="building_Want" class="form-select" name="building_condition" required>
                                <option value="">Choose...</option>
                                <option value="good" {{$list->building_condition == "good" ? 'selected':''}}>good</option>
                                <option value="moderate" {{$list->building_condition == "moderate" ? 'selected':''}}>moderate</option>
                                <option value="best" {{$list->building_condition == "best" ? 'selected':''}}>best</option>
                            </select>
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="floor_size_Want" class="form-label me-2 fw-bold">Floor Area</label>
                            <input name="floor_size" value="{{$list->floor_size}}" type="text" class="form-control" id="floor_size_Want" placeholder="Enter Floor Area">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="road_width_Want" class="form-label me-2 fw-bold">Road Width</label>
                            <input name="road_width" value="{{$list->road_width}}" type="number" class="form-control" id="road_width_Want" placeholder="Enter Road Width">
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
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="row ms-5">
                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="elect_Want" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="elect_Want">
                                        Electricity
                                    </label>
                                </div>
                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="gas_Want" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gas_Want">
                                        Gas
                                    </label>
                                </div>
                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="water_Want" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="water_Want">
                                        Water
                                    </label>
                                </div>
                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="ac_Want" name="ac" {{  ($list->ac == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="ac_Want">
                                        A.C
                                    </label>
                                </div>

                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="drainage_system_Want" name="drainage_system" {{  ($list->drainage_system == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="drainage_system_Want">
                                        Drainage System
                                    </label>
                                </div>
                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="lift_Want" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="lift_Want">
                                        Lift
                                    </label>
                                </div>
                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="gen_Want" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gen_Want">
                                        Generator
                                    </label>
                                </div>
                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="fire_safety_Want" name="fire_safety" {{  ($list->fire_safety == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="fire_safety_Want">
                                        Fire Exit
                                    </label>
                                </div>
                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="parking_Want" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="parking_Want">
                                        Parking
                                    </label>
                                </div>
                                <div class="my-3 ">
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
