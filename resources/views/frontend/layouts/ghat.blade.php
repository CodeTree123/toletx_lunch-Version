@extends('frontend.master.master')
@section('content')
<title>ToletX-Ghat</title>



<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">

        </div>
        <div class="row row1">
            <div class="col-md-12">
                <div class="row  ">
                    <div class="col-md-2 col-small mx-2 main-service text-center single_box" href="{{route('ghat')}}">
                        <span class="icon-ghat service_item"></span>
                        <br>
                        <span class="service_item_name"> Ghat</span>
                    </div>
                </div>
                <div class="row ml-1 mr-4 ">
                    <div class="container container-fluid">
                        <form class="form-horizontal top-form" action="{{route('ghat_search')}}" role="form">
                            <div class="row  justify-content-between ">
                                <div class="col-lg-3 col-md-3 mt-2 top-from">
                                    <input type="text" name="filter[address]" class="form-control" id="ghat_search_autocomplete" placeholder="Location" aria-label=" location">
                                </div>
                                <div class="col-lg-3 col-md-3 mt-2  top-from">
                                    <input type="date" name="filter[date]" class="form-control" id="check-in-date" placeholder="Add Dates" aria-label="Add Dates">
                                </div>
                                <div class="col-lg-3 col-md-3  mt-2  top-from">
                                    <input type="date" class="form-control" id="check-out-date" placeholder="Add Dates" aria-label="Add Dates">
                                </div>
                                <!-- <div class="col-lg-3 col-md-3  mt-2 top-from">
                                <input type="number" class="form-control" id="guest-count" placeholder="Guests" aria-label="Guests">
                            </div> -->

                            </div>
                            <!-- Checkbox filters -->
                            <div class="my-4 ">
                                <div class="form-check form-check-inline mx-3 pt-2">
                                    <input class="form-check-input" type="checkbox" name="filter[toilet]" id="toilet">
                                    <label class="form-check-label checkboxes-label" for="toilet">Toilet</label>
                                </div>

                                <div class="form-check form-check-inline mx-3 pt-2">
                                    <input class="form-check-input" type="checkbox" name="filter[parking]" id="parking">
                                    <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                                </div>
                            </div>

                            <div class="price-range-block mb-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="sliderText"> Price Range </div>
                                        <div class="d-flex  ">
                                            <input type="number" name="filter[price]" min=100 max="9900000" id="min_price" class="price-range-field form-control me-2" placeholder="Min-price" />
                                            <input type="number" name="filter[price]" min=100 max="10000000" id="max_price" class="price-range-field form-control" placeholder="Max-price" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 mt-2  top-from ">
                                <button type="submit" class=" btn btn-primary  w-100 rounded-pill white-text" id="">Search</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->




@endsection