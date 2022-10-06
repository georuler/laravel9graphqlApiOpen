<?php

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    /* JavaScript::put([
        'foo' => 'bar',
        'user' => User::first(),
        'age' => 29
    ]);
    
    return view('welcome'); */

    $sql = DB::table('users')->paginate(10);

    dd($sql->count());
});


Route::get('/test', function () {
    //return view('welcome');
    /* $log = [
        'mgs' => 'zzz'
    ];
    Log::channel('mongodb')->info('{"zz":"zzz"}', $log->toJson()); */

    /* DB::connection("mongodb")
    ->collection("location")
    ->insert([
        [
            'name' => 'seoul',
            'num' => "02",
            "sigu" =>[
                "name"=>["중랑구","동대문구","구로구","강남구","중구"]
            ]
        ],
        [
            'name' => 'gyeonggi',
            'num' => "031",
            "sigu" =>[
                "name"=>["시흥시","성남시","남양주시","양주군","의정부시"]
            ]
        ],
        [
            'name' => 'busan',
            'num' => "051",
            "sigu"=>[
                "name"=> ["동구","서구","남구","북구","중구"]
            ]
        ],
    ]); */

   /*  $pdo = DB::connection('mongodb')->collection('logs')->insert([
        [
            'name' => 'seoul',
            'num' => "02",
            "sigu" =>[
                "name"=>["중랑구","동대문구","구로구","강남구","중구"]
            ]
        ],
        [
            'name' => 'gyeonggi',
            'num' => "031",
            "sigu" =>[
                "name"=>["시흥시","성남시","남양주시","양주군","의정부시"]
            ]
        ],
        [
            'name' => 'busan',
            'num' => "051",
            "sigu"=>[
                "name"=> ["동구","서구","남구","북구","중구"]
            ]
        ],
    ]);
    dd($pdo); */
});
