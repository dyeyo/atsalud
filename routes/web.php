<?php

    Route::get('/', function () {
        return view('auth.auth');
    })->name('/')->middleware('guest');

    Route::post('login', 'Auth\LoginController@login')->name('login.access');
    Route::post('logout', 'Auth\LoginController@logout')->name('login.destroy');
    Route::post('temporary-password', 'Auth\RecoverPasswordController@temporyPassword')->name('login.temporary.password');
    Route::post('change-password', 'Auth\RecoverPasswordController@changePassword')->name('change.password');

    Route::group(['middleware' => 'revalidate'], function () {

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        Route::middleware(['auth'])->group(function (){

            //Roles
            Route::get('dashboard/module/roles/', 'RoleController@index')->name('roles.index')->middleware('permission:roles.index');

            Route::get('dashboard/roles/create', 'RoleController@create')->name('roles.create')->middleware('permission:roles.create');

            Route::post('dashboard/module/roles/store', 'RoleController@store')->name('roles.store')->middleware('permission:roles.create');

            Route::put('dashboard/module/roles/{role}', 'RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

            Route::get('dashboard/module/roles/{role}', 'RoleController@show')->name('roles.show')->middleware('permission:roles.show');

            Route::delete('dashboard/module/roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

            Route::get('dashboard/module/roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');

            //users
            Route::get('dashboard/module/users', 'UserController@index')->name('users.index')->middleware('permission:users.index');

            Route::get('dashboard/module/users/create', 'UserController@create')->name('users.create')->middleware('permission:users.create');

            Route::post('dashboard/module/users/store', 'UserController@store')->name('users.store')->middleware('permission:users.create');

            Route::put('dashboard/module/users/{user}', 'UserController@update')->name('users.update')->middleware('permission:users.edit');

            Route::get('dashboard/module/users/{user}', 'UserController@show')->name('users.show')->middleware('permission:users.show');

            Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');

            Route::get('dashboard/module/users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware('permission:users.edit');

            //entities
            Route::get('entities', 'EntityController@index')->name('entities.index')->middleware('permission:entities.index');

            Route::get('entities/create', 'EntityController@create')->name('entities.create')->middleware('permission:entities.create');

            Route::post('entities/store', 'EntityController@store')->name('entities.store')->middleware('permission:entities.create');

            Route::put('entities/{entity}', 'EntityController@update')->name('entities.update')->middleware('permission:entities.edit');

            Route::get('entities/{entity}', 'EntityController@show')->name('entities.show')->middleware('permission:entities.show');

            Route::delete('entities/{entity}', 'EntityController@destroy')->name('entities.destroy')->middleware('permission:entities.destroy');

            Route::get('entities/{entity}/edit', 'EntityController@edit')->name('entities.edit')->middleware('permission:entities.edit');

            //ips
            Route::get('ips', 'IpsController@index')->name('ips.index')->middleware('permission:ips.index');

            Route::get('ips/create', 'IpsController@create')->name('ips.create')->middleware('permission:ips.create');

            Route::post('ips/store', 'IpsController@store')->name('ips.store')->middleware('permission:ips.create');

            Route::put('ips/{ips}', 'IpsController@update')->name('ips.update')->middleware('permission:ips.edit');

            Route::get('ips/{ips}', 'IpsController@show')->name('ips.show')->middleware('permission:ips.show');

            Route::delete('ips/{ips}', 'IpsController@destroy')->name('ips.destroy')->middleware('permission:ips.destroy');

            Route::get('ips/{ips}/edit', 'IpsController@edit')->name('ips.edit')->middleware('permission:ips.edit');

           //health teams
            Route::get('healthteams', 'HealthTeamController@index')->name('health.teams.index')->middleware('permission:health.teams.index');

            Route::get('healthteams/create', 'HealthTeamController@create')->name('health.teams.create')->middleware('permission:health.teams.create');

            Route::post('healthteams/store', 'HealthTeamsController@store')->name('health.teams.store')->middleware('permission:health.teams.create');

            Route::put('healthteams/{healthteam}', 'HealthTeamController@update')->name('health.teams.update')->middleware('permission:health.teams.edit');

            Route::get('healthteams/{healthteam}', 'HealthTeamController@show')->name('health.teams.show')->middleware('permission:health.teams.show');

            Route::delete('healthteams/{healthteam}', 'HealthTeamController@destroy')->name('health.teams.destroy')->middleware('permission:health.teams.destroy');

            Route::get('healthteams/{healthteam}/edit', 'HealthTeamController@edit')->name('health.teams.edit')->middleware('permission:health.teams.edit');

         //emails
        Route::get('emails', 'EmailController@index')->name('emails.index')->middleware('permission:emails.index');

        Route::get('emails/create', 'EmailController@create')->name('emails.create')->middleware('permission:emails.create');

        Route::post('emails/store', 'EmailController@store')->name('emails.store')->middleware('permission:emails.create');

        Route::put('emails/{email}', 'EmailController@update')->name('emails.update')->middleware('permission:emails.edit');

        Route::get('emails/{email}', 'EmailController@show')->name('emails.show')->middleware('permission:emails.show');

        Route::delete('emails/{email}', 'EmailController@destroy')->name('emails.destroy')->middleware('permission:emails.destroy');

        Route::get('emails/{email}/edit', 'EmailController@edit')->name('emails.edit')->middleware('permission:emails.edit');

        //Cost Services
        Route::get('costservices', 'CostServiceController@index')->name('cost.services.index')->middleware('permission:cost.services.index');

        Route::get('costservices/create', 'CostServiceController@create')->name('cost.services.create')->middleware('permission:cost.services.create');

        Route::post('costservices/store', 'CostServiceController@store')->name('cost.services.store')->middleware('permission:cost.services.create');

        Route::put('costservices/{costservice}', 'CostServiceController@update')->name('cost.services.update')->middleware('permission:cost.services.edit');

        Route::get('costservices/{costservice}', 'CostServiceController@show')->name('cost.services.show')->middleware('permission:cost.services.show');

        Route::delete('costservices/{costservice}', 'CostServiceController@destroy')->name('cost.services.destroy')->middleware('permission:cost.services.destroy');

        Route::get('costservices/{costservice}/edit', 'CostServiceController@edit')->name('cost.services.edit')->middleware('permission:cost.services.edit');

        //affiliations
        Route::get('affiliations', 'AffiliationController@index')->name('affiliations.index')->middleware('permission:affiliations.index');

        Route::get('affiliations/create', 'AffiliationController@create')->name('affiliations.create')->middleware('permission:affiliations.create');

        Route::post('affiliations/store', 'AffiliationController@store')->name('affiliations.store')->middleware('permission:affiliations.create');

        Route::put('affiliations/{affiliation}', 'AffiliationController@update')->name('affiliations.update')->middleware('permission:affiliations.edit');

        Route::get('affiliations/{affiliation}', 'AffiliationController@show')->name('affiliations.show')->middleware('permission:affiliations.show');

        Route::delete('affiliations/{affiliation}', 'AffiliationController@destroy')->name('affiliations.destroy')->middleware('permission:affiliations.destroy');

        Route::get('affiliations/{affiliation}/edit', 'AffiliationController@edit')->name('affiliations.edit')->middleware('permission:affiliations.edit');

        //risk capture

        Route::get('catchmentrisks', 'RiskCaptureController@index')->name('risks.capture.index')->middleware('permission:risks.capture.index');

        Route::get('catchmentrisks/create', 'RiskCaptureController@create')->name('risks.capture.create')->middleware('permission:risks.capture.create');

        Route::post('catchmentrisks/store', 'RiskCaptureController@store')->name('risks.capture.store')->middleware('permission:risks.capture.create');

        Route::put('catchmentrisks/{catchmentrisk}', 'RiskCaptureController@update')->name('risks.capture.update')->middleware('permission:risks.capture.edit');

        Route::get('catchmentrisks/{catchmentrisk}', 'RiskCaptureController@show')->name('risks.capture.show')->middleware('permission:risks.capture.show');

        Route::delete('catchmentrisks/{catchmentrisk}', 'RiskCaptureController@destroy')->name('risks.capture.destroy')->middleware('permission:risks.capture.destroy');

        Route::get('catchmentrisks/{catchmentrisk}/edit', 'RiskCaptureController@edit')->name('risks.capture.edit')->middleware('permission:risks.capture.edit');

        //patients references
        Route::get('patientsreference', 'PatientReferenceController@index')->name('patients.reference.index')->middleware('permission:patients.reference.index');

        Route::get('patientsreference/create', 'PatientReferenceController@create')->name('patients.reference.create')->middleware('permission:patients.reference.create');

        Route::post('patientsreference/store', 'PatientReferenceController@store')->name('patients.reference.store')->middleware('permission:patients.reference.create');

        Route::put('patientsreference/{patientreference}', 'PatientReferenceController@update')->name('patients.reference.update')->middleware('permission:patients.reference.edit');

        Route::get('patientsreference/{patientreference}', 'PatientReferenceController@show')->name('patients.reference.show')->middleware('permission:patients.reference.show');

        Route::delete('patientsreference/{patientreference}', 'PatientReferenceController@destroy')->name('patients.reference.destroy')->middleware('permission:patients.reference.destroy');

        Route::get('patientsreference/{patientreference}/edit', 'PatientReferenceController@edit')->name('patients.reference.edit')->middleware('permission:patients.reference.edit');

        // clinic history
        Route::get('clinichistories', 'ClinicHistorieController@index')->name('clinic.histories.index')->middleware('permission:clinic.histories.index');

        Route::get('clinichistories/create', 'ClinicHistorieController@create')->name('clinic.histories.create')->middleware('permission:clinic.histories.create');

        Route::post('clinichistories/store', 'ClinicHistorieController@store')->name('clinic.histories.store')->middleware('permission:clinic.histories.create');

        Route::put('clinichistories/{clinichistorie}', 'ClinicHistorieController@update')->name('clinic.histories.update')->middleware('permission:clinic.histories.edit');

        Route::get('clinichistories/{clinichistorie}', 'ClinicHistorieController@show')->name('clinic.histories.show')->middleware('permission:clinic.histories.show');

        Route::delete('clinichistories/{clinichistorie}', 'ClinicHistorieController@destroy')->name('clinic.histories.destroy')->middleware('permission:clinic.histories.destroy');

        Route::get('clinichistories/{clinichistorie}/edit', 'ClinicHistorieController@edit')->name('clinic.histories.edit')->middleware('permission:clinic.histories.edit');

        Route::get('municipalities/{id}', 'MunicipalityController@loadMunicipality')->name('load.municipalities');


        });
    });
    Route::get('database', 'Functions@loadDtabase');

