<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });

        // Auth gates for: Requests
        Gate::define('request_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });

        // Auth gates for: Human resources
        Gate::define('human_resource_access', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });

        // Auth gates for: Departments
        Gate::define('department_access', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('department_create', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('department_edit', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('department_view', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('department_delete', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });

        // Auth gates for: Employee balances
        Gate::define('employee_balance_access', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('employee_balance_create', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('employee_balance_edit', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('employee_balance_view', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('employee_balance_delete', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });

        // Auth gates for: Vacations
        Gate::define('vacation_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('vacation_create', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('vacation_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('vacation_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('vacation_delete', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });

        // Auth gates for: Vacation types
        Gate::define('vacation_type_access', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('vacation_type_create', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('vacation_type_edit', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('vacation_type_view', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });
        Gate::define('vacation_type_delete', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });

        // Auth gates for: In and out
        Gate::define('in_and_out_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('in_and_out_create', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('in_and_out_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('in_and_out_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('in_and_out_delete', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });

        // Auth gates for: Errand
        Gate::define('errand_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('errand_create', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('errand_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('errand_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('errand_delete', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });

        // Auth gates for: Overtime
        Gate::define('overtime_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('overtime_create', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('overtime_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('overtime_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });
        Gate::define('overtime_delete', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5]);
        });

        // Auth gates for: Contact management
        Gate::define('contact_management_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Contact companies
        Gate::define('contact_company_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Contacts
        Gate::define('contact_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Time management
        Gate::define('time_management_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Time work types
        Gate::define('time_work_type_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_work_type_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_work_type_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_work_type_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_work_type_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Time projects
        Gate::define('time_project_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_project_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_project_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_project_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_project_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Time entries
        Gate::define('time_entry_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_entry_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_entry_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_entry_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('time_entry_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Time reports
        Gate::define('time_report_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Faq management
        Gate::define('faq_management_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Faq categories
        Gate::define('faq_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_category_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_category_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_category_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Faq questions
        Gate::define('faq_question_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_question_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_question_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_question_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_question_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

    }
}
