<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

        Route::resource('departments', 'DepartmentsController', ['except' => ['create', 'edit']]);

        Route::resource('vacations', 'VacationsController', ['except' => ['create', 'edit']]);

        Route::resource('in_and_outs', 'InAndOutsController', ['except' => ['create', 'edit']]);

        Route::resource('overtimes', 'OvertimesController', ['except' => ['create', 'edit']]);

});
