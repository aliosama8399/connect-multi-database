 <?php

use Illuminate\Support\Facades\Route;

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
//   return \App\Models\User3::all();
//    return \Illuminate\Support\Facades\DB::connection('mysql3')->table('user3s')->get();
//    return \Illuminate\Support\Facades\DB::table('users')->get();

//    return \Illuminate\Support\Facades\DB::connection('mysql2')->table('posts2')->get();
//    return \Illuminate\Support\Facades\DB::table('posts1')->get();
   return \App\Models\post1::all();




}
);
