<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\CalenderController;
// Route::get('/', function () {
//     return view('welcome');
// });
// profile
Route::group(['middleware' => ['auth']], function () {
    Route::get('profile', 'ProfileController@index');
    Route::post('update-profile', 'ProfileController@update');
});

// User
Route::group(['as' => 'client.', 'middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@index');
    // Notification
    Route::resource('notification', 'Admin\NotificationController');

    
});

Route::get('/', 'HomeController@home')->name('/');
Route::post('newsletter', 'HomeController@newsletter')->name('Newsletter');


Auth::routes();



// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth.admin']], function () {

    Route::get('/admin', 'HomeController@index')->name('home');
    Route::get('paid-users/{id?}', 'HomeController@paidUsers');
    


   
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

  // Events
  Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
  Route::resource('events', 'EventsController');
  //calender
  Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
  Route::post('events/addcomment/{id}','EventsController@addcomment')->name('events.addcomment');


     // social Media
     Route::resource('media', 'MediaController');
     Route::post('deleteMedia', 'MediaController@destroy')->name('deleteMedia');
     // Review
     Route::resource('review', 'ReviewController');
     Route::post('deleteReview', 'ReviewController@destroy')->name('deleteReview');
     // Newsletter
    Route::resource('newsletter', 'NewsletterController');
    Route::post('deleteNewsletter', 'NewsletterController@destroy')->name('deleteNewsletter');
    // Service
    Route::resource('service', 'ServiceController');
    Route::post('deleteService', 'ServiceController@destroy')->name('deleteService');
    // Notification
    Route::resource('notification', 'NotificationController');
    Route::post('/mark-as-read', 'NotificationController@markNotification')->name('markNotification');
    Route::post('send-all', 'NotificationController@sendAll')->name('sendAll');
// Get list of meetings.
Route::get('/appointment', 'MeetingController@list');

// Create meeting room using topic, agenda, start_time.
Route::post('/appointment/create', 'MeetingController@create')->name('createZoom');

    Route::get('/appointment/{id}',  'MeetingController@get')->name('ZoomEdit')->where('id', '[0-9]+');
Route::post('/appointment/{id}',  'MeetingController@update')->name('ZoomUpdate')->where('id', '[0-9]+');
Route::get('/delete_appointment/{id}',  'MeetingController@delete')->name('ZoomDelete')->where('id', '[0-9]+');
Route::view('appointment/create','admin/appointment/create')->name('createMeeting');
Route::view('appointment/start','admin/appointment/view');

    
});


Route::group(['middleware' => ['auth']], function () {

    Route::get('stripe', 'StripeController@stripe');
    Route::post('stripe', 'StripeController@stripePost')->name('stripe.post');
});

// Route::get('calendar-event', [CalenderController::class, 'index']);
// Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);
// // Route::get('fullcalender', [FullCalenderController::class, 'index']);
// Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);

// Route::get('events', [EventController::class, 'index']);
// Route::post('calendar/create-event', [FullCalenderController::class, 'create'])->name('calendar.create');
// Route::patch('calendar/edit-event', [FullCalenderController::class, 'edit'])->name('calendar.edit');
// Route::delete('calendar/remove-event', [FullCalenderController::class, 'destroy'])->name('calendar.destroy');
// Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
// Route::resource('events', 'EventsController');
    