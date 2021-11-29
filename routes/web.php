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



route::get('/',[HomeController::class,'tampil']);
route::get('/lowongankerja',[HomeController::class,'lowongankerja']);
route::get('/arsiplowongan',[HomeController::class,'arsiplowongan']);

route::get('/event',[HomeController::class,'tampilevent']);
route::get('/upcomingevent',[HomeController::class,'tampileventupcoming']);


route::get('/admin/detail/{id_lowongan}',[HomeController::class,'detail']);
route::get('/admin/detail/berita/{id_berita}',[HomeController::class,'detailberita']);
route::get('/admin/detail/pengajuan/{id_lowongan}',[HomeController::class,'detailpengajuan']);
route::get('/admin/detailevent/{id_event}',[HomeController::class,'detailevent']);


Auth::routes();

route::get('/home',[LowonganController::class,'index'])->name('home');

route::group(['middleware' => 'admin'], function() {
    route::get('/admin',[LowonganController::class,'index'])->name('admin');
    route::get('/admin/add',[LowonganController::class,'add']);
    route::get('/admin/add/berita',[LowonganController::class,'addberita']);
    route::get('/admin/add/pengajuan',[LowonganController::class,'addpengajuan']);
    route::post('/admin/insert',[LowonganController::class,'insert']);
    route::post('/admin/insertberita',[LowonganController::class,'insertberita']);
    route::post('/admin/insertpengajuan',[LowonganController::class,'insertpengajuan']);
    route::post('/admin/insertevent',[LowonganController::class,'insertevent']);
    route::get('/admin/edit/{id_lowongan}',[LowonganController::class,'edit']);
    route::get('/admin/editpengajuan/{id_lowongan}',[LowonganController::class,'editpengajuan']);
    route::get('/admin/editevent/{id_event}',[LowonganController::class,'editevent']);
    route::get('/admin/edit/berita/{id_event}',[LowonganController::class,'editberita']);
    route::post('/admin/update/{id_lowongan}',[LowonganController::class,'update']);
    route::post('/admin/update/berita/{id_berita}',[LowonganController::class,'updateberita']);
    route::post('/admin/updatepengajuan/{id_lowongan}',[LowonganController::class,'updatepengajuan']);
    route::post('/admin/updateevent/{id_event}',[LowonganController::class,'updateevent']);
    route::get('/admin/delete/{id_lowongan}',[LowonganController::class,'delete']);
    route::get('/admin/delete/berita/{id_berita}',[LowonganController::class,'deleteberita']);
    route::get('/admin/deletepengajuan/{id_lowongan}',[LowonganController::class,'deletepengajuan']);
    route::get('/admin/approve/{id_lowongan}',[LowonganController::class,'approve']);
    route::get('/admin/rejected/{id_lowongan}',[LowonganController::class,'rejected']);
    route::get('/admin/deleteevent/{id_event}',[LowonganController::class,'deleteevent']);
    route::get('/admin/printpdf',[LowonganController::class,'print']);
    route::get('/admin/printpdfevent',[LowonganController::class,'printpdfevent']);
    route::get('/admin/printpdfdownload',[LowonganController::class,'printpdf']);
    route::get('/admin/printpdfeventdownload',[LowonganController::class,'printpdfeventdownload']);
    route::get('/admin/addevent',[LowonganController::class,'addevent']);
    route::get('/admin/event',[LowonganController::class,'event'])->name('event');
    route::get('/admin/berita',[LowonganController::class,'berita'])->name('berita');
    route::get('/pengajuan',[LowonganController::class,'pengajuan'])->name('pengajuan');
    route::get('/print',[LowonganController::class,'cetakform'])->name('print');
    route::get('/printevent',[LowonganController::class,'cetakformevent'])->name('printevent');
    route::get('/printpertanggal/{tglawal}/{tglakhir}',[LowonganController::class,'cetakpertanggal'])->name('printpertanggal');
    route::get('/printpertanggalevent/{waktuawal}/{waktuakhir}',[LowonganController::class,'cetakpertanggalevent'])->name('printpertanggalevent');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::group(['middleware' => 'perusahaan'], function() {
//perusahaan
route::get('/perusahaan',[LowonganController::class,'input'])->name('perusahaan');
});


route::get('/inputlowongankerja',[HomeController::class,'inputlowongan']);
route::post('/inputlowongankerja/insert',[HomeController::class,'insert']);