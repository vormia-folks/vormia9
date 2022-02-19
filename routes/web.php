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
});

/**/

use App\Http\Controllers\AdminLogin;

/**
 * Admin Login
 */
Route::get('vma-admin', [AdminLogin::class, 'index']);

/**/

use App\Http\Controllers\AdminDashboard;

/**
 * Admin Dashboard
 */

Route::get('vma-admin/dashboard', [AdminDashboard::class, 'open']);

// Route::get('admin', 'AdminLogin@index')->name('admin'); //Login Page
// Route::get('level/open/{value}', ['uses' => 'CoreLevels@open'])->name('level/open'); //Create New (Access OPEN)

use App\Http\Controllers\AdminBlogs;

/**
 * Admin Blogs
 */

Route::get('vma-admin/blogs', [AdminBlogs::class, 'route']);
