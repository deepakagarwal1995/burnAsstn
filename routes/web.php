<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VisitorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ResourcesController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [VisitorController::class, 'index'])->name('index');
Route::view('/message-from-founder-president', 'visitors.message-founder')->name('message-founder');
Route::view('/message-from-president', 'visitors.message-president')->name('message-president');
Route::view('/messsage-from-secretary', 'visitors.message-secretary')->name('message-secretary');
Route::get('/about', [VisitorController::class, 'about'])->name('about');
Route::get('/past-presidents', [VisitorController::class, 'pastPresidents'])->name('pastPresidents');
Route::get('/history', [VisitorController::class, 'history'])->name('history');
Route::get('/bylaws-of-APBA', [VisitorController::class, 'bylaws'])->name('bylaws');
Route::get('/bidding-process', [VisitorController::class, 'bidding'])->name('bidding');
Route::get('/executive-committe', [VisitorController::class, 'exCommitte'])->name('committe');
Route::get('/advisors-committe', [VisitorController::class, 'adCommitte'])->name('advisorsCommitte');
Route::get('/membership', [VisitorController::class, 'membership'])->name('membership');
Route::get('/events', [VisitorController::class, 'events'])->name('events');
Route::get('/events-details/{id}', [VisitorController::class, 'eventsdetails'])->name('events-details');
Route::get('/past-events', [VisitorController::class, 'pastEvents'])->name('pastEvents');
Route::get('/reports', [VisitorController::class, 'reports'])->name('reports');
Route::get('/books', [VisitorController::class, 'books'])->name('books');
Route::post('/submit-basic', [VisitorController::class, 'submitBasic'])->name('submitBasic');
Route::get('/view-resource/{id}', [VisitorController::class, 'view_resource'])->name('view_resource');
Route::get('/member-detail/{id}/{name}', [VisitorController::class, 'view_member'])->name('committeeDetail');
Route::get('/PDF-resources', [VisitorController::class, 'PDFresources'])->name('PDFresources');
Route::get('/video-resources', [VisitorController::class, 'videoresources'])->name('videoresources');
Route::get('/blogs', [VisitorController::class, 'blogs'])->name('blogs');
Route::get('/registration', [VisitorController::class, 'registration'])->name('registration');
Route::get('/gallery', [VisitorController::class, 'gallery'])->name('gallery');
Route::get('/contact', [VisitorController::class, 'contact'])->name('contact');
Route::post('/registration-action', [VisitorController::class, 'submitRegistration'])->name('submitRegistration');
Route::post('/submitEnquiry', [VisitorController::class, 'submitEnquiry'])->name('submitEnquiry');


Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('admin');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/resource', [HomeController::class, 'resource'])->name('resource');
    Route::post('/change-password', [HomeController::class, 'ChangePassword'])->name('ChangePassword');
    Route::view('/update-password', 'admin.settings.changePassword')->name('updatePassword');
    Route::get('/member', [HomeController::class, 'member'])->name('member');
    Route::get('/member-add', [HomeController::class, 'memberAdd'])->name('memberAdd');
    Route::post('/registration-store', [HomeController::class, 'storeRegistration'])->name('registration.store');
    Route::get('/enquiry-delete/{id}', [HomeController::class, 'enquiryDelete'])->name('enquiry.delete');

    Route::resource('committee', CommitteeController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('events', EventsController::class);
    Route::resource('reports', ReportsController::class);
    Route::resource('ress', ResourcesController::class);
    Route::resource('gallery', GalleryController::class);
    Route::get('/reorder-members/{type}', [CommitteeController::class, 'reorderView'])->name('reorder.view');
    Route::get('/delete-member/{id}', [HomeController::class, 'deleteMember'])->name('delete.member');
    Route::post('/reorder-members', [CommitteeController::class, 'reorderAction'])->name('reorder.action');
});


Route::get('/storage-link', function () {
    $target = storage_path('app/public');
    $link = public_path('/storage');
    echo symlink($target, $link);
    // echo "symbolic link created successfully";
});
