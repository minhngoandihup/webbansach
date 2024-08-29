<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DetailBlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KhuyenmaiController;

//admin
use App\Http\Controllers\AdminController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/muahe2024', [HomeController::class, 'muahe2024'])->name('muahe2024');
Route::get('/search', [ProductController::class, 'search'])->name('product.search');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{category_id}', [ProductController::class, 'index'])->name('productBycategory');
Route::get('/product/detail/{product_id}', [ProductController::class, 'detail'])->name('productsDetail');
Route::get('/productdetail', [ProductDetailController::class, 'detail'])->name('productdetail');
Route::get('/about', [AboutController::class, 'abouts'])->name('about');
Route::get('/contact', [ContactController::class, 'contacts'])->name('contact');
Route::get('/cart', [CartController::class, 'carts'])->name('cart');
Route::get('/blog', [BlogController::class, 'blogs'])->name('blog');
Route::get('/detailblog', [DetailBlogController::class, 'detailblogs'])->name('detailblog');
Route::get('/login', [LoginController::class, 'logins'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin']);
Route::get('/checkout', [CheckOutController::class, 'checkouts'])->name('checkout');
Route::get('/register', [RegisterController::class, 'registers'])->name('register');
Route::post('/register', [RegisterController::class, 'postRegister']);




//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/productlist', [AdminController::class, 'productlist'])->name('productlist');
Route::post('/productadd', [AdminController::class, 'productadd'])->name('productadd');
Route::get('/productdelete/{id}', [AdminController::class, 'productdelete'])->name('productdelete');
Route::get('/productupdateform/{id}', [AdminController::class, 'productupdateform'])->name('productupdateform');
Route::post('/productupdate', [AdminController::class, 'productupdate'])->name('productupdate');
Route::get('/user', [AdminController::class, 'user'])->name('user');
//     return view('home');
// });
