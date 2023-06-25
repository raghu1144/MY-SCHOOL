<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Contact\ContactusController;
use App\Http\Controllers\Frontend\Aboutus\AboutusController;
use App\Http\Controllers\Frontend\Index\IndexpageController;
use App\Http\Controllers\Frontend\Staffs\StaffsController;

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


// ROUTE FOR THE INDEX PAGE
// Route::prefix('index')->group(function(){
//     return view('Frontend.index');
//     // Route::get('/',[IndexpageController::class,'index']);
// });

Route::get('/', function () {
    return view('Frontend.index');
});

// START ROUTE FOR THE CONTACT PAGE  
Route::prefix('contact')->group(function(){
    Route::get('contactus', [ContactusController::class, 'index'])->name('contactpage');
});
// END ROUTE FOR THE CONTACT PAGE


// START ROUTE FOR THE ABOUT PAGE
Route::prefix('about')->group(function(){
    Route::get('/aboutus', [AboutusController::class, 'index'])->name('About');
});
// END ROUTE FOR THE CONTACT PAGE

// START ROUTE FOR THE ABOUT PAGE
Route::prefix('staffs')->group(function(){
    Route::get('/ourstaffs', [StaffsController::class, 'index'])->name('Ourstaff');
});
// END ROUTE FOR THE CONTACT PAGE