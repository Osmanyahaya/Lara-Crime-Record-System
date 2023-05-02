<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    return view('auth.login');
}); 

Route::group(['middleware'=>['auth', 'role:cid|admin'  ]], function(){
Route::post('/investigations/{investigation}/edit', [InvestigationController::class, 'updateInvestigation'])->name('investigations.store');
Route::get('/investigation/create/{case}', [InvestigationController::class, 'create'])->name('investigations.create');

});

Route::get('/investigation/show/{investigation}', [InvestigationController::class, 'show'])->name('investigations.show');



Route::group(['middleware'=>['auth', 'role:admin|nco' ]], function(){
  Route::get('/investigation/{case}', [InvestigationController::class, 'assignCase'])->name('investigation.assign');
  Route::post('/investigations/', [InvestigationController::class, 'store'])->name('assign.store');
 
});


Route::group(['middleware'=>['auth', 'role:admin']], function(){
    //Route::get('/dashboard', [DashboardController ::class, 'index'])->name('dashboard');
    //Route::resource('/cases', CaseController::class);
    Route::resource('/users', UserController ::class);
    Route::resource('/categories', CategoryController ::class);
    //Route::post('/users/{user}', [UserController ::class, 'destroy'])->name('users.destroy');
});
// auth route for dashboard
Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard', [DashboardController ::class, 'index'])->name('dashboard');
    Route::resource('/cases', CaseController::class);
});


require __DIR__.'/auth.php';
