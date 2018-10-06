<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'user-status' => 'User status',			'remember-token' => 'Remember token',			'employee-code' => 'Employee code',			'gender' => 'Gender',			'dateofbirth' => 'Dateofbirth',			'job-title' => 'Job title',			'profile-picture' => 'Profile picture',			'department' => 'Department',		],	],
		'requests' => [		'title' => 'Requests',		'fields' => [		],	],
		'human-resources' => [		'title' => 'Human resources',		'fields' => [		],	],
		'departments' => [		'title' => 'Departments',		'fields' => [			'title' => 'Title',			'description' => 'Description',		],	],
		'employee-balances' => [		'title' => 'Employee balances',		'fields' => [			'employee-code' => 'Employee code',			'yearly-balance' => 'Yearly balance',			'casual-balance' => 'Casual balance',			'exhausted-annually' => 'Exhausted annually',			'exhausted-casual' => 'Exhausted casual',		],	],
		'vacations' => [		'title' => 'Vacations',		'fields' => [			'employee-code' => 'Employee code',			'request-date' => 'Request date',			'start-date' => 'Start date',			'end-date' => 'End date',			'count-days' => 'Count days',			'vacation-type' => 'Vacation type',			'reason' => 'Reason',			'employee-alternative' => 'Employee alternative',			'accepted-by-manager' => 'Accepted by manager',			'accepted-by-hr' => 'Accepted by hr',		],	],
		'vacation-types' => [		'title' => 'Vacation types',		'fields' => [			'title' => 'Title',			'inactive' => 'Inactive',		],	],
		'in-and-out' => [		'title' => 'In & out',		'fields' => [			'employee-code' => 'Employee code',			'in-out-type' => 'Type',			'request-date' => 'Request date',			'day' => 'Day',			'time' => 'Time',			'time-period' => 'Time period',			'reason' => 'Reason',		],	],
		'errand' => [		'title' => 'Errand',		'fields' => [			'employee-code' => 'Employee code',			'request-date' => 'Request date',			'start-date' => 'Start date',			'end-date' => 'End date',			'errand-period' => 'Errand period',			'employee-alternative' => 'Employee alternative',			'errand-reason' => 'Errand reason',		],	],
		'overtime' => [		'title' => 'Overtime',		'fields' => [			'employee-code' => 'Employee code',			'overtime-date' => 'Overtime date',			'time-start' => 'Time start',			'time-end' => 'Time end',			'period' => 'Period',			'overtime-reason' => 'Overtime reason',		],	],
		'contact-management' => [		'title' => 'Contact management',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Companies',		'fields' => [			'name' => 'Company name',			'address' => 'Address',			'website' => 'Website',			'email' => 'Email',		],	],
		'contacts' => [		'title' => 'Contacts',		'fields' => [			'company' => 'Company',			'first-name' => 'First name',			'last-name' => 'Last name',			'phone1' => 'Phone 1',			'phone2' => 'Phone 2',			'email' => 'Email',			'skype' => 'Skype',			'address' => 'Address',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Time',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'time-management' => [		'title' => 'Time management',		'fields' => [		],	],
		'time-work-types' => [		'title' => 'Work types',		'fields' => [			'name' => 'Name',		],	],
		'time-projects' => [		'title' => 'Projects',		'fields' => [			'name' => 'Name',		],	],
		'time-entries' => [		'title' => 'Time entries',		'fields' => [			'work-type' => 'Work type',			'project' => 'Project',			'start-time' => 'Start time',			'end-time' => 'End time',		],	],
		'time-reports' => [		'title' => 'Reports',		'fields' => [		],	],
		'faq-management' => [		'title' => 'FAQ Management',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',		],	],
		'faq-questions' => [		'title' => 'Questions',		'fields' => [			'category' => 'Category',			'question-text' => 'Question',			'answer-text' => 'Answer',		],	],
	'qa_create' => 'Стварыць',
	'qa_save' => 'Захаваць',
	'qa_edit' => 'Рэдагаваць',
	'qa_restore' => 'Аднавіць',
	'qa_permadel' => 'Выдаліць назаўсёды',
	'qa_all' => 'Усё',
	'qa_trash' => 'Смецце',
	'qa_list' => 'Спіс',
	'qa_logout' => 'Выйсці',
	'qa_add_new' => 'Дадаць новы',
	'qa_are_you_sure' => 'Вы ўпэўнены?',
	'qa_back_to_list' => 'Назад да спісу',
	'qa_delete' => 'Выдаліць',
	'qa_category' => 'Катэгорыя',
	'qa_categories' => 'Катэгорыі',
	'qa_sample_category' => 'Прыклад катэгорыі',
	'qa_questions' => 'Пытанні',
	'qa_question' => 'Пытанне',
	'qa_answer' => 'Адказ',
	'qa_sample_question' => 'Прыклад пытання',
	'qa_sample_answer' => 'Прыклад адказу',
	'qa_title' => 'Загаловак',
	'qa_roles' => 'Ролі',
	'qa_role' => 'Роля',
	'qa_users' => 'Карыстальнікі',
	'qa_user' => 'Карыстальнік',
	'qa_name' => 'Імя',
	'qa_email' => 'Імэйл',
	'qa_password' => 'Пароль',
	'qa_price' => 'Кошт',
	'qa_email_greet' => 'Вітаем',
	'qa_register' => 'Рэгістраваць',
	'qa_registration' => 'Рэгістрацыя',
	'qa_view' => 'Прагляд',
	'qa_update' => 'Абнавіць',
	'qa_no_entries_in_table' => 'Няма запісаў у табліцы',
	'qa_dashboard' => 'Панель',
	'qa_delete_selected' => 'Выдаліць абранае',
	'qa_user_management' => 'Кіраванне карыстальнікамі',
	'qa_address' => 'Адрэса',
	'qa_first_name' => 'Імя',
	'qa_last_name' => 'Прозвішча',
	'qa_phone' => 'Тэлефон',
	'qa_created_at' => 'Створана',
	'qa_updated_at' => 'Абноўлена',
	'qa_deleted_at' => 'Выдалена',
	'qa_please_select' => 'Калі ласка, абярыце',
	'qa_category_name' => 'Назва катэгорыі',
	'qa_product_management' => 'Кіраванне таварамі',
	'qa_products' => 'Тавары',
	'qa_product_name' => 'Назва тавара',
	'qa_content_management' => 'Кіраванне старонкамі',
	'qa_text' => 'Тэкст',
	'qa_dashboard_text' => 'Вы ўвайшлі ў сістэму!',
	'qa_forgot_password' => 'Забылі пароль?',
	'qa_remember_me' => 'Памятаць мяне',
	'qa_login' => 'Увайсці',
	'qa_change_password' => 'Змяніць пароль',
	'qa_print' => 'Раздрукаваць',
	'qa_description' => 'Апісаннне',
	'qa_phone1' => 'Тэлефон 1',
	'qa_phone2' => 'Тэлефон 2',
	'qa_photo1' => 'Фота1',
	'qa_photo2' => 'Фота2',
	'qa_photo3' => 'Фота3',
	'qa_calendar' => 'Каляндар',
	'qa_notes' => 'Зацемки',
	'qa_pages' => 'Старонки',
	'qa_show' => 'Паказаць',
	'qa_group_by' => 'Групаваць па',
	'quickadmin_title' => 'VacationsBox',
];