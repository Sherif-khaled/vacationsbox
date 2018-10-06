<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('departments', 'Admin\DepartmentsController');
    Route::post('departments_mass_destroy', ['uses' => 'Admin\DepartmentsController@massDestroy', 'as' => 'departments.mass_destroy']);
    Route::post('departments_restore/{id}', ['uses' => 'Admin\DepartmentsController@restore', 'as' => 'departments.restore']);
    Route::delete('departments_perma_del/{id}', ['uses' => 'Admin\DepartmentsController@perma_del', 'as' => 'departments.perma_del']);
    Route::resource('employee_balances', 'Admin\EmployeeBalancesController');
    Route::post('employee_balances_mass_destroy', ['uses' => 'Admin\EmployeeBalancesController@massDestroy', 'as' => 'employee_balances.mass_destroy']);
    Route::post('employee_balances_restore/{id}', ['uses' => 'Admin\EmployeeBalancesController@restore', 'as' => 'employee_balances.restore']);
    Route::delete('employee_balances_perma_del/{id}', ['uses' => 'Admin\EmployeeBalancesController@perma_del', 'as' => 'employee_balances.perma_del']);
    Route::resource('vacations', 'Admin\VacationsController');
    Route::post('vacations_mass_destroy', ['uses' => 'Admin\VacationsController@massDestroy', 'as' => 'vacations.mass_destroy']);
    Route::post('vacations_restore/{id}', ['uses' => 'Admin\VacationsController@restore', 'as' => 'vacations.restore']);
    Route::delete('vacations_perma_del/{id}', ['uses' => 'Admin\VacationsController@perma_del', 'as' => 'vacations.perma_del']);
    Route::resource('vacation_types', 'Admin\VacationTypesController');
    Route::post('vacation_types_mass_destroy', ['uses' => 'Admin\VacationTypesController@massDestroy', 'as' => 'vacation_types.mass_destroy']);
    Route::post('vacation_types_restore/{id}', ['uses' => 'Admin\VacationTypesController@restore', 'as' => 'vacation_types.restore']);
    Route::delete('vacation_types_perma_del/{id}', ['uses' => 'Admin\VacationTypesController@perma_del', 'as' => 'vacation_types.perma_del']);
    Route::resource('in_and_outs', 'Admin\InAndOutsController');
    Route::post('in_and_outs_mass_destroy', ['uses' => 'Admin\InAndOutsController@massDestroy', 'as' => 'in_and_outs.mass_destroy']);
    Route::post('in_and_outs_restore/{id}', ['uses' => 'Admin\InAndOutsController@restore', 'as' => 'in_and_outs.restore']);
    Route::delete('in_and_outs_perma_del/{id}', ['uses' => 'Admin\InAndOutsController@perma_del', 'as' => 'in_and_outs.perma_del']);
    Route::resource('errands', 'Admin\ErrandsController');
    Route::post('errands_mass_destroy', ['uses' => 'Admin\ErrandsController@massDestroy', 'as' => 'errands.mass_destroy']);
    Route::post('errands_restore/{id}', ['uses' => 'Admin\ErrandsController@restore', 'as' => 'errands.restore']);
    Route::delete('errands_perma_del/{id}', ['uses' => 'Admin\ErrandsController@perma_del', 'as' => 'errands.perma_del']);
    Route::resource('overtimes', 'Admin\OvertimesController');
    Route::post('overtimes_mass_destroy', ['uses' => 'Admin\OvertimesController@massDestroy', 'as' => 'overtimes.mass_destroy']);
    Route::post('overtimes_restore/{id}', ['uses' => 'Admin\OvertimesController@restore', 'as' => 'overtimes.restore']);
    Route::delete('overtimes_perma_del/{id}', ['uses' => 'Admin\OvertimesController@perma_del', 'as' => 'overtimes.perma_del']);
    Route::resource('contact_companies', 'Admin\ContactCompaniesController');
    Route::post('contact_companies_mass_destroy', ['uses' => 'Admin\ContactCompaniesController@massDestroy', 'as' => 'contact_companies.mass_destroy']);
    Route::resource('contacts', 'Admin\ContactsController');
    Route::post('contacts_mass_destroy', ['uses' => 'Admin\ContactsController@massDestroy', 'as' => 'contacts.mass_destroy']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('time_work_types', 'Admin\TimeWorkTypesController');
    Route::post('time_work_types_mass_destroy', ['uses' => 'Admin\TimeWorkTypesController@massDestroy', 'as' => 'time_work_types.mass_destroy']);
    Route::resource('time_projects', 'Admin\TimeProjectsController');
    Route::post('time_projects_mass_destroy', ['uses' => 'Admin\TimeProjectsController@massDestroy', 'as' => 'time_projects.mass_destroy']);
    Route::resource('time_entries', 'Admin\TimeEntriesController');
    Route::post('time_entries_mass_destroy', ['uses' => 'Admin\TimeEntriesController@massDestroy', 'as' => 'time_entries.mass_destroy']);
    Route::resource('time_reports', 'Admin\TimeReportsController');
    Route::resource('faq_categories', 'Admin\FaqCategoriesController');
    Route::post('faq_categories_mass_destroy', ['uses' => 'Admin\FaqCategoriesController@massDestroy', 'as' => 'faq_categories.mass_destroy']);
    Route::resource('faq_questions', 'Admin\FaqQuestionsController');
    Route::post('faq_questions_mass_destroy', ['uses' => 'Admin\FaqQuestionsController@massDestroy', 'as' => 'faq_questions.mass_destroy']);


    Route::get('language/{lang}', function ($lang) {
        return redirect()->back()->withCookie(cookie()->forever('language', $lang));
    })->name('language');});
