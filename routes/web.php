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

Route::get('/', function () {
    return view('welcome');
});


Route::any('/getmsg', 'BannerController@indexTest');

//
Route::get('ajaxRequest', 'HomeController@ajaxRequest');

Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');
Route::get('/ajaxPageView', 'HomeController@ajaxPageView')->name('ajaxPageView');
Route::any('/ajaxPageView/{pageViewId}/view', 'HomeController@ajaxPageViewLoad');

Route::get('/test', 'HomeController@test')->name('test');
Route::get('/table', 'HomeController@tableList')->name('table');
Route::get('/create_product_test/create', 'ProductController@create_product')->name('create_product_test');
Route::post('/uplode_data/create', 'ProductController@uplode_data')->name('uplode_data');


//


Route::get('/', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    /**
     * receiveVoucher
     */

    Route::get('/paymentVoucher/add', 'ChartOfAccountController@paymentVoucherAdd')->name('paymentVoucherAdd');
    Route::post('/paymentVoucherSave', 'ChartOfAccountController@paymentVoucherSave')->name('paymentVoucherSave');
    Route::post('/receivedVoucherSave', 'ChartOfAccountController@receivedVoucherSave')->name('receivedVoucherSave');
    Route::get('/receiveVoucher/add', 'ChartOfAccountController@receiveVoucher')->name('receiveVoucher');
    //chartOfAccount

    Route::get('/chart-of-account/list', 'ChartOfAccountController@index')->name('chartOfAccountList');
    Route::get('/chart-of-account/create', 'ChartOfAccountController@create')->name('chartOfAccount');
    Route::post('/chart-of-account/create', 'ChartOfAccountController@store')->name('chartOfAccountStore');

    //chartOfAccount->code
    Route::get('/getChildListAndCode/parentId/{id}', 'ChartOfAccountController@getChildListAndCode');
    Route::get('/getParentListAndCode/ajax/{id}', 'ChartOfAccountController@getParentListAndCode');
    Route::get('/getHeadListAndCode/childId/{childId}', 'ChartOfAccountController@getHeadListAndCode');


    //chartOfAccount->tree
    Route::any('/getchildListTree/{rootId}/view', 'ChartOfAccountController@getChildListTree');
    Route::any('/getParentListTree/{rootId}/view', 'ChartOfAccountController@getParentListTree');
    Route::any('/getAccountHeadTree/{parentId}/view', 'ChartOfAccountController@getAccountHeadTree');


    //student  Applicant Controller
    Route::get('/admission/form', 'ApplicantController@create')->name('applicantCreate');
    Route::post('/applicant/create', 'ApplicantController@store')->name('storeApplicant');
    Route::get('/applicant/list', 'ApplicantController@index')->name('applicantList');

    Route::get('/applicant/{applicant}', 'ApplicantController@show')->name('applicantShow');
    Route::get('/applicant/{applicant}/edit', 'ApplicantController@edit')->name('editApplicant');
    Route::post('/applicant/{applicant}/edit', 'ApplicantController@update')->name('update_applicant');

    // Student list

    Route::get('/current/student/list', 'StudentInfoController@index')->name('currentStudent');
    Route::get('/student/list', 'StudentInfoController@oldStudent')->name('oldStudent');

    // teacher
    Route::get('/teacher/add', 'StudentInfoController@addTeacher')->name('addTeacher');
    //staff
    Route::get('/staff/add', 'StudentInfoController@addStaff')->name('addStaff');


    // session setting controller
    Route::get('/sessions/form', 'SessionsController@create')->name('sessionsCreate');
    Route::post('/sessions/form', 'SessionsController@store')->name('storeSession');
    Route::get('/sessions/list', 'SessionsController@index')->name('sessionsList');

    Route::get('/sessions/{sessions}/delete', 'SessionsController@destroy')->name('sessionsDestroy');

    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('products', 'ProductController');
});


// review

/*Route::get('/review', 'ReviewController@index')->name('review');
Route::get('/review/create', 'ReviewController@create')->name('create_review');
Route::post('/review/create', 'ReviewController@store')->name('store_review');
Route::get('/review/{review}/edit', 'ReviewController@edit')->name('edit_review');
Route::post('/review/{review}/edit', 'ReviewController@update')->name('update_review');
Route::get('/review/{review}/delete', 'ReviewController@destroy')->name('destroy_review');
*/