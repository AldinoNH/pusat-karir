<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PelangganController;
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




Route::get('/',[HomeController::class,'tampil']);
Route::get('/lowongankerja',[HomeController::class,'lowongankerja']);
Route::get('/arsiplowongan',[HomeController::class,'arsiplowongan']);

Route::get('/event',[HomeController::class,'tampilevent']);
Route::get('/upcomingevent',[HomeController::class,'tampileventupcoming']);
Route::get('/arsipevent',[HomeController::class,'arsipevent']);


Route::get('/admin/detail/{id_lowongan}',[HomeController::class,'detail']);
Route::get('/admin/detail/berita/{id_berita}',[HomeController::class,'detailberita']);
Route::get('/admin/detail/pengajuan/{id_lowongan}',[HomeController::class,'detailpengajuan']);
Route::get('/admin/detailevent/{id_event}',[HomeController::class,'detailevent']);

// Ajax query

Route::get('/lowongan' , [HomeController::class , 'searchlowongan'])->name('search.lowongan');



Auth::routes();

Route::get('/home',[LowonganController::class,'index'])->name('home');

Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin',[LowonganController::class,'index'])->name('admin');
    Route::get('/admin/add',[LowonganController::class,'add']);
    Route::get('/admin/add/berita',[LowonganController::class,'addberita']);
    Route::get('/admin/add/pengajuan',[LowonganController::class,'addpengajuan']);
    Route::post('/admin/insert',[LowonganController::class,'insert']);
    Route::post('/admin/insertberita',[LowonganController::class,'insertberita']);
    Route::post('/admin/insertpengajuan',[LowonganController::class,'insertpengajuan']);
    Route::post('/admin/insertevent',[LowonganController::class,'insertevent']);
    Route::get('/admin/edit/{id_lowongan}',[LowonganController::class,'edit']);
    Route::get('/admin/editpengajuan/{id_lowongan}',[LowonganController::class,'editpengajuan']);
    Route::get('/admin/editevent/{id_event}',[LowonganController::class,'editevent']);
    Route::get('/admin/edit/berita/{id_event}',[LowonganController::class,'editberita']);
    Route::post('/admin/update/{id_lowongan}',[LowonganController::class,'update']);
    Route::post('/admin/update/berita/{id_berita}',[LowonganController::class,'updateberita']);
    Route::post('/admin/updatepengajuan/{id_lowongan}',[LowonganController::class,'updatepengajuan']);
    Route::post('/admin/updateevent/{id_event}',[LowonganController::class,'updateevent']);
    Route::get('/admin/delete/{id_lowongan}',[LowonganController::class,'delete']);
    Route::get('/admin/delete/berita/{id_berita}',[LowonganController::class,'deleteberita']);
    Route::get('/admin/deletepengajuan/{id_lowongan}',[LowonganController::class,'deletepengajuan']);
    Route::get('/admin/approve/{id_lowongan}',[LowonganController::class,'approve']);
    Route::get('/admin/rejected/{id_lowongan}',[LowonganController::class,'rejected']);
    Route::get('/admin/deleteevent/{id_event}',[LowonganController::class,'deleteevent']);
    Route::get('/admin/printpdf',[LowonganController::class,'print']);
    Route::get('/admin/printpdfevent',[LowonganController::class,'printpdfevent']);
    Route::get('/admin/printpdfdownload',[LowonganController::class,'printpdf']);
    Route::get('/admin/printpdfeventdownload',[LowonganController::class,'printpdfeventdownload']);
    Route::get('/admin/addevent',[LowonganController::class,'addevent']);
    Route::get('/admin/event',[LowonganController::class,'event'])->name('event');
    Route::get('/admin/berita',[LowonganController::class,'berita'])->name('berita');
    Route::get('/pengajuan',[LowonganController::class,'pengajuan'])->name('pengajuan');
    Route::get('/print',[LowonganController::class,'cetakform'])->name('print');
    Route::get('/printevent',[LowonganController::class,'cetakformevent'])->name('printevent');
    Route::get('/printpertanggal/{tglawal}/{tglakhir}',[LowonganController::class,'cetakpertanggal'])->name('printpertanggal');
    Route::get('/printpertanggalevent/{waktuawal}/{waktuakhir}',[LowonganController::class,'cetakpertanggalevent'])->name('printpertanggalevent');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'perusahaan'], function() {
//perusahaan
Route::get('/perusahaan',[LowonganController::class,'input'])->name('perusahaan');
});


Route::get('/inputlowongankerja',[HomeController::class,'inputlowongan']);
Route::post('/inputlowongankerja/insert',[HomeController::class,'insert']);
