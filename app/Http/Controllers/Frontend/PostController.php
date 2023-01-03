<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Building;
use App\Models\forms;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Hostel;
use App\Models\Office;
use App\Models\Land;
use App\Models\Community_Center;
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Factory;
use App\Models\Warehouse;
use App\Models\Pond;
use App\Models\Swimming_Pool;
use App\Models\Bilboard;
use App\Models\Rooftop;
use App\Models\Restaurant;
use App\Models\Exibution_Center;
use App\Models\Ghat;
use App\Models\marketing;
use App\Models\Play_ground;
use App\Models\Payment;
use App\Models\Picnic_Spot;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
use File;
use Validator;

class PostController extends Controller
{
    public function profile()
    {
        $users = User::where('id', auth()->id())->get();
        $rooms = Room::where('user_id', auth()->id())->get();
        $flats = Flat::where('user_id', auth()->id())->get();
        $buildings = Building::where('user_id', auth()->id())->get();
        $parkings = Parking_Spot::where('user_id', auth()->id())->get();
        $hostels = Hostel::where('user_id', auth()->id())->get();
        $hotels = Hotel::where('user_id', auth()->id())->get();
        $retaurants = Restaurant::where('user_id', auth()->id())->get();
        $offices = Office::where('user_id', auth()->id())->get();
        $shops = Shop::where('user_id', auth()->id())->get();
        $communities = Community_Center::where('user_id', auth()->id())->get();
        $factories = Factory::where('user_id', auth()->id())->get();
        $warehouses = Warehouse::where('user_id', auth()->id())->get();
        $lands = Land::where('user_id', auth()->id())->get();
        $ponds = Pond::where('user_id', auth()->id())->get();
        $ghats = Ghat::where('user_id', auth()->id())->get();
        $swimmings = Swimming_Pool::where('user_id', auth()->id())->get();
        $playgrounds = Play_ground::where('user_id', auth()->id())->get();
        $shootings = Shooting_Spot::where('user_id', auth()->id())->get();
        $picnics = Picnic_Spot::where('user_id', auth()->id())->get();
        $exibutions = Exibution_Center::where('user_id', auth()->id())->get();
        $rooftops = Rooftop::where('user_id', auth()->id())->get();
        $bilboards = Bilboard::where('user_id', auth()->id())->get();
        $marketing = marketing::where('e_date', '<=', Carbon::today())->get();


        return view('frontend.layouts.profile', compact('users', 'rooms', 'bilboards', 'ghats', 'buildings', 'communities', 'exibutions', 'factories', 'flats', 'hostels', 'hotels', 'offices', 'playgrounds', 'ponds', 'retaurants', 'rooftops', 'shootings', 'shops', 'swimmings', 'lands', 'warehouses', 'parkings', 'picnics','marketing'));
    }
    function post_ghat()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_ghat', compact('lists'));
    }
    function post_picnic()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_picnicspot', compact('lists'));
    }
    function post_building()
    {

        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_building', compact('lists'));
    }
    function post_bilboard()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_bilboard', compact('lists'));
    }

    function post_room()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_room', compact('lists'));
    }

    function post_hostel()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_hostel', compact('lists'));
    }

    function post_hotel()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_hotel', compact('lists'));
    }

    function post_flat()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_flat', compact('lists'));
    }

    function post_resort()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_resort', compact('lists'));
    }

    function post_parking_spot()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_parking_spot', compact('lists'));
    }

    function post_office()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_office', compact('lists'));
    }

    function post_community()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_community', compact('lists'));
    }

    function post_warehouse()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_warehouse', compact('lists'));
    }

    function post_land()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_land', compact('lists'));
    }

    function post_pond()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_pond', compact('lists'));
    }

    function post_swimmingpool()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_swimmingpool', compact('lists'));
    }

    function post_playground()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_playground', compact('lists'));
    }

    function post_shooting()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_shooting', compact('lists'));
    }

    function post_exhibution()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_exhibution', compact('lists'));
    }

    function post_rooftop()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_rooftop', compact('lists'));
    }

    function post_factory()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_factory', compact('lists'));
    }

    function post_shop()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('frontend.post_Rented_and_Wanted.post_shop', compact('lists'));
    }

    function user_edit($id)
        {
            $list = User::findOrFail($id);
            return view('frontend.user.user_edit', compact('list'));
        }
    //ghat
    function post_ghat_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "ghat" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/ghats/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "ghat" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/ghats/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "ghat" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/ghats/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "ghat" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/ghats/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "ghat" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/ghats/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "ghat" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/ghats/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "ghat" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/ghats/" . $filename6), 100);
                }
            }

            Ghat::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'price' => $request->price,
                'description' => $request->description,
                'y_price' => $request->y_price,
                'address' => $request->address,
                'toilet' => $request->toilet,
                'parking' => $request->parking,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Ghat information have been successfully Added.');
    }
    function post_ghat_wanted(Request $request)
    {


            $ghat = Ghat::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'price' => $request->price,
                'description' => $request->description,
                'y_price' => $request->y_price,
                'address' => $request->address,
                'toilet' => $request->toilet,
                'parking' => $request->parking,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Ghat information have been successfully Added.');

    }
    //end ghat

    //picnic
    function post_picnic_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "picnic" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/picnics/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "picnic" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/picnics/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "picnic" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/picnics/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "picnic" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/picnics/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "picnic" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/picnics/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "picnic" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/picnics/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "picnic" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/picnics/" . $filename6), 100);
                }
            }

            Picnic_Spot::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'address' => $request->address,
                'description' => $request->description,
                'land_area' => $request->land_area,
                'price' => $request->price,
                'generator' => $request->generator,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'shed' => $request->shed,
                'dining' => $request->dining,
                'toilet' => $request->toilet,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'change_room' => $request->change_room,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Picnic information have been successfully Added.');

    }
    function post_picnic_wanted(Request $request)
    {

            $picnic = Picnic_Spot::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'address' => $request->address,
                'description' => $request->description,
                'land_area' => $request->land_area,
                'generator' => $request->generator,
                'price' => $request->price,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'shed' => $request->shed,
                'dining' => $request->dining,
                'toilet' => $request->toilet,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'change_room' => $request->change_room,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Picnic information have been successfully Added.');

    }
    //end picnic
    function post_hotel_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "hotel" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/hotels/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "hotel" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/hotels/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "hotel" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/hotels/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "hotel" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/hotels/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "hotel" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/hotels/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "hotel" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/hotels/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "hotel" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/hotels/" . $filename6), 100);
                }
            }
            Hotel::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'date' => $request->date,
                'phone' => $request->phone,
                's_charge' => $request->s_charge,
                'description' => $request->description,
                'hotel_name' => $request->hotel_name,
                'location' => $request->location,
                'room_type' => $request->room_type,
                'bathroom' => $request->bathroom,
                'wifi' => $request->wifi,
                'lift' => $request->lift,
                'hot_water' => $request->hot_water,
                'generator' => $request->generator,
                'parking' => $request->parking,
                'ac' => $request->ac,
                'laundry' => $request->laundry,
                'price' => $request->price,
                'gym' => $request->gym,
                'sports' => $request->sports,
                'dining' => $request->dining,
                'fire_exit' => $request->fire_exit,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Hotel information have been successfully Added.');

    }

    function post_hotel_wanted(Request $request)
    {
            $hotel = Hotel::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'date' => $request->date,
                'phone' => $request->phone,
                's_charge' => $request->s_charge,
                'description' => $request->description,
                'hotel_name' => $request->hotel_name,
                'location' => $request->location,
                'hot_water' => $request->hot_water,
                'generator' => $request->generator,
                'room_type' => $request->room_type,
                'bathroom' => $request->bathroom,
                'wifi' => $request->wifi,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'ac' => $request->ac,
                'laundry' => $request->laundry,
                'price' => $request->price,
                'gym' => $request->gym,
                'sports' => $request->sports,
                'dining' => $request->dining,
                'fire_exit' => $request->fire_exit,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Hotel information have been successfully Added.');

    }
    //building
    function post_building_rented(Request $request)
    {
            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "building" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/buildings/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "building" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/buildings/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "building" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/buildings/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "building" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/buildings/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "building" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/buildings/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "building" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/buildings/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "building" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/buildings/" . $filename6), 100);
                }
            }

            Building::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'date' => $request->date,
                'phone' => $request->phone,
                'price' => $request->price,
                'building_name' => $request->building_name,
                'building_size' => $request->building_size,
                'floor' => $request->floor,
                'floor_size' => $request->floor_size,
                's_charge' => $request->s_charge,
                'generator' => $request->generator,
                'road_width' => $request->road_width,
                'description' => $request->description,
                't_build' => $request->t_build,
                'address' => $request->address,
                'gas' => $request->gas,
                'water' => $request->water,
                'electricity' => $request->electricity,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'fire_exit' => $request->fire_exit,
                'address' => $request->address,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Building information have been successfully Added.');

    }
    function post_building_wanted(Request $request)
    {
            $building = Building::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'date' => $request->date,
                'phone' => $request->phone,
                'price' => $request->price,
                'building_name' => $request->building_name,
                'building_size' => $request->building_size,
                'floor' => $request->floor,
                'floor_size' => $request->floor_size,
                's_charge' => $request->s_charge,
                't_build' => $request->t_build,
                'generator' => $request->generator,
                'road_width' => $request->road_width,
                'description' => $request->description,
                'address' => $request->address,
                'gas' => $request->gas,
                'water' => $request->water,
                'electricity' => $request->electricity,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'fire_exit' => $request->fire_exit,
                'address' => $request->address,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Building Wanted post successfully Added.');

    }
    //end building
    function post_flat_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "flat" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/flats/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "flat" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/flats/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "flat" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/flats/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "flat" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/flats/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "flat" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/flats/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "flat" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/flats/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "flat" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/flats/" . $filename6), 100);
                }
            }

            Flat::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                's_charge' => $request->s_charge,
                'description' => $request->description,
                'address' => $request->address,
                'flat_size' => $request->flat_size,
                'floor_level' => $request->floor_level,
                'bedrooms' => $request->bedrooms,
                'fire_exit' => $request->fire_exit,
                'description' => $request->description,
                'generator' => $request->generator,
                'drawing' => $request->drawing,
                'dining' => $request->dining,
                'varanda' => $request->varanda,
                'attached_toilet' => $request->attached_toilet,
                'ac' => $request->ac,
                'hot_water' => $request->hot_water,
                'cable_tv' => $request->cable_tv,
                'kitchen' => $request->kitchen,
                'wifi' => $request->wifi,
                'lift' => $request->lift,
                'furnished' => $request->furnished,
                'parking' => $request->parking,
                'gas' => $request->gas,
                'water' => $request->water,
                'electricity' => $request->electricity,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Flat information have been successfully Added.');

    }
    function post_flat_wanted(Request $request)
    {
            $flat = Flat::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                's_charge' => $request->s_charge,
                'description' => $request->description,
                'address' => $request->address,
                'flat_size' => $request->flat_size,
                'floor_level' => $request->floor_level,
                'bedrooms' => $request->bedrooms,
                'fire_exit' => $request->fire_exit,
                'description' => $request->description,
                'generator' => $request->generator,
                'drawing' => $request->drawing,
                'dining' => $request->dining,
                'varanda' => $request->varanda,
                'attached_toilet' => $request->attached_toilet,
                'ac' => $request->ac,
                'hot_water' => $request->hot_water,
                'cable_tv' => $request->cable_tv,
                'kitchen' => $request->kitchen,
                'wifi' => $request->wifi,
                'lift' => $request->lift,
                'furnished' => $request->furnished,
                'parking' => $request->parking,
                'gas' => $request->gas,
                'water' => $request->water,
                'electricity' => $request->electricity,
                'price' => $request->price,
                'active' => 1,
                'created_at' => Carbon::now()
            ]);
            return back()->with('success', 'Flat information have been successfully Added.');

    }

    function post_parking_spot_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "garage" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/garages/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "garage" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/garages/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "garage" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/garages/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "garage" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/garages/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "garage" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/garages/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "garage" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/garages/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "garage" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/garages/" . $filename6), 100);
                }
            }

            Parking_Spot::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'price' => $request->price,
                'floor_level' => $request->floor_level,
                'floor_height' => $request->floor_height,
                'vehicle_type' => $request->vehicle_type,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Garage information have been successfully Added.');

    }
    function post_parking_spot_wanted(Request $request)
    {

            $parking = Parking_Spot::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'price' => $request->price,
                'floor_level' => $request->floor_level,
                'floor_height' => $request->floor_height,
                'vehicle_type' => $request->vehicle_type,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);
            return back()->with('success', 'Garage information have been successfully Added.');

    }
    function post_room_rented(Request $request)
    {
            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "room" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/rooms/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "room" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/rooms/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "room" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/rooms/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "room" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/rooms/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "room" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/rooms/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "room" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/rooms/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "room" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/rooms/" . $filename6), 100);
                }
            }
            Room::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'price' => $request->price,
                's_charge' => $request->s_charge,
                'room_size' => $request->room_size,
                'furnished' => $request->furnished,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'attached_toilet' => $request->attached_toilet,
                'hot_water' => $request->hot_water,
                'varanda' => $request->varanda,
                'generator' => $request->generator,
                'guest_count' => $request->guest_count,
                'ac' => $request->ac,
                'wifi' => $request->wifi,
                'cable_tv' => $request->cable_tv,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Room information have been successfully Added.');

    }
    function post_room_wanted(Request $request)
    {
            $parking = Room::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'price' => $request->price,
                's_charge' => $request->s_charge,
                'room_size' => $request->room_size,
                'furnished' => $request->furnished,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'attached_toilet' => $request->attached_toilet,
                'hot_water' => $request->hot_water,
                'generator' => $request->generator,
                'ac' => $request->ac,
                'wifi' => $request->wifi,
                'cable_tv' => $request->cable_tv,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Room information have been successfully Added.');

    }



    function post_hostel_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "hostel" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/hostels/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "hostel" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/hostels/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "hostel" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/hostels/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "hostel" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/hostels/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "hostel" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/hostels/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "hostel" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/hostels/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "hostel" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/hostels/" . $filename6), 100);
                }
            }
            Hostel::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'hostel_name' => $request->hostel_name,
                'address' => $request->address,
                'room_size' => $request->room_size,
                'room_type' => $request->room_type,
                'generator' => $request->generator,
                'attached_toilet' => $request->attached_toilet,
                'hot_water' => $request->hot_water,
                'laundry' => $request->laundry,
                'ac' => $request->ac,
                'pool' => $request->pool,
                'wifi' => $request->wifi,
                'lift' => $request->lift,
                'spa' => $request->spa,
                'furnished' => $request->furnished,
                'parking' => $request->parking,
                'gym' => $request->gym,
                'sports' => $request->sports,
                'dining' => $request->dining,
                'price' => $request->price,
                's_charge' => $request->s_charge,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);
            return back()->with('success', 'Hostel Rented post successfully Added.');

    }
    public function post_hostel_wanted(Request $request)
    {

            $hostel = Hostel::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'hostel_name' => $request->hostel_name,
                'address' => $request->address,
                'room_size' => $request->room_size,
                'room_type' => $request->room_type,
                'generator' => $request->generator,
                'attached_toilet' => $request->attached_toilet,
                'hot_water' => $request->hot_water,
                'laundry' => $request->laundry,
                'ac' => $request->ac,
                'pool' => $request->pool,
                'wifi' => $request->wifi,
                'lift' => $request->lift,
                'spa' => $request->spa,
                'furnished' => $request->furnished,
                'parking' => $request->parking,
                'gym' => $request->gym,
                'sports' => $request->sports,
                'dining' => $request->dining,
                'price' => $request->price,
                's_charge' => $request->s_charge,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);
            return back()->with('success', 'Hostel Wanted post successfully Added.');

    }
    function post_office_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "office" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/offices/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "office" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/offices/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "office" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/offices/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "office" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/offices/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "office" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/offices/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "office" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/offices/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "office" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/offices/" . $filename6), 100);
                }
            }

            Office::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                's_charge' => $request->s_charge,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'road_width' => $request->road_width,
                'interior_condition' => $request->interior_condition,
                'price' => $request->price,
                'fire_safety' => $request->fire_safety,
                'lift' => $request->lift,
                'ac' => $request->ac,
                'parking' => $request->parking,
                'generator' => $request->generator,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);


            return back()->with('success', 'office information have been successfully Added.');

    }
    function post_office_wanted(Request $request)
    {
            $office = Office::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'road_width' => $request->road_width,
                's_charge' => $request->s_charge,
                'generator' => $request->generator,
                'interior_condition' => $request->interior_condition,
                'fire_safety' => $request->fire_safety,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'office information have been successfully Added.');

    }

    function post_land_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "land" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/lands/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "land" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/lands/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "land" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/lands/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "land" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/lands/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "land" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/lands/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "land" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/lands/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "land" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/lands/" . $filename6), 100);
                }
            }

            Land::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'land_area' => $request->land_area,
                'land_height' => $request->land_height,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'y_price' => $request->y_price,
                'drainage_system' => $request->drainage_system,
                'parking' => $request->parking,
                'road_width' => $request->road_width,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Land information have been successfully Added.');

    }
    function post_land_wanted(Request $request)
    {
            $land = Land::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'land_area' => $request->land_area,
                'land_height' => $request->land_height,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'y_price' => $request->y_price,
                'water' => $request->water,
                'drainage_system' => $request->drainage_system,
                'parking' => $request->parking,
                'road_width' => $request->road_width,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Land information have been successfully Added.');

    }
    function post_exibution_center_rented(Request $request)
    {
            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "exhibution" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/exhibutions/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "exhibution" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/exhibutions/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "exhibution" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/exhibutions/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "exhibution" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/exhibutions/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "exhibution" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/exhibutions/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "exhibution" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/exhibutions/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "exhibution" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/exhibutions/" . $filename6), 100);
                }
            }

            Exibution_Center::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'interior_condition' => $request->interior_condition,
                'room_size' => $request->room_size,
                'room_type' => $request->room_type,
                'road_width' => $request->road_width,
                'generator' => $request->generator,
                'floor_level' => $request->floor_level,
                'toilet' => $request->toilet,
                'lift' => $request->lift,
                'fire_exit' => $request->fire_exit,
                'parking' => $request->parking,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);


            return back()->with('success', 'exibution_center information have been successfully Added.');

    }

    function post_exibution_center_wanted(Request $request)
    {
            $exibution_center = Exibution_Center::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'generator' => $request->generator,
                'interior_condition' => $request->interior_condition,
                'room_size' => $request->room_size,
                'room_type' => $request->room_type,
                'road_width' => $request->road_width,
                'floor_level' => $request->floor_level,
                'toilet' => $request->toilet,
                'lift' => $request->lift,
                'fire_exit' => $request->fire_exit,
                'parking' => $request->parking,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'exibution_center information have been successfully Added.');

    }
    function post_playground_rented(Request $request)
    {
            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "playground" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/playgrounds/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "playground" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/playgrounds/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "playground" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/playgrounds/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "playground" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/playgrounds/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "playground" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/playgrounds/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "playground" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/playgrounds/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "playground" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/playgrounds/" . $filename6), 100);
                }
            }

            Play_ground::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'area' => $request->area,
                'description' => $request->description,
                'address' => $request->address,
                'shed' => $request->shed,
                'toilet' => $request->toilet,
                'change_room' => $request->change_room,
                'generator' => $request->generator,
                'gym' => $request->gym,
                'parking' => $request->parking,
                'sports' => $request->sports,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Camp Site information have been successfully Added.');

    }

    function post_playground_wanted(Request $request)
    {
            $playground = Play_ground::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'area' => $request->area,
                'description' => $request->description,
                'address' => $request->address,
                'shed' => $request->shed,
                'toilet' => $request->toilet,
                'generator' => $request->generator,
                'change_room' => $request->change_room,
                'gym' => $request->gym,
                'parking' => $request->parking,
                'sports' => $request->sports,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Camp Site information have been successfully Added.');

    }
    function post_restuarant_rented(Request $request)
    {
            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "resturent" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/resturents/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "resturent" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/resturents/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "resturent" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/resturents/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "resturent" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/resturents/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "resturent" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/resturents/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "resturent" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/resturents/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "resturent" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/resturents/" . $filename6), 100);
                }
            }
            Restaurant::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'resort_name' => $request->resort_name,
                'address' => $request->address,
                'room_type' => $request->room_type,
                'attached_toilet' => $request->attached_toilet,
                'hot_water' => $request->hot_water,
                'generator' => $request->generator,
                'laundry' => $request->laundry,
                'ac' => $request->ac,
                'wifi' => $request->wifi,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'dining' => $request->dining,
                'sports' => $request->sports,
                'gym' => $request->gym,
                'spa' => $request->spa,
                'swimmingpool' => $request->swimmingpool,
                'price' => $request->price,
                's_charge' => $request->s_charge,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Resort information have been successfully Added.');

    }
    function post_restuarant_wanted(Request $request)
    {
            $restaurant = Restaurant::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'resort_name' => $request->resort_name,
                'address' => $request->address,
                'room_type' => $request->room_type,
                'generator' => $request->generator,
                'attached_toilet' => $request->attached_toilet,
                'hot_water' => $request->hot_water,
                'laundry' => $request->laundry,
                'ac' => $request->ac,
                'wifi' => $request->wifi,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'dining' => $request->dining,
                'sports' => $request->sports,
                'gym' => $request->gym,
                'spa' => $request->spa,
                'swimmingpool' => $request->swimmingpool,
                'price' => $request->price,
                's_charge' => $request->s_charge,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Resort information have been successfully Added.');

    }
    function post_rooftop_rented(Request $request)
    {
            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "rooftop" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/rooftops/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "rooftop" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/rooftops/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "rooftop" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/rooftops/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "rooftop" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/rooftops/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "rooftop" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/rooftops/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "rooftop" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/rooftops/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "rooftop" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/rooftops/" . $filename6), 100);
                }
            }

            Rooftop::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_area' => $request->floor_area,
                'generator' => $request->generator,
                'toilet' => $request->toilet,
                'shed' => $request->shed,
                'p_protection' => $request->p_protection,
                'lift' => $request->lift,
                'water' => $request->water,
                'electricity' => $request->electricity,
                'parking' => $request->parking,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Rooftop information have been successfully Added.');

    }

    function post_rooftop_wanted(Request $request)
    {
            $rooftop = Rooftop::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'generator' => $request->generator,
                'address' => $request->address,
                'floor_area' => $request->floor_area,
                'toilet' => $request->toilet,
                'shed' => $request->shed,
                'p_protection' => $request->p_protection,
                'lift' => $request->lift,
                'water' => $request->water,
                'electricity' => $request->electricity,
                'parking' => $request->parking,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Rooftop information have been successfully Added.');

    }
    function post_bilboard_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "bilboard" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/bilboards/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "bilboard" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/bilboards/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "bilboard" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/bilboards/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "bilboard" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/bilboards/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "bilboard" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/bilboards/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "bilboard" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/bilboards/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "bilboard" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/bilboards/" . $filename6), 100);
                }
            }

            Bilboard::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'type' => $request->type,
                'address' => $request->address,
                'size' => $request->size,
                'hieght' => $request->hieght,
                'electricity' => $request->electricity,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Billboard rented Post successfully Added.');

    }
    public function post_bilboard_wanted(Request $request)
    {

            $bilboard = Bilboard::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'type' => $request->type,
                'address' => $request->address,
                'size' => $request->size,
                'hieght' => $request->hieght,
                'electricity' => $request->electricity,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);
            return back()->with('success', 'Billboard Wanted Post successfully Added.');

    }
    function post_swimmingpool_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "swimmingpool" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/swimmingpools/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "swimmingpool" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/swimmingpools/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "swimmingpool" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/swimmingpools/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "swimmingpool" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/swimmingpools/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "swimmingpool" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/swimmingpools/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "swimmingpool" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/swimmingpools/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "swimmingpool" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/swimmingpools/" . $filename6), 100);
                }
            }

            Swimming_Pool::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'type' => $request->type,
                'address' => $request->address,
                'size' => $request->size,
                'toilet' => $request->toilet,
                'wifi' => $request->wifi,
                'shed' => $request->shed,
                'laundry' => $request->laundry,
                'change_room' => $request->change_room,
                'generator' => $request->generator,
                'parking' => $request->parking,
                'laundry' => $request->laundry,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);


            return back()->with('success', 'swimmingpool Rented successfully Added.');

    }
    public function post_swimmingpool_wanted(Request $request)
    {

            $swimmingpool = Swimming_Pool::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'type' => $request->type,
                'address' => $request->address,
                'size' => $request->size,
                'toilet' => $request->toilet,
                'wifi' => $request->wifi,
                'shed' => $request->shed,
                'generator' => $request->generator,
                'laundry' => $request->laundry,
                'change_room' => $request->change_room,
                'parking' => $request->parking,
                'laundry' => $request->laundry,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);
            return back()->with('success', 'swimmingpool Wanted Post successfully Added.');

    }
    function post_pond_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "pond" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/ponds/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "pond" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/ponds/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "pond" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/ponds/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "pond" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/ponds/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "pond" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/ponds/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "pond" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/ponds/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "pond" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/ponds/" . $filename6), 100);
                }
            }


            Pond::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'pond_area' => $request->pond_area,
                'water_level' => $request->water_level,
                'road_width' => $request->road_width,
                'y_price' => $request->y_price,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);


            return back()->with('success', 'Pond information have been successfully Added.');

    }

    function post_pond_wanted(Request $request)
    {

            $pond = Pond::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'pond_area' => $request->pond_area,
                'water_level' => $request->water_level,
                'road_width' => $request->road_width,
                'y_price' => $request->y_price,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Pond information have been successfully Added.');

    }
    function post_warehouse_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "warehouse" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/warehouses/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "warehouse" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/warehouses/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "warehouse" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/warehouses/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "warehouse" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/warehouses/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "warehouse" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/warehouses/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "warehouse" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/warehouses/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "warehouse" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/warehouses/" . $filename6), 100);
                }
            }

            Warehouse::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'description' => $request->description,
                'ac' => $request->ac,
                'type' => $request->type,
                'generator' => $request->generator,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'road_width' => $request->road_width,
                'building_condition' => $request->building_condition,
                'fire_safety' => $request->fire_safety,
                'lift' => $request->lift,
                'drainage_system' => $request->drainage_system,
                'parking' => $request->parking,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'warehouse Rent Post successfully Added.');

    }
    function post_warehouse_wanted(Request $request)
    {

            $warehouse = Warehouse::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'description' => $request->description,
                'type' => $request->type,
                'ac' => $request->ac,
                'generator' => $request->generator,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'road_width' => $request->road_width,
                'building_condition' => $request->building_condition,
                'fire_safety' => $request->fire_safety,
                'lift' => $request->lift,
                'drainage_system' => $request->drainage_system,
                'parking' => $request->parking,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'warehouse Wanted Post successfully Added.');

    }
    function post_factory_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "factory" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/factories/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "factory" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/factories/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "factory" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/factories/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "factory" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/factories/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "factory" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/factories/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "factory" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/factories/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "factorie" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/factories/" . $filename6), 100);
                }
            }

            Factory::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'floor_height' => $request->floor_height,
                'road_width' => $request->road_width,
                'generator' => $request->generator,
                'fire_safety' => $request->fire_safety,
                'electricity' => $request->electricity,
                'ac' => $request->ac,
                'gas' => $request->gas,
                'water' => $request->water,
                'lift' => $request->lift,
                'drainage_system' => $request->drainage_system,
                'parking' => $request->parking,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Factory information have been successfully Added.');

    }

    function post_factory_wanted(Request $request)
    {

            $factory = Factory::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'road_width' => $request->road_width,
                'generator' => $request->generator,
                'fire_safety' => $request->fire_safety,
                'electricity' => $request->electricity,
                'ac' => $request->ac,
                'floor_height' => $request->floor_height,
                'gas' => $request->gas,
                'water' => $request->water,
                'lift' => $request->lift,
                'drainage_system' => $request->drainage_system,
                'parking' => $request->parking,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Factory information have been successfully Added.');
        }

    function post_shop_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "shop" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/shops/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "shop" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/shops/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "shop" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/shops/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "shop" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/shops/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "shop" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/shops/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "shop" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/shops/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "shop" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/shops/" . $filename6), 100);
                }
            }
            Shop::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'road_width' => $request->road_width,
                'fire_safety' => $request->fire_safety,
                'generator' => $request->generator,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Shop information have been successfully Added.');

    }
    function post_shop_wanted(Request $request)
    {

            $shop = Shop::create([

                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'generator' => $request->generator,
                'road_width' => $request->road_width,
                'fire_safety' => $request->fire_safety,
                'lift' => $request->lift,
                'parking' => $request->parking,
                'electricity' => $request->electricity,
                'gas' => $request->gas,
                'water' => $request->water,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);


            return back()->with('success', 'Shop information have been successfully Added.');

    }
    function post_shooting_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "shooting" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/shootings/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "shooting" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/shootings/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "shooting" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/shootings/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "shooting" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/shootings/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "shooting" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/shootings/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "shooting" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/shootings/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "shooting" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/shootings/" . $filename6), 100);
                }
            }

            Shooting_Spot::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_area' => $request->floor_area,
                'road_width' => $request->road_width,
                'dining' => $request->dining,
                'water' => $request->water,
                'lift' => $request->lift,
                'generator' => $request->generator,
                'shed' => $request->shed,
                'gas' => $request->gas,
                'toilet' => $request->toilet,
                'electricity' => $request->electricity,
                'change_room' => $request->change_room,
                'parking' => $request->parking,
                'price' => $request->price,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Shooting Spot information have been successfully Added.');

    }



    function post_shooting_wanted(Request $request)
    {

            $shooting = Shooting_Spot::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_area' => $request->floor_area,
                'road_width' => $request->road_width,
                'dining' => $request->dining,
                'water' => $request->water,
                'lift' => $request->lift,
                'shed' => $request->shed,
                'generator' => $request->generator,
                'gas' => $request->gas,
                'toilet' => $request->toilet,
                'electricity' => $request->electricity,
                'change_room' => $request->change_room,
                'parking' => $request->parking,
                'price' => $request->price,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Shooting Spot information have been successfully Added.');

    }
    function post_community_rented(Request $request)
    {

            $filename = '';
            $filename1 = '';
            $filename2 = '';
            $filename3 = '';
            $filename4 = '';
            $filename5 = '';
            $filename6 = '';
            // store photo
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                if ($file->isValid()) {
                    $filename = "community" . date('Ymdhms') . rand(1, 100) . '-' . $file->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/communities/" . $filename), 100);
                }
            }
            // store photo1
            if ($request->hasFile('photo1')) {
                $file1 = $request->file('photo1');
                if ($file1->isValid()) {
                    $filename1 = "community" . date('Ymdhms') . rand(1, 100) . '-' . $file1->getClientOriginalExtension();
                    Image::make($file->getRealPath())->save(base_path("public/uploads/communities/" . $filename1), 100);
                }
            }
            // store photo2
            if ($request->hasFile('photo2')) {
                $file2 = $request->file('photo2');
                if ($file2->isValid()) {
                    $filename2 = "community" . date('Ymdhms') . rand(1, 100) . '-' . $file2->getClientOriginalExtension();
                    Image::make($file2->getRealPath())->save(base_path("public/uploads/communities/" . $filename2), 100);
                }
            }
            // store photo3
            if ($request->hasFile('photo3')) {
                $file3 = $request->file('photo3');
                if ($file3->isValid()) {
                    $filename3 = "community" . date('Ymdhms') . rand(1, 100) . '-' . $file3->getClientOriginalExtension();
                    Image::make($file3->getRealPath())->save(base_path("public/uploads/communities/" . $filename3), 100);
                }
            }
            // store photo4
            if ($request->hasFile('photo4')) {
                $file4 = $request->file('photo4');
                if ($file4->isValid()) {
                    $filename4 = "community" . date('Ymdhms') . rand(1, 100) . '-' . $file4->getClientOriginalExtension();
                    Image::make($file4->getRealPath())->save(base_path("public/uploads/communities/" . $filename4), 100);
                }
            }
            // store photo5
            if ($request->hasFile('photo5')) {
                $file5 = $request->file('photo5');
                if ($file5->isValid()) {
                    $filename5 = "community" . date('Ymdhms') . rand(1, 100) . '-' . $file5->getClientOriginalExtension();
                    Image::make($file5->getRealPath())->save(base_path("public/uploads/communities/" . $filename5), 100);
                }
            }
            // store photo6
            if ($request->hasFile('photo6')) {
                $file6 = $request->file('photo6');
                if ($file6->isValid()) {
                    $filename6 = "community" . date('Ymdhms') . rand(1, 100) . '-' . $file6->getClientOriginalExtension();
                    Image::make($file6->getRealPath())->save(base_path("public/uploads/communities/" . $filename6), 100);
                }
            }
            Community_Center::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'road_width' => $request->road_width,
                'generator' => $request->generator,
                'seat' => $request->seat,
                'interior_condition' => $request->interior_condition,
                'fire_safety' => $request->fire_safety,
                'lift' => $request->lift,
                'wifi' => $request->wifi,
                'parking' => $request->parking,
                'gas' => $request->gas,
                'water' => $request->water,
                'electricity' => $request->electricity,
                'ac' => $request->ac,
                'price' => $request->price,
                's_charge' => $request->s_charge,
                'photo' => $filename,
                'photo1' => $filename1,
                'photo2' => $filename2,
                'photo3' => $filename3,
                'photo4' => $filename4,
                'photo5' => $filename5,
                'photo6' => $filename6,
                'video' => $request->video,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Community Center information have been successfully Added.');

    }

    function post_community_wanted(Request $request)
    {

            $community = Community_Center::create([
                'user_id' => $request->user_id,
                'post_type' => $request->post_type,
                'title' => $request->title,
                'date' => $request->date,
                'phone' => $request->phone,
                'description' => $request->description,
                'address' => $request->address,
                'floor_level' => $request->floor_level,
                'floor_size' => $request->floor_size,
                'road_width' => $request->road_width,
                'seat' => $request->seat,
                'interior_condition' => $request->interior_condition,
                'fire_safety' => $request->fire_safety,
                'generator' => $request->generator,
                'lift' => $request->lift,
                'wifi' => $request->wifi,
                'parking' => $request->parking,
                'gas' => $request->gas,
                'water' => $request->water,
                'electricity' => $request->electricity,
                'ac' => $request->ac,
                'price' => $request->price,
                's_charge' => $request->s_charge,
                'active' => 1,
                'created_at'   => Carbon::now()
            ]);

            return back()->with('success', 'Community Center information have been successfully Added.');

    }


    //post delete method
    function image_delete($model,$id,$path,$image_col,$image_name)
    {
        // $t = strtolower($model);
        // $tt = $t."s";
        // $destination = 'public/uploads/'.$tt.'/'.$image_name;
        // $image_Path = public_path("\uploads\\{$path}\\").$image_name;
        // dd($t,$tt,$destination,$image_Path);
        $modal_name="App\Models\\{$model}";
        $list = $modal_name::find($id);
        $image_Path = public_path("\uploads\\{$path}\\").$image_name;
        if (File::exists($image_Path)) {
            File::delete($image_Path);
        } 
        $list->update([
            $image_col=> null
        ]);
        return back();
    }


    function picnic_delete($id)
    {
        $list = Picnic_Spot::findOrFail($id)->delete();
        return back();
    }
    function ghat_delete($id)
    {
        $list = Ghat::findOrFail($id)->delete();
        return back();
    }
    function pond_delete($id)
    {
        $list = Pond::findOrFail($id)->delete();
        return back();
    }
    function building_delete($id)
    {
        $list = Building::findOrFail($id)->delete();
        return back();
    }
    function swimmingpool_delete($id)
    {
        $list = Swimming_Pool::findOrFail($id)->delete();
        return back();
    }
    function bilboard_delete($id)
    {
        $list = Bilboard::findOrFail($id)->delete();
        return back();
    }
    function rooftop_delete($id)
    {
        $list = Rooftop::findOrFail($id)->delete();
        return back();
    }
    function restuarant_delete($id)
    {
        $list = Restaurant::findOrFail($id)->delete();
        return back();
    }
    function exibution_center_delete($id)
    {
        $list = Exibution_Center::findOrFail($id)->delete();
        return back();
    }
    function playground_delete($id)
    {
        $list = Play_ground::findOrFail($id)->delete();
        return back();
    }
    function shop_delete($id)
    {
        $list = Shop::findOrFail($id)->delete();
        return back();
    }

    function shooting_delete($id)
    {
        $list = Shooting_Spot::findOrFail($id)->delete();
        return back();
    }
    function community_delete($id)
    {
        $list = Community_Center::findOrFail($id)->delete();
        return back();
    }
    function land_delete($id)
    {
        $list = Land::findOrFail($id)->delete();
        return back();
    }
    function office_delete($id)
    {
        $list = Office::findOrFail($id)->delete();
        return back();
    }

    function hostel_delete($id)
    {
        $list = Hostel::findOrFail($id)->delete();
        return back();
    }
    function parking_spot_delete($id)
    {
        $list = Parking_Spot::findOrFail($id)->delete();
        return back();
    }
    function flat_delete($id)
    {
        $list = Flat::findOrFail($id)->delete();
        return back();
    }
    function room_delete($id)
    {
        $list = Room::findOrFail($id)->delete();
        return back();
    }
    function hotel_delete($id)
    {
        $list = Hotel::findOrFail($id)->delete();
        return back();
    }
    function factory_delete($id)
    {
        $list = Factory::findOrFail($id)->delete();
        return back();
    }
    function warehouse_delete($id)
    {
        $list = Warehouse::findOrFail($id)->delete();
        return back();
    }
    public function Form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'package' => 'required',
            'company_name' => 'required',
            'company_address' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput()->with('error', 'Fillup the form Correctly.');
        } else {
            forms::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'package' => $request->package,
                'company_name' => $request->company_name,
                'massage' => $request->massage,
                'company_address' => $request->company_address,
            ]);
            return redirect()->back()->with('success', 'Form Submited. Authority Will contact with you.');
        }
    }
}
