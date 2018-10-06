@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_action_access')
                <li class="{{ $request->segment(2) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('time_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-clock-o"></i>
                    <span class="title">@lang('quickadmin.time-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('time_work_type_access')
                <li class="{{ $request->segment(2) == 'time_work_types' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.time_work_types.index') }}">
                            <i class="fa fa-th"></i>
                            <span class="title">
                                @lang('quickadmin.time-work-types.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('time_project_access')
                <li class="{{ $request->segment(2) == 'time_projects' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.time_projects.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.time-projects.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('time_entry_access')
                <li class="{{ $request->segment(2) == 'time_entries' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.time_entries.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.time-entries.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('time_report_access')
                <li class="{{ $request->segment(2) == 'time_reports' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.time_reports.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.time-reports.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('request_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.requests.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('vacation_access')
                <li class="{{ $request->segment(2) == 'vacations' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.vacations.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.vacations.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('in_and_out_access')
                <li class="{{ $request->segment(2) == 'in_and_outs' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.in_and_outs.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.in-and-out.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('errand_access')
                <li class="{{ $request->segment(2) == 'errands' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.errands.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.errand.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('overtime_access')
                <li class="{{ $request->segment(2) == 'overtimes' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.overtimes.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.overtime.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('human_resource_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-chrome"></i>
                    <span class="title">@lang('quickadmin.human-resources.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('department_access')
                <li class="{{ $request->segment(2) == 'departments' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.departments.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.departments.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('employee_balance_access')
                <li class="{{ $request->segment(2) == 'employee_balances' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.employee_balances.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.employee-balances.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('vacation_type_access')
                <li class="{{ $request->segment(2) == 'vacation_types' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.vacation_types.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.vacation-types.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('contact_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-phone-square"></i>
                    <span class="title">@lang('quickadmin.contact-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('contact_company_access')
                <li class="{{ $request->segment(2) == 'contact_companies' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contact_companies.index') }}">
                            <i class="fa fa-building-o"></i>
                            <span class="title">
                                @lang('quickadmin.contact-companies.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('contact_access')
                <li class="{{ $request->segment(2) == 'contacts' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contacts.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span class="title">
                                @lang('quickadmin.contacts.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('faq_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-question"></i>
                    <span class="title">@lang('quickadmin.faq-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('faq_category_access')
                <li class="{{ $request->segment(2) == 'faq_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.faq_categories.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.faq-categories.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('faq_question_access')
                <li class="{{ $request->segment(2) == 'faq_questions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.faq_questions.index') }}">
                            <i class="fa fa-question"></i>
                            <span class="title">
                                @lang('quickadmin.faq-questions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

            

            

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
