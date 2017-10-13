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
    return redirect('login');
});

Route::get('manage_branches', [
    'as'   => 'branch_list',
    'uses' => 'BranchesController@branch_list',
]);


Route::group(['middleware' => 'userrole_student'], function ()
    {
            Route::get('/home', 'HomeController@index')->name('home');
    });
/*Master Urls*/

Route::group(['middleware' => 'userrole_inspector'], function ()
    {
        /*manage country*/
        Route::any('managecountry', [
            'as'   => 'countrymanage',
            'uses' => 'MasterController@mastercountrymanagement',
        ]);
        /*add and edit country*/
        Route::any('addcountry/{id}',[
            'as'   => 'addcountry',
            'uses' => 'MasterController@addcountry',
        ]);

        /*delete country*/
        Route::any('delete_counrty',[
            'as'   => 'delete_counrty',
            'uses' => 'MasterController@delete_counrty',
        ]);

        /*manage area*/
        Route::any('managearea',[
            'as'   => 'areamanagement',
            'uses' => 'MasterController@areamanagement',
        ]);

        /*add and edit country*/
        Route::any('addarea/{id}',[
            'as'   => 'addarea',
            'uses' => 'MasterController@addarea',
        ]);
    });

Auth::routes();
