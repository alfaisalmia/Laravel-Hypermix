<?php

use App\Http\Controllers\AffiliateController as ControllersAffiliateController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\Backend\AppsSectionController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\UserStreRequest;
use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\HeaderController;

use App\Http\Controllers\Backend\PostBlogController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Fontend\AffiliateController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RaffleCotroller;
use App\Http\Controllers\RaffleTicketController;
use App\Models\ProductCategory;

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
Auth::routes(['register' => false]);
Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
    });
/* Route::get('/', function () {
    return view('frontend.homepage');
});
 */

// route for processing payment
Route::post('/paypal', [PaymentController::class,'payWithPaypal'])->name('paypal');
//ROUTE FOR CHECK STATUS OF THE PAYMENT
Route::get('/status', [PaymentController::class, 'getPaymentStatus'])->name('status');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/details/{id}', [ProductController::class, 'productDetails'])->name('product-details');


Auth::routes();

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('base');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
Route::resource('users', UserController::class);
Route::resource('cities', CityController::class);
Route::post('users/{user}/change-password',[ChangePasswordController::class, 'change_password'])->name('users.change.password');

Route::resource('categories', CategoryController::class);
//AJAX Route
Route::post('/updateSocialLink', [FooterController::class, 'updateSocialLink']);
Route::post('/copyrightUpdate', [FooterController::class, 'copyrightUpdate']);
Route::post('/insertUsefulLink', [FooterController::class, 'insertUsefulLink']);
Route::post('/updateServiceList', [FooterController::class, 'updateServiceList']);
Route::get('/updatePassword', [ProfileController::class, 'updatePassword']);
Route::post('/profile/updateImage', [ProfileController::class, 'updateImage']);
// BACKEND
Route::get('affiliate', [AffiliateController::class, 'index'])->name('affiliate');
Route::get('affiliate/show/{id}', [AffiliateController::class, 'show'])->name('affiliate.show');

Route::get('raffle', [RaffleCotroller::class, 'index'])->name('raffle');
Route::get('apps', [AppsController::class, 'index'])->name('apps');
Route::resource('contact', ContactController::class);
//Header Section
Route::resource('/dashboard/header', HeaderController::class);
Route::resource('/dashboard/footer', FooterController::class);
Route::post('dashboard/footer/about/{id}', [FooterController::class, 'about'])->name('about');
// POST BLOG ROUTE
Route::resource('postblog', PostBlogController::class);
Route::get('/postblog/delete/{id}', [PostBlogController::class, 'destroy'])->name('postblog.destroy');
Route::get('/postblog/delete/{id}', [PostBlogController::class, 'destroy'])->name('postblog.single-blog');

Route::resource('dashboard/profile', ProfileController::class);
Route::get('/post-details/{id}', [AffiliateController::class, 'postdetails']);
Route::get('/products/details/{id}', [ProductController::class, 'productDetails'])->name('product-details');

Route::resource('dashboard/appsection', AppsSectionController::class);
Route::resource('dashboard/product', ProductAdminController::class);
Route::get('/product/delete/{id}', [ProductAdminController::class, 'destroy'])->name('product.destroy');

//Route::get('/dashboard/new-post', [PostBlogController::class, 'newpost'])->name('new-post');

Route::get('/signin/customer', [CustomerController::class, 'signin'])->name('signin');
Route::post('/signin/customer', [CustomerController::class, 'process_login'])->name('signin');
Route::get('/register/customer', [CustomerController::class, 'index'])->name('registerCustomer');
Route::post('/register/customer', [CustomerController::class, 'register'])->name('register');
Route::get('/customer/dashboard', [CustomerController::class, 'customDashboard'])->name('customer-dashboard')->middleware('auth');
Route::get('signout', [CustomerController::class, 'signout'])->name('signout');
Route::post('/add_to_cart', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::get('/cartList', [ProductController::class, 'cartList'])->name('cart');
Route::get('/removeCart/{id}', [ProductController::class, 'removeCart'])->name('removeCart');
Route::get('/ordernow', [ProductController::class, 'orderNow'])->name('ordernow');
Route::post('/orderplace', [ProductController::class, 'orderPlace'])->name('orderplace');


Route::get('/customer-order', [ProductController::class, 'customerOrder'])->name('customer-order');
Route::get('/dashboard/onlineOrder', [ProductAdminController::class, 'onlineOrder'])->name('onlineOrder');
Route::get('/dashboard/delivery/{id}', [ProductAdminController::class, 'delivery'])->name('delivery');
//Product Categories
Route::get('/product-categories', [ProductCategoryController::class, 'index'])->name('product-categories');
Route::get('/product-categories/create', [ProductCategoryController::class, 'create']);
Route::post('/product-categories/store', [ProductCategoryController::class, 'store']);
Route::get('/product-categories/edit/{id}', [ProductCategoryController::class, 'edit']);
Route::post('/product-categories/update/{id}', [ProductCategoryController::class, 'update']);

///
Route::get('/category/{post_category}', [ProductController::class, 'CategoryWise']);


Route::resource('dashboard/raffleticket', RaffleTicketController::class);

Route::get('/buyticket/{id}', [ProductController::class, 'Buyticket']);
