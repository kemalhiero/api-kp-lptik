<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\TryCatch;

/*
|----------------------------------------------------------------------
| API Routes
|------------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function () {

        Route::get('/user', function(Request $request) {
            return auth()->user();
        });
        
        // API route for logout user
        Route::post('/logout', [AuthController::class, 'logout']);

        //mahasiswa
        Route::get('/mahasiswa', [MahasiswaController::class, 'profilMahasiswa']);
        Route::get('/krs', [MahasiswaController::class, 'showKrs']);
        Route::get('/khs', [MahasiswaController::class, 'showSemester']);
        Route::get('/khs/{idSemester}', [MahasiswaController::class, 'showKhs']);
        Route::get('/matkul/{id_matkul}', [MahasiswaController::class, 'detailMatkul']);

        // dosen
        Route::get('/listmahasiswa', [DosenController::class, 'list_mahasiswa_bimbingan']);
        Route::get('/detailmahasiswa/{nim_mahasiswa}', [DosenController::class, 'detail_mahasiswa_pa']);
        Route::get('/profil-dosen', [DosenController::class, 'profil_dosen']);
        Route::get('/list-matkul', [DosenController::class, 'list_mata_kuliah']);
        Route::get('/detail-matkul/{id_matkul}', [DosenController::class, 'detail_mata_kuliah']);
});

    Route::get('/forbidden', [AuthController::class, 'forbidden'])->name('api.forbidden');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    // Route::post('/logout', [AuthController::class, 'logout']);


