<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Phoneotp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Image;

class LoginApiController extends Controller
{
  public function sendResponse($result, $message)
  {
    $response = [
      'success' => true,
      'data'    => $result,
      'message' => $message,
    ];
    return response()->json($response, 200);
  }
  public function sendError($error, $errorMessages = [], $code = 401)
  {
    $response = [
      'success' => false,
      'message' => $error,
    ];


    if (!empty($errorMessages)) {
      $response['data'] = $errorMessages;
    }


    return response()->json($response, $code);
  }
  public function register(Request $request)
  {

    $custom_id = User::latest('id')->first();

    if (empty($custom_id)) {
      $k = 0;
      //dd($k);
    } else {
      $k = $custom_id->id;
    }
    $k++;
    $i = $k;
    //dd($i);
    $n = $request->name;
    $date = date('dmY');
    $view = $n . $date . $i;
    //dd($view);

    $error = User::where('phone', $request->phone)->first();

    if ($error) {

      return $this->sendError('You already Have Account');
    } else {


      $auth = User::create([
        'unique_id' => $view,
        'name' => $request->name,
        'phone' => $request->phone,
        'photo' => $request->photo,
        'email' => $request->email,
        'nationality' => $request->nationality,
        'father_name' => $request->father_name,
        'mother_name' => $request->mother_name,
        'address' => $request->address,
        'date_of_birth' => $request->date_of_birth,
        'gender' => $request->gender,
        'n_photo1' => $request->n_photo1,
        'n_photo2' => $request->n_photo2,
        'role_id' => 2,
        'password' => Hash::make($request['password']),
        'fav_qt1' => $request->fav_qt1,
        'fav_ans1' => $request->fav_ans1,
        'terms' => 1
      ]);

      if ($request->file('photo')) {
        $file = $request->file('photo');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('uploads/registers/'), $filename);
        $auth['photo'] = $filename;
      }
      $auth->save();
      if ($request->file('n_photo1')) {
        $file = $request->file('n_photo1');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('uploads/registers/'), $filename);
        $auth['n_photo1'] = $filename;
      }
      $auth->save();
      if ($request->file('n_photo2')) {
        $file = $request->file('n_photo2');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('uploads/registers/'), $filename);
        $auth['n_photo2'] = $filename;
      }
      $auth->save();


      $success['token'] =  $auth->createToken('MyApp')->accessToken;
      $success['name'] =  $auth->name;
      $success['id'] =  $auth->id;
      $success['phone'] =  $auth->phone;
      $success['email'] =  $auth->email;

      return $this->sendResponse($success, 'User register successfully.');
    }
  }

  /**
   * Login api
   *
   * @return \Illuminate\Http\Response
   */
  public function login(Request $request)
  {
    // dd($request->all());
    $validator = Validator::make($request->all(), [
      'phone' => 'required',
      'password' => 'required',
    ]);
    if ($validator->fails()) {
      return response(['errors' => $validator->errors()->all()], 422);
    }
    $user = User::where('phone', $request->phone)->first();

    if ($user) {
      if (Hash::check($request->password, $user->password)) {
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        $success['id'] =  $user->id;
        $success['phone'] =  $user->phone;
        $success['email'] =  $user->email;
        return $this->sendResponse($success, 'Log in successfully.');
      } else {
        $response = ["message" => "Password mismatch"];
        return response($response, 422);
      }
    } else {
      $response = ["message" => 'User does not exist'];
      return response($response, 422);
    }
  }


  /**
   * Otp api
   *
   */

  //sms api
  function send_sms($phone, $otp)
  {
    $url = "http://202.164.208.226/smsapi";
    $data = [
      "api_key" => "C20013386235902a575991.44900461",
      "type" => "text",
      "contacts" => "88" . $phone,
      "senderid" => "8809612442105",
      "msg" => "Your ToletX verification code " . $otp,
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
  }
  //end sms api

  public function sendOtp(Request $request)
  {

    $otp = rand(1000, 9999);
    $response = $this->send_sms($request->phone_number, $otp);
    $phone = Phoneotp::where('phone_number', '=', $request->phone_number)->first();
    // dd($phone);
    if ($phone == null) {
      $user = Phoneotp::create([
        'phone_number' => $request->phone_number,
        'otp' => $otp
      ]);
      $success['token'] =  $user->createToken('MyApp')->accessToken;
      $success['phone_number'] =  $user->phone_number;
      return $this->sendResponse($success, 'Otp send successfully.');
    } else {
      $phone->update([
        'otp' => $otp
      ]);
      $success['token'] =  $phone->createToken('MyApp')->accessToken;
      $success['phone_number'] =  $phone->phone_number;
      return $this->sendResponse($success, 'Otp send successfully.');
    }
  }

  /**
   * Otp match api
   *
   */

  public function loginWithOtp(Request $request)
  {


    $phoneinfo = Phoneotp::where('phone_number', $request->phone_number)->first();

    $time = Carbon::now()->diffInSeconds($phoneinfo->updated_at);
    if ($time > 300) {
      return redirect()->route('loginotp')->with('Failed', 'your time is up!! Enter your mobile number again');
    }
    if ($phoneinfo && $phoneinfo->otp == $request->otp) {
      $phoneinfo->update([
        'otp' => '',
        'isverified' => 1
      ]);
      $success['token'] =  $phoneinfo->createToken('MyApp')->accessToken;
      $success['isverified'] =  $phoneinfo->isverified;
      return $this->sendResponse($success, 'Number is verified.');
    } else {
      return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
    }
  }

  public function logout(Request $request)
  {
    $request->auth()->user()->token()->revoke();

    return response()->json([
      'message' => 'Successfully logged out'
    ]);
  }

  public function auth_check()
  {
    if (Auth::check()) {
      $user = Auth::user();
      $success['token'] =  $user->createToken('MyApp')->accessToken;
      $success['name'] =  $user->name;

      return $this->sendResponse($success, 'User is logged.');
    } else {
      return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
    }
  }
}
