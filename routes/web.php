<?php

use App\Models\User;
use App\Libries\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
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

Route::get('/zz', [\App\Http\Controllers\UserController::class, 'index']);

Route::get('/', function () {



    /* JavaScript::put([
        'foo' => 'bar',
        'user' => User::first(),
        'age' => 29
    ]);
    
    return view('welcome'); */

    /* $sql = DB::table('users')->paginate(10);

    dd($sql->count()); */

    //dd(phpinfo());

    /* $test = new Test();

    dump($test);

    //dump($test->aa());
    dump($test->aa()->bb()); */
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

    handle(
        path: '/path/to/image.jpg',
        height: 500,
        width: 300
    );
});

function handle(string $path, int $height, int $width): void
{

    // logic for handling image processing

}

Route::group([
    'prefix' => 'admins',
], function () {
    Route::get('/', [AdminsController::class, 'index'])
         ->name('admins.admin.index');
    Route::get('/create', [AdminsController::class, 'create'])
         ->name('admins.admin.create');
    Route::get('/show/{admin}',[AdminsController::class, 'show'])
         ->name('admins.admin.show');
    Route::get('/{admin}/edit',[AdminsController::class, 'edit'])
         ->name('admins.admin.edit');
    Route::post('/', [AdminsController::class, 'store'])
         ->name('admins.admin.store');
    Route::put('admin/{admin}', [AdminsController::class, 'update'])
         ->name('admins.admin.update');
    Route::delete('/admin/{admin}',[AdminsController::class, 'destroy'])
         ->name('admins.admin.destroy');
});
