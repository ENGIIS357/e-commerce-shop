<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'can:access-admin-panel'])->prefix('admin')->group(function () {
    // ... existing routes ...
});
Route::get('/wiam-email', function () {
    $email = new \App\Mail\WelcomeEmail();
    Mail::to('wiam@gmail.com')->send($email);
    return 'تم إرسال البريد بنجاح!';
});

Route::get('/wiam-notification', function () {
    $user = \App\Models\User::first();
    $user->notify(new \App\Notifications\NewOrderNotification());
    return 'تم إرسال الإشعار بنجاح!';
});

require __DIR__.'/auth.php';
