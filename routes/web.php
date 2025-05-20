<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [AuthController::class, "register"])->name('auth.register');
Route::get('login', [AuthController::class, "login"])->name('auth.login');
Route::post('register', [AuthController::class, 'store'])->name('auth.store');
Route::post('login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');  


Route::middleware(['auth'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
    // Profile route
    Route::get('/profile', [ProfileController::class, "index"])->name('profile.index');
    // Student Route
    Route::get('/students', [StudentController::class, "index"])->name('students.index');
    Route::get('/students/create', [StudentController::class, "create"])->name('students.create');
    Route::post('/students', [StudentController::class, "store"])->name('students.store');
    Route::get('/students/{id}', [StudentController::class, "show"])->name('students.show');
    Route::get('/students/{id}/edit', [StudentController::class, "edit"])->name('students.edit');
    Route::put('/students/{id}', [StudentController::class, "update"])->name('students.update');
    Route::delete('/students/{id}', [StudentController::class, "destroy"])->name('students.destroy');
        // Majors Route
    Route::get('/majors', [MajorController::class, "index"])->name('majors.index');
    Route::get('/majors/create', [MajorController::class, "create"])->name('majors.create');
    Route::post('/majors', [MajorController::class, "store"])->name('majors.store');
    Route::get('/majors/{id}', [MajorController::class, "show"])->name('majors.show');
    Route::get('/majors/{id}/edit', [MajorController::class, "edit"])->name('majors.edit');
    Route::put('/majors/{id}', [MajorController::class, "update"])->name('majors.update');
    Route::delete('/majors/{id}', [MajorController::class, "destroy"])->name('majors.destroy');
});







// connnect to controller
// Route::get(uri: '/students', action: [StudentController::class, 'index']);

// Route::get(uri: '/students/{id}', action: [StudentController::class, 'show']);

// Route::get(uri: '/students/create', action: [StudentController::class, 'create'])->name(name: 'students.create');

// // Basic Routing
// Route::get(uri: '/students', action: function (): string {
//     return 'Hello, Students!';
// });

// // Redirect routing
// Route::redirect(uri: '/redirect', destination: '/students');

// // Named routes 
// Route::get(uri: '/students', action: function (): string {
//     return 'Create Student Data';
// })->name(name: 'students.create');

// // Routing with parameters
// Route::get(uri: '/students/{id}', action: function (string $id): string {
//     return 'Students ' . $id;
// });

// Route::get('/students/{student_id}/courses/{course_id}', function ($student_id, $course_id) {
//     return "Mahasiswa ID $student_id mengambil mata kuliah ID $course_id";
// });
