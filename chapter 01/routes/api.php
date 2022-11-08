<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// panggil endpoint ini dengan apps front end
// point 0 : handling Cross-Origin Resource Sharing (CORS)
Route::get('/user', function (Request $request) {
  $users = User::orderBy('created_at', 'DESC')->paginate(10);
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => $users
  ], 200);
});

// make migration
// add field gender, location, photo. make field nullable
// change field password to nullable
// make seeder users: name: arfin, male, arfin.mustofa@integra.co.id, [random_password], jakarta

// point 2 : login user
Route::delete('/user/login', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => [
      "token" => "ABC"
    ]
  ], 200);
});

// point 3 : create new user
Route::post('/user/create', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => "create"
  ], 200);
});

// point 4 : update new user
Route::post('/user/update', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => "update"
  ], 200);
});

// point 5 : delete new user
Route::delete('/user/delete', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => "delete"
  ], 200);
});

// point 6 : import new user / bulk insert
Route::post('/user/bulk-insert', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => "bulk"
  ], 200);
});

// point 7 : delete multiple user / bulk delete
Route::post('/user/bulk-delete', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => "delete"
  ], 200);
});

// point 8 : export user to excel, field: name, email, gender, location
Route::get('/user/export-excel', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => "excel"
  ], 200);
});

// point 9 : export user to pdf, field: name, email, gender, location
Route::get('/user/export-pdf', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => "pdf"
  ], 200);
});

// point 10 : upload a photo user, validation with max photo is 4MB
Route::get('/user/upload', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => "upload"
  ], 200);
});

// point 11 : send an email to user
// subject: TEST BE
// body: hello [name_user]
Route::get('/user/send-email/{id}', function (Request $request) {
  return response()->json([
    'code' => 200,
    'status' => true,
    'message' => "Success",
    'data' => "upload"
  ], 200);
});

// point 12 : make a kernel command / cronjob to send an email to user
// subject: Happy Birthday [name_user]
// body: semoga sehat selalu...
