<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware("alreadyLogin")->group(function () {
    Route::prefix("/login")->group(function () {
        Route::get('/', [AuthController::class, 'index'])->name("login");
        Route::get("/admin", [AuthController::class, 'admin']);
        Route::post("/admin", [AuthController::class, 'admin_login'])->name("login_admin");
        Route::post('/siswa', [AuthController::class, 'siswa'])->name("login_siswa");
        Route::post('/guru', [AuthController::class, 'guru'])->name("login_guru");
    });

    Route::prefix("/register")->group(function () {
        Route::get('/', [RegisterController::class, 'register'])->name("register");
        Route::get('/siswa', [RegisterController::class, 'siswa'])->name("register_siswa");
        Route::post('/siswa', [RegisterController::class, 'siswa_create'])->name("register_siswa_post");
        Route::get('/guru', [RegisterController::class, 'guru'])->name("register_guru");
        Route::post('/guru', [RegisterController::class, 'guru_create'])->name("register_guru_post");
    });
});

Route::middleware(["AuthCheck", "preventBack"])->group(function () {
    Route::get("/", [PubController::class, "dashboard"])->name("dashboard");
    Route::post("/logout", [AuthController::class, "logout"])->name("logout");

    Route::middleware("admin")->group(function () {
        Route::get("/update", [AdminController::class, 'update_show'])->name("update_admin_show");
        Route::put("/update/{id}", [AdminController::class, 'update_post'])->name("update_admin_post");
        Route::get("/update/{id}/siswa", [AdminController::class, 'input_nilai'])->name("update_input_siswa");
    });


    Route::middleware("GuruAdminOnly")->prefix("guru")->group(function () {
        Route::get("/update/{id}", [GuruController::class, 'update_show'])->name("update_guru_show");
        Route::put("/update/{id}", [GuruController::class, 'update_post'])->name("update_guru_post");
        Route::get("/dashboard/{page}/list", [GuruController::class, 'kelas'])->name("kelas_guru");
        Route::get("/kelas/{id}/input", [GuruController::class, 'kelas_input'])->name("kelas_guru_input");
        Route::post("/kelas/{id}/input", [GuruController::class, 'kelas_input_post'])->name("kelas_guru_input_post");
        Route::get("/kelas/{id}/siswa", [GuruController::class, 'list_siswa'])->name("list_siswa");
        Route::get("/biodata/{id}/siswa", [GuruController::class, 'biodata_siswa'])->name("biodata_siswa");
    });

    Route::middleware("SiswaAdminOnly")->prefix("/siswa")->group(function () {
        Route::get("/update/{id}", [SiswaController::class, 'update_show'])->name("update_siswa_show");
        Route::put("/update/{id}", [SiswaController::class, 'update_post'])->name("update_siswa_post");
        Route::get("/list/walikelas", [SiswaController::class, 'profil_walikelas'])->name("profil_walikelas");
        Route::get("/profil/{id}/walikelas", [SiswaController::class, 'walikelas'])->name("walikelas");

        Route::middleware("siswaOnly")->group(function () {
            Route::get("/raport/{jurusan}", [SiswaController::class, 'raport'])->name("raport_siswa");
            Route::get("/raport/{jurusan}/print", [SiswaController::class, 'raport_print'])->name("raport_print");
            Route::get("/rangking", [SiswaController::class, 'rangking'])->name("rangking_siswa");
        });
    });
});
