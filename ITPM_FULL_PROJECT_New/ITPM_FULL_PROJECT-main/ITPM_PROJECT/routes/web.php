<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VegetableController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\PdfgenerateController;
use App\Http\Controllers\fDashboardController;
use App\Http\Controllers\deliverymanagementController;
use App\Http\Controllers\dDashboardController;
use App\Http\Controllers\reportController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RequirementsController;
use App\Http\Controllers\RequirementscreateController;
use App\Http\Controllers\AdRequirementsController;
use App\Http\Controllers\AreportController;
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


Route::get('/login', function () {
    return view('auth.login');
});

// Route::get('/login',[DashboardController::class, 'login']);
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/id',[StudentController::class, 'index'])->name('add');
Route::post('/save',[StudentController::class, 'save'])->name('save');
Route::resource('/product', ProductController::class);
Route::resource('/vegetable', VegetableController::class);
Route::get('/display',[ProductController::class, 'display'])->name('display');
Route::get('/pdf',[ProductController::class, 'pdf'])->name('pdf');
Route::get('/pexportpdf',[ProductController::class, 'exportpdf'])->name('report');
Route::get('/',[HomeController::class, 'index'])->name('add');

Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/tracking',[HomeController::class, 'tracking'])->name('tracking');
Route::get('/searchpr',[ProductController::class, 'search'])->name('search');


Route::resource('/farmer', FarmerController::class);
Route::resource('/fexportpdf', PdfgenerateController::class);
Route::get('/fdashboard', [App\Http\Controllers\fDashboardController::class, 'index'])->name('fdashboard');

Route::resource('/delivery', deliverymanagementController::class);
Route::resource('/ddashboard', dDashboardController::class);
//Export PDF
Route::resource('/exportpdf',reportController::class);



Route::get('/cdashboard', [App\Http\Controllers\cDashboardController::class, 'index'])->name('Addashboard');
Route::get('/ad-dashboard', [App\Http\Controllers\AdDashboardController::class, 'index'])->name('dashboard');
Route::resource('/add-req', RequirementscreateController::class);
Route::resource('/requirements', RequirementsController::class);
Route::resource('/ad-requirements', AdRequirementsController::class);
Route::resource('/generate-report', AreportController::class);


Auth::routes();
Route::get('/user/dashboard', [App\Http\Controllers\cHomeController::class, 'index'])->name('user-dashboard');
Route::get('/admin/dashboard', [App\Http\Controllers\cHomeController::class, 'adminHome'])->name('admin-dashboard')->middleware('is_admin');
