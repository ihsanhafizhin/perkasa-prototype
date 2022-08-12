<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RABController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\MasterProgramController;
use App\Http\Controllers\MasterKegiatanController;
use App\Http\Controllers\MasterKroController;
use App\Http\Controllers\MasterRoController;
use App\Http\Controllers\MasterKomponenController;
use App\Http\Controllers\MasterSubKomponenController;
use App\Http\Controllers\RabNotePenelaahController;
use App\Http\Controllers\RabNotePenyetujuController;
use App\Http\Controllers\SatkerController;
use App\Http\Controllers\RabrincianController;



Route::view('/', 'landing-page');

// Route::view('/dashboard', 'layouts.layout-dashboard');

Route::prefix('/login')->name('login.')->group(function() {
    Route::view('/', 'login')->name('view');
    Route::post('/', [AuthController::class, 'login'])->name('post');
});
 
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    
    Route::get('/rab_rincian_delete', [RabrincianController::class, 'rab_rincian_delete'])->name('rab_rincian_delete');

    Route::get('/getsatker', [SatkerController::class, 'getSatker'])->name('getsatker');
    Route::post('/addrab', [RABController::class, 'addRab'])->name('addrab');
    Route::post('/addrabnotepenyetuju', [RabNotePenyetujuController::class, 'addRabNotePenyetuju'])->name('addrabnotepenyetuju');
    Route::post('/addrabnotepenelaah', [RabNotePenelaahController::class, 'addrabnotepenelaah'])->name('addrabnotepenelaah');
    Route::post('/rab_delete', [RABController::class, 'rab_delete'])->name('rab_delete');
    Route::view('/chart', 'dashboard_chart')->name('dashboard-chart');
    //Route::view('/dashboard', 'rab_kegiatan')->name('dashboard');
    Route::get('/dashboard', [RABController::class, 'rab_kegiatan'])->name('dashboard');
    Route::view('/data-pendukung', 'data_pendukung')->name('data-pendukung');
    Route::view('/monitoring-penelaahan', 'monitoring_penelaah')->name('monitoring-penelaahan');
    

    // Rute Settings/Master Data
    Route::view('/unit-kerja', 'unit_kerja')->name('unit-kerja');
    Route::view('/unit-organisasi', 'unit_organisasi')->name('unit-organisasi');

    // Rute Settings/Setup Mag
    Route::get('/program', [MasterProgramController::class, 'indexProgram'])->name('indexProgram');
    Route::post('/addProgram', [MasterProgramController::class, 'addProgram'])->name('addProgram');

    Route::get('/kegiatan', [MasterKegiatanController::class, 'indexKegiatan'])->name('indexKegiatan');
    Route::post('/addKegiatan', [MasterKegiatanController::class, 'addKegiatan'])->name('addKegiatan');

    Route::get('/kro', [MasterKroController::class, 'indexKro'])->name('indexKro');
    Route::post('/addKro', [MasterKroController::class, 'addKro'])->name('addKro');

    Route::get('/ro', [MasterRoController::class, 'indexRo'])->name('indexRo');
    Route::post('/addRo', [MasterRoController::class, 'addRo'])->name('addRo');

    Route::get('/komponen', [MasterKomponenController::class, 'indexKomponen'])->name('indexKomponen');
    Route::post('/addKomponen', [MasterKomponenController::class, 'addKomponen'])->name('addKomponen');
    
    Route::get('/subKomponen', [MasterSubKomponenController::class, 'indexSubKomponen'])->name('indexSubKomponen');
    Route::post('/addSubKomponen', [MasterSubKomponenController::class, 'addSubKomponen'])->name('addSubKomponen');
    
    Route::view('/akun-coa', 'akun_coa')->name('akun-coa');

     // Rute Settings/Manage Users
     Route::view('/users', 'users')->name('users');
     Route::view('/user-level-permission', 'user_level_permissions')->name('user-level-permission');
     Route::view('/user-levels', 'user_levels')->name('user-levels');
     Route::view('/group', 'group')->name('group');
     Route::view('/group-member', 'group_member')->name('group-member');
     Route::view('/akun-coa', 'akun_coa')->name('akun-coa');
});
