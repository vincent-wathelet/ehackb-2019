<?php

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

//Auth::routes();

// User panel
Route::group(['middleware' => 'web'], function () {

    // Show index
    Route::get('/', function (){
        return view('ehackb.2019');
    });

    // Show user his info
    //Route::get('/show', 'RegistrationController@show');
    //Route::get('/home', 'RegistrationController@show')->name('home');

    // downlaods
    Route::get('/download/{file}','DownloadController@downloadppt');


    // Display Register form
     //Route::get('/new', 'RegistrationController@new');
     //Route::get('/register', 'RegistrationController@new');

    // Mailing handlers
     // Route::get('invite/{token}', 'RegistrationController@createMailInvite');
    // Route::get('confirmation/{token}', 'RegistrationController@userConfirmation');

    // Update activities
    //Route::post('editActivities', 'RegistrationController@editActivities');

    // Register post handlers
     //Route::post('storecasual', 'RegistrationController@storeCasual');
     //Route::post('registerpublic', 'RegistrationController@storePublicTeam');
     //Route::post('storeteam', 'RegistrationController@storeTeam');

    // Update options
    //Route::post('editOptions', 'RegistrationController@editOptions');
    //Route::post('editGaming','RegistrationController@editGaming');
    //Route::post('createGaming','RegistrationController@createGaming');
    //Route::post('storeTeamExistingUser', 'RegistrationController@storeTeamExistingUser');

    // Edit steamid
    //Route::post('editSteamID', 'RegistrationController@editSteamID');

    // Store a new Mail invited
    //Route::post('registermail', 'RegistrationController@storeMailInvite')->name('registermail');

    ////// Show user his info
    ////// Show user edit screen
    //Route::get('/edit', 'RegistrationController@edit');
    ////// Display form to register Casual
    //Route::get('registercasual', 'RegistrationController@createCasual');
    ////// Display form to register Public
    //Route::get('registerteam', 'RegistrationController@createPublic');
    ////// Display form to register
    //Route::get('register', 'RegistrationController@create');

});

// Admin panel
Route::group(['middleware' => ['auth', 'printer']], function () {

    // Print index
    Route::get('print', 'Printer\PrinterController@index');

    // Get users
    Route::get('print/users', 'Printer\PrinterController@search');

    // Set user status
    Route::post('print/users', 'Printer\PrinterController@update');

    // Print detail
    Route::get('print/{id}', 'Printer\PrinterController@detail');

});

// Admin panel
Route::group(['middleware' => ['auth', 'statistics']], function () {

    // Show statistics
    Route::get('statistics', 'Admin\AdminController@statistics');

});
Route::group(['middleware' => ['auth', 'admin']], function () {

    // Menu (manage)
    Route::get('admin', 'AdminController@index');
    // game registraties
    Route::get('/admin/gamereg', 'AdminController@gameregistratie');
    // activity inschrijving list
    Route::get('/admin/activityreg', 'AdminController@activityregistratie');
    Route::get('/admin/activityreg/{activity_id}', 'AdminController@activityregList');
    // soldo activity
    Route::get('/admin/usersaldo', 'AdminController@usersaldo');
    Route::get('/admin/excelsaldo', 'AdminController@excelsaldo');
    Route::get('/admin/excelgame', 'AdminController@excelgame');
    Route::get('/admin/excelactivity', 'AdminController@excelactivity');
    
    // Edit or create game
    Route::get('admin/game', 'AdminController@manageGame');
    //Route::post('admin/game', 'Admin\AdminController@managePostGame');
    Route::get('admin/game/{game_id}', 'AdminController@editGame');


});

