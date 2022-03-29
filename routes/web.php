<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('welcome.show');
//<----------- Templates HTML ------------>
Route::group(['prefix'=>'/'],function(){
    Route::get('/bang-gia', function () {
        return view('fontend/banggia');
    })->name('banggia.show');
    Route::get('/chinh-sach-mua-hang', function () {
        return view('fontend/chinhsachmuahang');
    })->name('chinhsachmuahang.show');
    Route::get('/chinh-sach-doi-tra-hang', function () {
        return view('fontend/chinhsachdoitrahang');
    })->name('chinhsachdoitrahang.show');
    Route::get('/chinh-sach-kiem-hang', function () {
        return view('fontend/chinhsachkiemhang');
    })->name('chinhsachkiemhang.show');
    Route::get('/chinh-sach-dong-kien-go', function () {
        return view('fontend/chinhsachdongkiengo');
    })->name('chinhsachdongkiengo.show');
    Route::get('/khieu-nai-boi-thuong', function () {
        return view('fontend/chinhsachkhieunaiboithuong');
    })->name('chinhsachkhieunaiboithuong.show');
    Route::get('/quy-dinh-bao-mat', function () {
        return view('fontend/quydinhbaomat');
    })->name('quydinhbaomat.show');
    Route::get('/quy-dinh-hang-cam', function () {
        return view('fontend/quydinhhangcam');
    })->name('quydinhhangcam.show');
});
Route::get('/dashboard', function () {
    return view('backend/dashboard');
})->name('dashboard.show'); 
Route::get('/login', function () {
    return view('login');
})->name('login.show');
Route::get('/signup', function () {
    return view('signup');
})->name('signup.show');   