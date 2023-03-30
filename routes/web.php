<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
}); 

Route::group(['middleware'=>['auth', 'role:cid', 'role:admin'  ]], function(){
Route::post('/investigations/{investigation}/edit', [InvestigationController::class, 'updateInvestigation'])->name('investigations.store');
Route::get('/investigation/create/{case}', [InvestigationController::class, 'create'])->name('investigations.create');

});

Route::get('/investigation/show/{investigation}', [InvestigationController::class, 'show'])->name('investigations.show');



Route::group(['middleware'=>['auth', 'role:admin','role:nco' ]], function(){
  Route::get('/investigation/{case}', [InvestigationController::class, 'assignCase'])->name('investigation.assign');
  Route::post('/investigations/', [InvestigationController::class, 'store'])->name('assign.store');
 
});


Route::group(['middleware'=>['auth', 'role:admin']], function(){
    //Route::get('/dashboard', [DashboardController ::class, 'index'])->name('dashboard');
    //Route::resource('/cases', CaseController::class);
    Route::get('/users', [UserController ::class, 'index'])->name('users.index');
});
// auth route for dashboard
Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard', [DashboardController ::class, 'index'])->name('dashboard');
    Route::resource('/cases', CaseController::class);
});


require __DIR__.'/auth.php';
