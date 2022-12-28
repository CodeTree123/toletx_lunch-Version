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
                <form method="POST" action="{{ route('building_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="building_name_rented" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="building_name" value="{{$list->building_name}}" type="text" class="form-control" id="building_name_rented" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_ value=" {{$list->phone}}"rented">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="price_rented" class="form-label me-2 fw-bold">Rent Per Month</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="s_charge_rented" class="form-label me-2 fw-bold">Service Charge</label>
                            <input name="s_charge" value="{{$list->s_charge}}" type="number" class="form-control" id="s_charge_rented" placeholder="Enter Service Charge">
                        </div>


                        <div class="col-4 mb-3 ">
                            <label for="building_size_rented" class="form-label me-2 fw-bold">Land Area</label>
                            <input name="building_size" value="{{$list->building_size}}" type="text" class="form-control" id="building_size_rented" placeholder="Enter Land Area">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="floor_rented" class="form-label me-2 fw-bold">Building Type</label>
                            <select id="floor_rented" class="form-select" name="t_build" required>
                                <option value="" >Choose...</option>
                                <option value="rcc" {{$list->t_build == "rcc" ? 'selected':''}}>R.C.C</option>
                                <option value="Tin Shed" {{$list->t_build == "Tin Shed" ? 'selected':''}}>Tin Shed</option>
                            </select>
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="floor_rented" class="form-label me-2 fw-bold">No. of Floor</label>
                            <select id="floor_rented" class="form-select" name="floor" required>
                                <option value="" >Choose...</option>
                                <option value="1" {{$list->floor == "1" ? 'selected':''}}>1</option>
                                <option value="2" {{$list->floor == "2" ? 'selected':''}}>2</option>
                                <option value="3" {{$list->floor == "3" ? 'selected':''}}>3</option>
                                <option value="4" {{$list->floor == "4" ? 'selected':''}}>4</option>
                                <option value="5" {{$list->floor == "5" ? 'selected':''}}>5</option>
                                <option value="6" {{$list->floor == "6" ? 'selected':''}}>6</option>
                                <option value="7" {{$list->floor == "7" ? 'selected':''}}>7</option>
                                <option value="8" {{$list->floor == "8" ? 'selected':''}}>8</option>
                                <option value="9" {{$list->floor == "9" ? 'selected':''}}>9</option>
                                <option value="10" {{$list->floor == "10" ? 'selected':''}}>10</option>
                                <option value="11" {{$list->floor == "11" ? 'selected':''}}>11</option>
                                <option value="12" {{$list->floor == "12" ? 'selected':''}}>12</option>
                                <option value="13" {{$list->floor == "13" ? 'selected':''}}>13</option>
                                <option value="14" {{$list->floor == "14" ? 'selected':''}}>14</option>
                                <option value="15" {{$list->floor == "15" ? 'selected':''}}>15</option>
                                <option value="15+" {{$list->floor == "15+" ? 'selected':''}}>15+</option>
                            </select>

                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="floor_size_rented" class="form-label me-2 fw-bold">Floor Size</label>
                            <input name="floor_size" value="{{$list->floor_size}}" type="text" class="form-control" id="floor_size_rented" placeholder="Enter Floor Size">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="road_width_rented" class="form-label me-2 fw-bold">Road Width</label>
                            <input name="road_width" value="{{$list->road_width}}" type="text" class="form-control" id="road_width_rented" placeholder="Enter Road Width">
                        </div>
                        <div class="col-8 mb-3 ">
                            <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_rented" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-4 mb-3 ">
                            <h2 class="fw-bold mb-3">Amenities</h2>

                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="electricity_rented" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="electricity_rented">
                                    Electricity
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_rented" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gas_rented">
                                    Gas
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="water_rented" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="water_rented">
                                    Water
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_rented" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="lift_rented">
                                    Lift
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="fire_exit_rented" name="fire_exit" {{  ($list->fire_exit == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="fire_exit_rented">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_rented" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gen_rented">
                                    Generator
                                </label>
                            </div>
                            <div class="form-check ms-5 mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_rented" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="parking_rented">
                                    Parking
                                </label>
                            </div>
                            <div class="my-3 ">
                                <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                                <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_rented" placeholder="  Youtube Link">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col">
                                    @if($list->photo == '')
                                    <img src="{{asset('Frontend/img/th.webp')}}" alt="" srcset="" width="300" height="300">

                                    @else
                                    <img src="{{asset('public/uploads/buildings/'.$list->photo)}}" alt="" srcset="" width="300" height="300">
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
                                    <img src="{{asset('public/uploads/buildings/'.$list->photo1)}}" class="my-3" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/buildings/'.$list->photo2)}}" class="my-3" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/buildings/'.$list->photo3)}}" class="my-3" alt="" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/buildings/'.$list->photo4)}}" class="my-3" alt="" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/buildings/'.$list->photo5)}}" class="my-3" alt="" srcset="" width="200" height="200">
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
                                    <img src="{{asset('public/uploads/buildings/'.$list->photo6)}}" class="my-3" width="200" height="200">
                                    @endif
                                    <label for="photo6_Rent" class="d-block"> Photo 7</label>

                                    <div class="input-group ">
                                        <input type="file" class="form-control" name="photo6" id="photo6_Rent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-25 mx-auto my-5" type="submit">Update Rent Post</button>
                    </div>
                </form>
                @else
                <form method="POST" action="{{ route('building_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="building_name_rented" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="building_name" value="{{$list->building_name}}" type="text" class="form-control" id="building_name_rented" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                            <input name="phone" value="{{$list->phone}}" type="tel" class="form-control" id="phone_ value=" {{$list->phone}}"rented">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="price_rented" class="form-label me-2 fw-bold">Rent Per Month</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="s_charge_rented" class="form-label me-2 fw-bold">Service Charge</label>
                            <input name="s_charge" value="{{$list->s_charge}}" type="number" class="form-control" id="s_charge_rented" placeholder="Enter Service Charge">
                        </div>


                        <div class="col-4 mb-3 ">
                            <label for="building_size_rented" class="form-label me-2 fw-bold">Land Area</label>
                            <input name="building_size" value="{{$list->building_size}}" type="text" class="form-control" id="building_size_rented" placeholder="Enter Land Area">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="floor_rented" class="form-label me-2 fw-bold">Building Type</label>
                            <select id="floor_rented" class="form-select" name="t_build" required>
                                <option value="" >Choose...</option>
                                <option value="rcc" {{$list->t_build == "rcc" ? 'selected':''}}>R.C.C</option>
                                <option value="Tin Shed" {{$list->t_build == "Tin Shed" ? 'selected':''}}>Tin Shed</option>
                            </select>
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="floor_rented" class="form-label me-2 fw-bold">No. of Floor</label>
                            <select id="floor_rented" class="form-select" name="floor" required>
                                <option value="">Choose...</option>
                                <option value="1" {{$list->floor == "1" ? 'selected':''}}>1</option>
                                <option value="2" {{$list->floor == "2" ? 'selected':''}}>2</option>
                                <option value="3" {{$list->floor == "3" ? 'selected':''}}>3</option>
                                <option value="4" {{$list->floor == "4" ? 'selected':''}}>4</option>
                                <option value="5" {{$list->floor == "5" ? 'selected':''}}>5</option>
                                <option value="6" {{$list->floor == "6" ? 'selected':''}}>6</option>
                                <option value="7" {{$list->floor == "7" ? 'selected':''}}>7</option>
                                <option value="8" {{$list->floor == "8" ? 'selected':''}}>8</option>
                                <option value="9" {{$list->floor == "9" ? 'selected':''}}>9</option>
                                <option value="10" {{$list->floor == "10" ? 'selected':''}}>10</option>
                                <option value="11" {{$list->floor == "11" ? 'selected':''}}>11</option>
                                <option value="12" {{$list->floor == "12" ? 'selected':''}}>12</option>
                                <option value="13" {{$list->floor == "13" ? 'selected':''}}>13</option>
                                <option value="14" {{$list->floor == "14" ? 'selected':''}}>14</option>
                                <option value="15" {{$list->floor == "15" ? 'selected':''}}>15</option>
                                <option value="15+" {{$list->floor == "15+" ? 'selected':''}}>15+</option>
                            </select>

                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="floor_size_rented" class="form-label me-2 fw-bold">Floor Size</label>
                            <input name="floor_size" value="{{$list->floor_size}}" type="text" class="form-control" id="floor_size_rented" placeholder="Enter Floor Size">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="road_width_rented" class="form-label me-2 fw-bold">Road Width</label>
                            <input name="road_width" value="{{$list->road_width}}" type="text" class="form-control" id="road_width_rented" placeholder="Enter Road Width">
                        </div>
                        <div class="col-8 mb-3 ">
                            <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_rented" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="row ms-5 ">
                                <div class=" col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="electricity_rented" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="electricity_rented">
                                        Electricity
                                    </label>
                                </div>
                                <div class=" col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gas_rented" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gas_rented">
                                        Gas
                                    </label>
                                </div>
                                <div class=" col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="water_rented" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="water_rented">
                                        Water
                                    </label>
                                </div>
                                <div class=" col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="lift_rented" name="lift" {{  ($list->lift == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="lift_rented">
                                        Lift
                                    </label>
                                </div>
                                <div class=" col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="fire_exit_rented" name="fire_exit" {{  ($list->fire_exit == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="fire_exit_rented">
                                        Fire Exit
                                    </label>
                                </div>
                                <div class=" col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gen_rented" name="generator" {{  ($list->generator == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gen_rented">
                                        Generator
                                    </label>
                                </div>
                                <div class=" col-2 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="parking_rented" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="parking_rented">
                                        Parking
                                    </label>
                                </div>
                                <div class="my-3 ">
                                    <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                                    <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_rented" placeholder="  Youtube Link">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-25 mx-auto my-5" type="submit">Update Want Post</button>
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
