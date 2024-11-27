<?php

use App\Models\Niche;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;

use App\Http\Controllers\userController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FemmeController;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\NicheController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactForm1Controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;
use OpenAdmin\Admin\Controllers\UserController as ControllersUserController;

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

Route::get('/hello',[DashboardController::class,'index'])->name('hello');;


Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class,'productDetails'])->name('shop.product.details');
Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/my-account',[userController::class,'index'])->name('user.index');
});
Route::middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});
/////////////////
Route::get('/femme/{id}', [FemmeController::class, 'addFemmetoCart'])->name('addfemme.to.cart');
Route::get('/shopping-cart', [FemmeController::class, 'femmeCart'])->name('shopping.cart');
Route::delete('/cart/delete-product', [FemmeController::class, 'deleteProduct'])->name('delete.cart.product');
// Routes/web.php
Route::get('/cart-user', [FemmeController::class, 'cartUser'])->name('cart.user');
Route::delete('/cart/delete-product-User', [FemmeController::class, 'deleteProductUser'])->name('delete.cart.product-User');

Route::post('/cart/transfer-status', [FemmeController::class, 'transferStatus'])->name('transfer.status');
Route::get('/homme/{id}',[HommeController::class,'addHommetoCart'])->name('addhomme.to.cart');
Route::get('/shopping-cart',[HommeController::class,'HommeCart'])->name('shopping.cart');
Route::delete('/cart/delete-product', [HommeController::class, 'deleteProduct'])->name('delete.cart.product');
Route::get('/niche/{id}',[NicheController::class,'addNichetoCart'])->name('addniche.to.cart');
Route::get('/shopping-cart',[NicheController::class,'NicheCart'])->name('shopping.cart');
Route::delete('/cart/delete-product', [NicheController::class, 'deleteProduct'])->name('delete.cart.product');

//////////
// Route::post('/femme/{id}/add-to-cart', [FemmeController::class, 'addFemmetoCartUser'])->name('addfemme.to.cart');
// Route::get('/shopping-cart', [FemmeController::class, 'FemmeCartUser'])->name('shopping.cart');
// Route::delete('/cartUser/delete-productUser', [FemmeController::class, 'deleteProductUser'])->name('delete.cart.productUser');

route::get('/cartUser',[CartController::class,'index']);
///////////////////
Route::get('/dashboard', [DashboardController::class,'liste'])->name('dashboard');
Route::get('/ajouter', [DashboardController::class,'ajouter_user']);
Route::post('/ajouter/traitement', [DashboardController::class,'ajouter_user_traitement']);
Route::get('/update-user/{id}', [DashboardController::class,'update_user']);
Route::post('/update/traitement', [DashboardController::class,'update_user_traitement']);
Route::get('/delete-user/{id}', [DashboardController::class,'delete_user']);
//////////////////////
Route::get('/dashboard1', [ContactController::class,'liste'])->name('dashboard1');
Route::get('/ajouter_reservations', [ContactController::class,'ajouter_reservations']);
Route::post('/ajouter_reservations/traitement', [ContactController::class,'ajouter_reservations_traitement']);
Route::get('/update-reservations/{id}', [ContactController::class, 'update_reservations'])->name('update_reservations');
Route::post('/update_reservations/traitement', [ContactController::class,'update_reservations_traitement']);
Route::delete('/delete-reservation/{id}', [ContactController::class, 'delete_reservations'])->name('delete_reservations');
//////////////////////
Route::post('/subscribe', [SubscriptionController::class, 'subscribe']);

/////////////////
Route::prefix('dashboard3')->group(function () {
    Route::get('/', [FemmeController::class, 'liste_femme'])->name('dashboard3.index');
    Route::get('/create', [FemmeController::class, 'create'])->name('dashboard3.create');
    Route::post('/', [FemmeController::class, 'store'])->name('dashboard3.store');
    Route::get('/liste_femme', [FemmeController::class, 'liste_femme'])->name('dashboard3.liste_femme');
    Route::get('/show/{ide}', [FemmeController::class, 'show'])->name('dashboard3.show');
    Route::get('/edit/{ide}', [FemmeController::class, 'edit'])->name('dashboard3.edit');
    Route::put('/update/{ide}', [FemmeController::class, 'update'])->name('dashboard3.update'); // Define the update route
    Route::delete('/destroy/{ide}', [FemmeController::class, 'destroy'])->name('dashboard3.destroy');
});
/////////////////////
Route::prefix('dashboard4')->group(function () {
    Route::get('/', [HommeController::class, 'liste_homme'])->name('dashboard4.index');
    Route::get('/create', [HommeController::class, 'create'])->name('dashboard4.create');
    Route::post('/', [HommeController::class, 'store'])->name('dashboard4.store');
    Route::get('/liste_homme', [HommeController::class, 'liste_homme'])->name('dashboard4.liste_homme');
    Route::get('/show/{id}', [HommeController::class, 'show'])->name('dashboard4.show');
    Route::get('/edit/{id}', [HommeController::class, 'edit'])->name('dashboard4.edit');
    Route::put('/update/{id}', [HommeController::class, 'update'])->name('dashboard4.update'); // Define the update route
    Route::delete('/destroy/{id}', [HommeController::class, 'destroy'])->name('dashboard4.destroy');
});
///////////////////////////
Route::prefix('dashboard2')->group(function () {
    Route::get('/', [NicheController::class, 'liste_niche'])->name('dashboard2.index');
    Route::get('/create', [NicheController::class, 'create'])->name('dashboard2.create');
    Route::post('/', [NicheController::class, 'store'])->name('dashboard2.store');
    Route::get('/liste_niche', [NicheController::class, 'liste_niche'])->name('dashboard2.liste_niche');
    Route::get('/show/{id}', [NicheController::class, 'show'])->name('dashboard2.show');
    Route::get('/edit/{id}', [NicheController::class, 'edit'])->name('dashboard2.edit');
    Route::put('/update/{id}', [NicheController::class, 'update'])->name('dashboard2.update'); // Define the update route
    Route::delete('/destroy/{id}', [NicheController::class, 'destroy'])->name('dashboard2.destroy');
});


////////////////

Route::post('pay',[PaymentController::class,'pay'])->name('payment');
Route::get('success',[PaymentController::class,'success']);
Route::get('error',[PaymentController::class,'error']);
////////////////////////
Route::get('/reservation',[ReservationController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/test-view',[ReservationController::class,'test_view']);
Route::post('/post-message',[ContactFormController::class,'post_message']);
Route::get('/homme',[HommeController::class,'index']);
Route::get('/femme',[FemmeController::class,'index']);
Route::get('/niche',[NicheController::class,'index']);
Route::post('/post-message', [ReservationController::class, 'store'])->name('reservation.store');
Route::post('/post-message', [ReservationController::class, 'store']);
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/contact', [ContactController::class, 'show']);
Route::post('/post-email', [ReservationController::class, 'sendContactEmail']);

// Route::get('/brand/{slug}', [BrandController::class, 'show'])->name('brand.detail');
