<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\Back\BlogController;
use App\Http\Controllers\Back\videoController;
use App\Http\Controllers\Front\FrontController;



// Route::get('/', function () {
//     return view('Front.index');
// });
// for frontend controller 
Route::controller(FrontController::class)->group(function(){
    Route::get('/','index')->name('Front.index');
    Route::get('/videotrainig','videotrainig')->name('Front.video');
    Route::get('/shop','shop')->name('Front.shop');
    Route::get('/homepage','homepage')->name('Front.homepage');
    Route::get('/weather','weather')->name('Front.weather');
});


// for admin 
Route::get('/adminLogout',[AdminController::class,'destroy'])->name('Back.Logout');

// for user 
Route::get('/users',[UserController::class,'index'])->name('users.indexinfo');

// for product controller 
Route::controller(ProductController::class)->group(function(){
    Route::get('/product','index')->name('product');
    Route::post('/addproduct','addproduct')->name('Back.addproduct');
    Route::get('/manageproduct','manageproduct')->name('manageproduct');
    Route::get('/deleteproduct/{id}','deleteproduct')->name('deleteproduct');
    Route::get('/activeproduct/{id}','activeproduct')->name('activeproduct');
    Route::get('/inactiveproduct/{id}','inactiveproduct')->name('inactiveproduct');
    Route::get('/updateproduct/{id}','updateproduct')->name('updateproduct');
    Route::post('/updatesaveproduct/{id}','updatesaveproduct')->name('updatesaveproduct');

});
// for the blog controller 
Route::controller(BlogController::class)->group(function(){
    Route::get('/blog','index')->name('blog');
    Route::Post('/addblog','addblog')->name('addblog');
    Route::get('/manageblog','manageblog')->name('manageblog');
    Route::get('/deleteblog/{id}','deleteblog')->name('deleteblog');
    Route::get('/activeblog/{id}','activeblog')->name('activeblog');
    Route::get('/inactiveblog/{id}','inactiveblog')->name('inactiveblog');
    Route::get('/updateblog/{id}','updateblog')->name('updateblog');
    Route::post('/updateblogsave/{id}','updateblogsave')->name('updateblogsave');
    


});
//for video 
Route::controller(videoController::class)->group(function(){
    Route::get('/video','index')->name('video');
    Route::post('/addvideo','addvideo')->name('addvideo');
    Route::get('/managevideo','managevideo')->name('managevideo');
    Route::get('/active/{id}','active')->name('active');
    Route::get('/inactive/{id}','inactive')->name('inactive');
    Route::get('/deletevideo/{id}','deletevideo')->name('deletevideo');
    Route::get('/updatevideo/{id}','updatevideo')->name('updatevideo');
    Route::post('/updatevideosave/{id}','updatevideosave')->name('updatevideosave');


});

Route::get('/dashboard', function () {
    return view('Back.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
