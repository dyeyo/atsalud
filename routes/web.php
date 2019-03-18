<?php

    Route::get('/', function () {
        return view('auth.auth');
    })->name('/')
            ->middleware('guest');

    Route::post('login', 'Auth\LoginController@login')->name('login.access');
    Route::post('logout', 'Auth\LoginController@logout')->name('login.destroy');
    Route::post('temporary-password', 'Auth\RecoverPasswordController@temporyPassword')->name('login.temporary.password');
    Route::post('change-password', 'Auth\RecoverPasswordController@changePassword')->name('change.password');

    Route::group(['middleware' => 'revalidate'], function () {

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        //Route::middleware(['auth'])->group(function (){

            //Roles
            Route::get('roles/list', 'RoleController@index')->name('roles.index')
                    ->middleware('permission:roles.index');

            Route::get('roles/create', 'RoleController@create')->name('roles.create')
                    ->middleware('permission:roles.create');

            Route::post('roles/store', 'RoleController@store')->name('roles.store')
                    ->middleware('permission:roles.create');

            Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
                    ->middleware('permission:roles.edit');

            Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
                    ->middleware('permission:roles.show');

            Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
                    ->middleware('permission:roles.destroy');

            Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
                    ->middleware('permission:roles.edit');

            //users
            Route::get('users', 'UserController@index')->name('users.index')
                    ->middleware('permission:users.index');

        //     Route::get('users/create', 'UserController@create')->name('users.create')
        //             ->middleware('permission:users.create');

        //     Route::post('users/store', 'UserController@store')->name('users.store')
        //             ->middleware('permission:users.create');

            Route::put('users/{user}', 'UserController@update')->name('users.update')
                    ->middleware('permission:users.edit');

            Route::get('users/{user}', 'UserController@show')->name('users.show')
                    ->middleware('permission:users.show');

            Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
                    ->middleware('permission:users.destroy');

            Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
                    ->middleware('permission:users.edit');
       // });

    });
