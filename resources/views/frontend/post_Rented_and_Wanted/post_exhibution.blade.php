@extends('frontend.master.post_master')

@section('content')

<div class="container  post_container">
    <div class="page-header">
        <div class="row shadow p-4 rounded my-5">
            <div class="col-md-6 col-sm-12">

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Exhibition Hall</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Default Basic Forms Start -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" id="hello">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger" id="hello">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row shadow p-4 rounded my-5  ">

        <div class="col-sm-12 col-md-12 mb-5">
            <select id="choose_post_type" onchange="val()" class="form-select w-50 mx-auto">
                <option value="">Choose Post Type...</option>
                <option value="Rent">Rent</option>
                <option value="Want">Want</option>
            </select>
        </div>
        <div class="col-12" id="rent" style="display: none;">
            <form method="POST" action="{{ route('post_exibution_center_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type">
                <div class="row">
                    <div class="col-4 mb-3 ">
                        <label for="title_rented" class="form-label me-2 fw-bold">Exhibition Hall Name</label>
                        <input name="title" type="text" class="form-control" id="title_rented" placeholder="Enter Warehouse Name" required>
                    </div>
                    <div class=" col-4 mb-3">
                        <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()" required>
                    </div>
                    <div class=" col-4 mb-3">
                        <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                        <select id="phone_rented" class="form-select" name="phone" required>
                            <option value="">Choose number</option>
                            @foreach($lists as $list)
                            <option value="{{$list->phone}}">{{$list->phone}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-4 mb-3 ">
                        <label for="price_rented" class="form-label me-2 fw-bold">Rent Per Day</label>
                        <input name="price" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                    </div>
                    <div class="col-4 mb-3">
                        <label for="interior_rented" class="form-label me-2 fw-bold">Interior Condition</label>
                        <select id="interior_rented" class="form-select" name="interior_condition" required>
                           <option value="">Choose number</option>
                            <option value="good">good</option>
                            <option value="moderate">moderate</option>
                            <option value="best">best</option>
                        </select>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="floor_rented" class="form-label me-2 fw-bold">Exhibition Hall Floor Level</label>
                        <select id="floor_rented" class="form-select" name="floor_level" required>
                           <option value="">Choose number</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="15">15+</option>
                        </select>
                    </div>
                    <div class="col-4 mb-3 ">
                        <label for="Hall_rented" class="form-label me-2 fw-bold">Exhibition Hall Area</label>
                        <input name="room_size" type="text" class="form-control" id="Hall_rented" placeholder="Enter Exhibition Hall Area" required>
                    </div>
                    <div class="col-4 mb-3 ">
                        <label for="floor_size_rented" class="form-label me-2 fw-bold">Exhibition Hall Height</label>
                        <input name="room_type" type="text" class="form-control" id="floor_size_rented" placeholder="Enter Exhibition Hall Height" required>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="road_rented" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="road_width" type="number" class="form-control" id="road_rented" placeholder="Enter Road Width" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" id="exhibition_search_autocomplete" placeholder="Enter Address" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="col-4 mb-3 ">
                        <h2 class="fw-bold mb-3">Ameneties</h2>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="Toilet_rented" name="toilet">
                            <label class="form-check-label" for="Toilet_rented">
                                Toilet
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="Exit_rented" name="fire_exit">
                            <label class="form-check-label" for="Exit_rented">
                                Fire Exit
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_rented" name="lift">
                            <label class="form-check-label" for="lift_rented">
                                Lift
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gen_rented" name="generator">
                            <label class="form-check-label" for="gen_rented">
                                Generator
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="parking_rented" name="parking">
                            <label class="form-check-label" for="parking_rented">
                                Parking
                            </label>
                        </div>
                    </div>
                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <label for="photo_rented" class="d-block"> Photo 1</label>
                        <div class="input-group mb-3 ">

                            <input type="file" class="form-control" name="photo" id="photo_rented" placeholder="asd">
                        </div>

                        <label for="photo1_rented" class="d-block"> Photo 2</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo1" id="photo1_rented">
                        </div>

                        <label for="photo2_rented" class="d-block"> Photo 3</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo2" id="photo2_rented">
                        </div>

                        <label for="photo3_rented" class="d-block"> Photo 4</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo3" id="photo3_rented">
                        </div>

                        <label for="photo4_rented" class="d-block"> Photo 5</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo4" id="photo4_rented">
                        </div>

                        <label for="photo5_rented" class="d-block"> Photo 6</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo5" id="photo5_rented">
                        </div>

                        <label for="photo6_rented" class="d-block"> Photo 7</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo6" id="photo6_rented">
                        </div>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                        <input type="text" class="form-control" name="video" id="video_rented" placeholder="  Youtube Link">
                    </div>
                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-12" id="want" style="display: none;">
            <form method="POST" action="{{ route('post_exibution_center_wanted') }}">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>

                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type">
                <div class="row">
                    <div class="col-4 mb-3 ">
                        <label for="title_wanted" class="form-label me-2 fw-bold">Exhibition Hall Name</label>
                        <input name="title" type="text" class="form-control" id="title_wanted" placeholder="Enter Warehouse Name" required>
                    </div>
                    <div class=" col-4 mb-3">
                        <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_wanted" onfocus="this.showPicker()" required>
                    </div>
                    <div class=" col-4 mb-3">
                        <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                        <select id="phone_wanted" class="form-select" name="phone" required>
                            <option value="">Choose number</option>
                            @foreach($lists as $list)
                            <option value="{{$list->phone}}">{{$list->phone}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-4 mb-3 ">
                        <label for="price_wanted" class="form-label me-2 fw-bold">Rent Per Day</label>
                        <input name="price" type="number" class="form-control" id="price_wanted" placeholder="Enter Price">
                    </div>
                    <div class="col-4 mb-3">
                        <label for="interior_wanted" class="form-label me-2 fw-bold">Interior Condition</label>
                        <select id="interior_wanted" class="form-select" name="interior_condition" required>
                           <option value="">Choose number</option>
                            <option value="good">good</option>
                            <option value="moderate">moderate</option>
                            <option value="best">best</option>
                        </select>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="floor_wanted" class="form-label me-2 fw-bold">Exhibition Hall Floor Level</label>
                        <select id="floor_wanted" class="form-select" name="floor_level" required>
                           <option value="">Choose number</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="15">15+</option>
                        </select>
                    </div>
                    <div class="col-4 mb-3 ">
                        <label for="Hall_wanted" class="form-label me-2 fw-bold">Exhibition Hall Area</label>
                        <input name="room_size" type="text" class="form-control" id="Hall_wanted" placeholder="Enter Exhibition Hall Area" required>
                    </div>
                    <div class="col-4 mb-3 ">
                        <label for="floor_size_wanted" class="form-label me-2 fw-bold">Exhibition Hall Height</label>
                        <input name="room_type" type="text" class="form-control" id="floor_size_wanted" placeholder="Enter Exhibition Hall Height" required>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="road_wanted" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="road_width" type="number" class="form-control" id="road_wanted" placeholder="Enter Road Width" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" id="exhibition_search_autocomplete" placeholder="Enter Address" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Ameneties</h2>
                        <div class="row ms-5 ">
                        <div class="col-2 form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="Toilet_wanted" name="toilet">
                            <label class="form-check-label" for="Toilet_wanted">
                                Toilet
                            </label>
                        </div>
                        <div class="col-2 form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="Exit_wanted" name="fire_exit">
                            <label class="form-check-label" for="Exit_wanted">
                                Fire Exit
                            </label>
                        </div>
                        <div class="col-2 form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_wanted" name="lift">
                            <label class="form-check-label" for="lift_wanted">
                                Lift
                            </label>
                        </div>
                        <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_wanted" name="generator">
                                <label class="form-check-label" for="gen_wanted">
                                    Generator
                                </label>
                            </div>
                        <div class="col-2 form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="parking_wanted" name="parking">
                            <label class="form-check-label" for="parking_wanted">
                                Parking
                            </label>
                        </div>
                    </div>
                    </div>
                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- js -->

<script>
    function val() {
        var choose = document.getElementById('choose_post_type').value;
        var rented = document.getElementById('rent');
        var wanted = document.getElementById('want');
        var post = document.getElementById('post_rent');
        var post2 = document.getElementById('post_want');
        if (choose == "Want") {
            wanted.style.display = "flex";
            rented.style.display = "none";

            post2.value = choose;

        } else if (choose == "Rent") {
            rented.style.display = "flex";
            wanted.style.display = "none";

            post.value = choose;
        } else {
            rented.style.display = "none";
            wanted.style.display = "none";
            post.value = choose;

        }

        // console.log(choose);
    }
</script>
<script>
    $(document).ready(function() {
        $("#hello").slideDown(300).delay(1000).slideUp(300);
    });
</script>
@endsection
