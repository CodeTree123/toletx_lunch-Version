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
                <form action="{{route('bilboard_update',$list->id)}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="billboard_rented" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="billboard_rented" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_rented" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="price_rented" class="form-label me-2 fw-bold"> Rent Per Month</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                        </div>


                        <div class="col-4 mb-3 ">
                            <label for="size_rented" class="form-label me-2 fw-bold">Billboard Size</label>
                            <input name="size" value="{{$list->size}}" type="text" class="form-control" id="size_rented" placeholder="Enter Billboard Size">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="height_rented" class="form-label me-2 fw-bold">Billboard Height</label>
                            <input name="hieght" type="text" class="form-control" id="height_rented" placeholder="Enter Billboard Height">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="type_rented" class="form-label me-2 fw-bold">Billboard Type</label>
                            <select id="type_rented" class="form-select" name="type">
                                <option value="">Choose...</option>
                                <option value="bulletin" {{$list->type == "bulletin" ? 'selected':''}}>bulletin</option>
                                <option value="painted" {{$list->type == "painted" ? 'selected':''}}>painted</option>
                                <option value="Mobile" {{$list->type == "Mobile" ? 'selected':''}}>Mobile</option>
                                <option value="classic" {{$list->type == "classic" ? 'selected':''}}>classic</option>
                            </select>
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
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" width="300" height="300">
                                    <div class=" input-group mt-2">
                                        <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo',$list->photo])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo1)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo1',$list->photo1])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo2)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo2',$list->photo2])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo3)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo3',$list->photo3])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo4)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo4',$list->photo4])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo5)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo5',$list->photo5])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
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
                                    <img src="{{asset('public/uploads/bilboards/'.$list->photo6)}}" alt="" srcset="" width="300" height="300">
                                    <div class="input-group mt-2">
                                        <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <a href="{{route('image_delete',['Bilboard',$list->id,'bilboards','photo6',$list->photo6])}}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i></a>
                                    @endif
                                    <label for="photo2_Rent" class="d-block"> Photo 7</label>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary w-25 mx-auto" type="submit">update Rent Post</button>
                    </div>
                </form>
                @else
                <form action="{{route('bilboard_update',$list->id)}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-4 mb-3 ">
                            <label for="billboard_wanted" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="billboard_wanted" placeholder="Enter Post Title">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" type="date" class="form-control" id="date_wanted" onfocus="this.showPicker()">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                        </div>

                        <div class="col-4 mb-3 ">
                            <label for="price_wanted" class="form-label me-2 fw-bold"> Rent Per Month</label>
                            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_wanted" placeholder="Enter Price">
                        </div>


                        <div class="col-4 mb-3 ">
                            <label for="size_wanted" class="form-label me-2 fw-bold">Billboard Size</label>
                            <input name="size" value="{{$list->size}}" type="text" class="form-control" id="size_wanted" placeholder="Enter Billboard Size">
                        </div>
                        <div class="col-4 mb-3 ">
                            <label for="height_wanted" class="form-label me-2 fw-bold">Billboard Height</label>
                            <input name="hieght" value="{{$list->hieght}}" type="text" class="form-control" id="height_wanted" placeholder="Enter Billboard Height">
                        </div>
                        <div class=" col-4 mb-3">
                            <label for="type_wanted" class="form-label me-2 fw-bold">Billboard Type</label>
                            <select id="type_wanted" class="form-select" name="type">
                            <option value="">Choose...</option>
                                <option value="bulletin" {{$list->type == "bulletin" ? 'selected':''}}>bulletin</option>
                                <option value="painted" {{$list->type == "painted" ? 'selected':''}}>painted</option>
                                <option value="Mobile" {{$list->type == "Mobile" ? 'selected':''}}>Mobile</option>
                                <option value="classic" {{$list->type == "classic" ? 'selected':''}}>classic</option>
                            </select>
                        </div>
                        <div class="col-8 mb-3 ">
                            <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_wanted" placeholder="Enter Address">
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Ameneties</h2>
                            <div class="row ms-5 ">
                                <div class="form-check ms-5 mb-2">
                                    <input class="form-check-input" type="checkbox" id="electricity_wanted" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="electricity_wanted">
                                        Electricity
                                    </label>
                                </div>
                                <div class="my-3 ">
                                    <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                                    <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_rented" placeholder="  Youtube Link">
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
