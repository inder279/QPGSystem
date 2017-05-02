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
    //home
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

    //save subject route
    Route::post('/saveSubject', [
        'uses'=> 'SubjectController@saveSubject',
        'as' => 'saveSubject'
        ]);


    //views for basic three types of users
    //user view
    Route::get('/user', [
        'uses'=> 'UserController@getUserView',
        'as' => 'user'
        ]);

    //Coordinator view
    Route::get('/coordinatorHome', [
        'uses'=> 'CoordinatorController@getCoordinatorView',
        'as' => 'coordinator'
        ]);

    //admin views
    Route::get('/adminHome', [
        'uses'=> 'AdminController@getAdminView',
        'as' => 'admin'
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

    

    //add subject view
    Route::get('/addSubjectView', function () {
        return view('addSubject');
        })->name('addSubjectView');

    //subjects displaying
    Route::get('/displaySubjects', [
        'uses'=> 'SubjectController@getSubjects',
        'as' => 'displaySubjects'
        ]);

     //add subject view
    Route::get('/addSubject', function () {
    return view('addSubject');
    })->name('addSubject');

    //generate paper form view
    Route::get('/paperForm',[
    'uses'=> 'QuestionPaperController@getPaperForm',
        'as' => 'paperForm'
    ]);

    //generate paper
    Route::post('/generatePaper', [
        'uses'=> 'QuestionPaperController@generatePaper',
        'as' => 'generatePaper'
        ]);
    


    });

    
