<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeesController;
use App\Http\Middleware\isLogin;
use App\Http\Middleware\multipeDevice;
use Illuminate\Support\Facades\Route;


Route::middleware([multipeDevice::class, 'auth'])->group(function () {
  // Route for CRUD Data Karyawan Start
  Route::post('data-karyawan', [EmployeesController::class, 'store'])->name('employee.create');
  Route::get('data-karyawan', [EmployeesController::class, 'index'])->name('employees.read');
  Route::put('data-karyawan/{id}', [EmployeesController::class, 'update'])->name('employee.update');
  Route::delete('data-karyawan/{id}', [EmployeesController::class, 'destroy'])->name('employee.delete');
  // Route for CRUD Data Karyawan End

  // Route for Export & Print Data Karyawan Start
  Route::get('data-karyawan/export', [EmployeesController::class, 'export'])->name('employees.export');
  Route::get('data-karyawan/print', [EmployeesController::class, 'print'])->name('employees.print');
  // Route for Export & Print Data Karyawan Start


  // Route for Change Password Start
  Route::put('change-password', [AuthController::class, 'changePassword'])->name('change.password');
  // Route for Change Password End

  // Route Logout Start
  Route::get('auth/logout', [AuthController::class, 'doLogout'])->name('doLogout');
  // Route Logout End
});

Route::middleware(isLogin::class)->group(function () {
  // Route for Authentication Start
  Route::get('auth/login', [AuthController::class, 'pageLogin'])->name('login');
  Route::post('auth/login', [AuthController::class, 'doLogin'])->name('doLogin');
  Route::get('auth/register', [AuthController::class, 'pageRegister'])->name('register');
  Route::post('auth/register', [AuthController::class, 'doRegister'])->name('doRegister');
  // Route for Authentication End
});
