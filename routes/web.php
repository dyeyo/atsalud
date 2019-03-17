<?php

    Route::get('/', function () {
        return view('auth.auth');
    })->name('/')->middleware('guest');

    Route::post('login', 'Auth\LoginController@login')->name('login.access');
    Route::post('logout', 'Auth\LoginController@logout')->name('login.destroy');
    Route::post('temporary-password', 'Auth\RecoverPasswordController@temporyPassword')->name('login.temporary.password');
    Route::post('change-password', 'Auth\RecoverPasswordController@recoverPassword')->name('change.password');
    Route::group(['middleware' => 'revalidate'], function () {

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

       /* Route::middleware(['auth'])->group(function (){

            //Roles
            Route::get('dashboard/roles/list', 'Role\RoleController@index')->name('roles.index')->middleware('permission:roles.index');

            Route::get('dashboard/roles/create', 'Role\RoleController@create')->name('roles.create')->middleware('permission:roles.create');

            Route::post('roles/store', 'Role\RoleController@store')->name('roles.store')->middleware('permission:roles.create');

            Route::put('roles/{role}', 'Role\RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

            Route::get('roles/{role}', 'Role\RoleController@show')->name('roles.show')->middleware('permission:roles.show');

            Route::delete('roles/{role}', 'Role\Role\RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

            Route::get('roles/{role}/edit', 'Role\Role\RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');

            //users
            Route::get('users', 'User\UserController@index')->name('users.index')->middleware('permission:users.index');

            Route::get('users/create', 'UserController@create')->name('users.create')->middleware('permission:users.create');

            Route::post('users/store', 'User\UserController@store')->name('users.store')->middleware('permission:users.create');

            Route::put('users/{user}', 'User\UserController@update')->name('users.update')->middleware('permission:users.edit');

            Route::get('users/{user}', 'User\UserController@show')->name('users.show')->middleware('permission:users.show');

            Route::delete('users/{user}', 'User\UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');

            Route::get('users/{user}/edit', 'User\UserController@edit')->name('users.edit')->middleware('permission:users.edit');
        });*/

    });
