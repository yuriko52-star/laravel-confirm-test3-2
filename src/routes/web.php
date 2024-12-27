<?php
use App\Http\Controllers\Weight_logController;
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
    return view('welcome');
});
Route::middleware('auth')->group(function() {
    Route::get('/weight_logs',[Weight_logController::class,'index']);
});
Route::get('/login',function() {
    return view('auth.login');
});
// Route::get('/weight_logs',function() {
    // return view('weight_logs');
// })->middleware(['auth']);
