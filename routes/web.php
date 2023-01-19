<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


//Dashboard controller
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/edit/profile', [HomeController::class, 'edit_profile'])->name('edit.profile');

Route::post('/update/general_info', [HomeController::class, 'edit_general'])->name('update.info');
Route::post('/update/password', [HomeController::class, 'edit_password'])->name('update.password');
Route::post('/update/image', [HomeController::class, 'edit_image'])->name('update.image');


// front end home page
Route::get('', [PortfolioController::class, 'frontend_index'])->name('index');
Route::get('/header/name', [PortfolioController::class, 'details'])->name('details');
Route::post('/header/name/add/', [PortfolioController::class, 'details_store'])->name('insert.details');

Route::get('/about/me/', [PortfolioController::class, 'about'])->name('about');
Route::post('/about/store/', [PortfolioController::class, 'about_insert'])->name('about.store');

Route::get('/about/edit/{user_id}', [PortfolioController::class, 'about_edit'])->name('about.edit');

Route::post('/about/update/', [PortfolioController::class, 'about_update'])->name('about.update');

Route::get('/service/show/', [PortfolioController::class, 'service_show'])->name('service');

Route::post('/service/insert/', [PortfolioController::class, 'service_insert'])->name('service.insert');

Route::get('/portfolio/show/', [PortfolioController::class, 'portfolio_show'])->name('portfolio');

Route::post('/portfolio/insert/', [PortfolioController::class, 'portfolio_insert'])->name('portfolio.insert');

Route::get('/pricing/show/', [PortfolioController::class, 'pricing_show'])->name('pricing');

Route::post('/pricing/insert/', [PortfolioController::class, 'pricing_insert'])->name('insert.pricing.free');

Route::get('/pricing/premium/', [PortfolioController::class, 'pricing_premium'])->name('pricing.premium');

Route::post('/pricing/premium/insert', [PortfolioController::class, 'pricing_premium_insert'])->name('insert.premium');

Route::get('/pricing/gold', [PortfolioController::class, 'pricing_gold'])->name('pricing.gold');

Route::post('/pricing/gold/insert', [PortfolioController::class, 'pricing_gold_insert'])->name('insert.gold');







