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
	'qa_create' => 'बनाइए (क्रिएट)',
	'qa_save' => 'सुरक्षित करे ',
	'qa_edit' => 'संपादित करे (एडिट)',
	'qa_view' => 'देखें',
	'qa_update' => 'सुधारे ',
	'qa_list' => 'सूची',
	'qa_no_entries_in_table' => 'टेबल मे एक भी एंट्री नही है ',
	'qa_custom_controller_index' => 'विशेष(कस्टम) कंट्रोलर इंडेक्स ।',
	'qa_logout' => 'लोग आउट',
	'qa_add_new' => 'नया समाविष्ट करे',
	'qa_are_you_sure' => 'आप निस्चित है ?',
	'qa_back_to_list' => 'सूची पे वापस जाए',
	'qa_dashboard' => 'डॅशबोर्ड ',
	'qa_delete' => 'मिटाइए',
	'quickadmin_title' => 'VacationsBox',
];