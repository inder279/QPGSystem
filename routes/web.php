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




Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
    return view('welcome');
	})->name('home');

    //user sign up post -> register a new user
    Route::post('/signupControl', [
    	'uses'=> 'UserLoginController@postSignUp',
    	'as' => 'signupControl'
    	]);


    //admin sign in ->login
    Route::post('/adminLoginControl', [
    	'uses'=> 'AdminLoginController@postSignIn',
    	'as' => 'adminLoginControl'
    	]);

    
    //user sign in ->login
    Route::post('/signinControl', [
        'uses'=> 'UserLoginController@postSignIn',
        'as' => 'signinControl'
        ]);


    //user view
    Route::get('/user', [
        'uses'=> 'UserController@getUserView',
        'as' => 'user'
        ]);

     

    //add question view
    Route::get('/addQuestion', function () {
    return view('addQuestion');
    })->name('addQuestion');

    //save question route
    Route::post('/saveQuestion', [
        'uses'=> 'AddQuestionController@saveQuestion',
        'as' => 'saveQuestion'
        ]);

    //user log out
    Route::get('/logOut', [
        'uses'=> 'UserController@logOut',
        'as' => 'userLogOut'
        ]);

    //sign in view
        Route::get('/signin', function () {
            return view('signin');
        })->name('signin');

    //log in view
    Route::get('/loginform', function () {
        return view('login');
        })->name('login');

    //Admin log in form view
    Route::get('/adminLoginForm', function () {
        return view('adminLogin');
        })->name('adminLogin');

    //Coordinator log in form view
    Route::get('/coordinatorLoginForm', function () {
        return view('coordinatorLogin');
        })->name('coordinatorLogin');

    //users displaying
    Route::get('/displayUsers', [
        'uses'=> 'AdminController@getUsers',
        'as' => 'displayUsers'
        ]);

    //admins view
    Route::get('/adminHome', function () {
        return view('admin');
        })->name('adminHome');

    //add subject view
    Route::get('/addSubjectView', function () {
        return view('addSubject');
        })->name('addSubjectView');

    });

    
