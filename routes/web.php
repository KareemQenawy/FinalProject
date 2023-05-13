<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\ShopController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\ShopController;
use App\Http\Controllers\Auth\ContactController;
use App\Http\Controllers\Auth\CartController;
use App\Http\Controllers\Auth\ElementsController;
use App\Http\Controllers\Auth\PaginationController;




// use App\Http\Controllers\Auth\AdminPagController;



use GuzzleHttp\Promise\Create;

// use App\Http\Controllers\Admin\PostController;

// Route::get("/karim" , function(){
//   return "welcome karim";
// });

// Route::get("products", function(){
//     return view("products");
// });




Route::get('/', [HomeController::class, 'get_home_page']);
Route::get("aboutus" , [HomeController::class, 'get_about_us']);

Route::middleware(['checkAdmin'])->group(function(){

    Route::get("addUser" , [UserController::class,"create"]);
    Route::post("storeUser" , [UserController::class , "store"]);

    Route::get("products/create" , [ProductController::class , "create"]);
    Route::post("products/store" , [ProductController::class , "store"]);

    Route::get("categories/create" , [CategoryController::class , "create"]);
    Route::post("categories/store" , [CategoryController::class , "store"]);

});


Route::get("categories" , [CategoryController::class , "index"]);
Route::get("categories/{category}" , [CategoryController::class , "show"]);
Route::get("categories/destroy/{category}" , [CategoryController::class , "destroy"]);
Route::get("categories/edit/{category}" , [CategoryController::class , "edit"]);
Route::get("register" , [RegisterController::class , "register"]);
Route::post("register" ,[RegisterController::class,"handleRegister"]);
Route::get("login" , [LoginController::class , "login"]);
Route::post("login" ,[LoginController::class,"handleLogin"]);
Route::get("logout" ,[LoginController::class,"logout"]);
Route::get("products" , [ProductController::class , "index"]);
Route::get("products/{product}" ,[ProductController::class , "show"] );
Route::get("/test/admin/get/products/dashboard/statistics" , function(){
    return "welcome to large name";
})->name("getStack");

Route::resource("posts" , PostController::class);
Route::get("shop", [ShopController::class , "shop"]);
Route::get("contact", [ContactController::class , "contact"]);
Route::get("cart", [CartController::class , "cart"]);
Route::get("elements" , [ElementsController::class , "elements"]);
Route::get("pagination" , [PaginationController::class, "pagination"]);





























// Route::get("admins" , AdminPagController::class , "admin");




























// Route::get("posts" , [PostsController::class , "index"])->name("posts.index");
// Route::get("posts/create" , [PostsController::class , "create"])->name("posts.create");
// Route::post("posts" , [PostsController::class , "store"])->name("posts.store");
// Route::get("posts" , [PostsController::class , "index"])->name("posts.index");


// Route::get("App/resources/users/addUser" ,[UserController::class,"create"]);















