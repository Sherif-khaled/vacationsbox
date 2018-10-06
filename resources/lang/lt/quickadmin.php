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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Laikas',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'time-management' => [		'title' => 'Time management',		'fields' => [		],	],
		'time-work-types' => [		'title' => 'Work types',		'fields' => [			'name' => 'Name',		],	],
		'time-projects' => [		'title' => 'Projects',		'fields' => [			'name' => 'Name',		],	],
		'time-entries' => [		'title' => 'Time entries',		'fields' => [			'work-type' => 'Work type',			'project' => 'Project',			'start-time' => 'Start time',			'end-time' => 'End time',		],	],
		'time-reports' => [		'title' => 'Reports',		'fields' => [		],	],
		'faq-management' => [		'title' => 'FAQ Management',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',		],	],
		'faq-questions' => [		'title' => 'Questions',		'fields' => [			'category' => 'Category',			'question-text' => 'Question',			'answer-text' => 'Answer',		],	],
	'qa_save' => 'Išsaugoti',
	'qa_update' => 'Atnaujinti',
	'qa_list' => 'Sąrašas',
	'qa_no_entries_in_table' => 'Įrašų nėra.',
	'qa_create' => 'Sukurti',
	'qa_edit' => 'Redaguoti',
	'qa_view' => 'Peržiūrėti',
	'qa_custom_controller_index' => 'Papildomo Controller\'io puslapis.',
	'qa_logout' => 'Atsijungti',
	'qa_add_new' => 'Pridėti naują',
	'qa_are_you_sure' => 'Ar esate tikri?',
	'qa_back_to_list' => 'Grįžti į sąrašą',
	'qa_dashboard' => 'Pagrindinis',
	'qa_delete' => 'Trinti',
	'qa_restore' => 'Atstatyti',
	'qa_permadel' => 'Ištrinti galutinai',
	'qa_all' => 'Rodyti viską',
	'qa_trash' => 'Rodyti ištrintus',
	'qa_delete_selected' => 'Trinti pažymėtus',
	'qa_category' => 'Kategorija',
	'qa_categories' => 'Kategorijos',
	'qa_sample_category' => 'Pavyzdinė kategorija',
	'qa_time' => 'Laikas',
	'qa_questions' => 'Klausimai',
	'qa_question' => 'Klausimas',
	'qa_answer' => 'Atsakymas',
	'qa_sample_question' => 'Pavyzdinis klausimas',
	'qa_sample_answer' => 'Pavyzdinis atsakymas',
	'qa_faq_management' => 'DUK valdymas',
	'qa_administrator_can_create_other_users' => 'Administratorius (gali kurti kitus vartotojus)',
	'qa_title' => 'Pavadinimas',
	'qa_roles' => 'Rolės',
	'qa_role' => 'Rolė',
	'qa_user_management' => 'Vartotojų valdymas',
	'qa_users' => 'Vartotojai',
	'qa_user' => 'Vartotojas',
	'qa_name' => 'Vardas',
	'qa_email' => 'El. Paštas',
	'qa_password' => 'Slaptažodis',
	'qa_user_actions' => 'Vartotojų veiksmai',
	'qa_campaign' => 'Kampanija',
	'qa_campaigns' => 'Kampanijos',
	'qa_description' => 'Aprašymas',
	'qa_valid_from' => 'Galioja nuo',
	'qa_valid_to' => 'Galioja iki',
	'qa_code' => 'Kodas',
	'qa_time_management' => 'Laiko valdymas',
	'qa_projects' => 'Projektai',
	'qa_time_entries' => 'Laiko įrašai',
	'qa_project' => 'Projektas',
	'qa_expenses' => 'Išlaidos',
	'qa_address' => 'Adresas',
	'qa_contact_management' => 'Kontaktų valdymas',
	'qa_contacts' => 'Kontaktai',
	'qa_first_name' => 'Vardas',
	'qa_last_name' => 'Pavardė',
	'qa_product_management' => 'Produktų valdymas',
	'qa_products' => 'Produktai',
	'qa_price' => 'Kaina',
	'qa_tags' => 'Žymos',
	'qa_tag' => 'Žyma',
	'qa_calendar' => 'Kalendorius',
	'qa_statuses' => 'Būsenos',
	'qa_task_management' => 'Užduočių valdymas',
	'qa_tasks' => 'Užduotys',
	'qa_status' => 'Būsena',
	'qa_text' => 'Tekstas',
	'qa_excerpt' => 'Ištrauka',
	'qa_pages' => 'Puslapiai',
	'qa_simple_user' => 'Paprastas vartotojas',
	'qa_permissions' => 'Leidimai',
	'qa_discount_amount' => 'Nuolaidos suma',
	'qa_discount_percent' => 'Nuolaida procentais',
	'qa_coupons_amount' => 'Kuponų kiekis',
	'qa_coupons' => 'Kuponai',
	'qa_coupon_management' => 'Kuponų valdymas',
	'qa_reports' => 'Ataskaitos',
	'qa_start_time' => 'Pradžios laikas',
	'qa_end_time' => 'Pabaigos laikas',
	'qa_expense_category' => 'Išlaidų kategorija',
	'qa_expense_categories' => 'Išlaidų kategorijos',
	'qa_expense_management' => 'Išlaidų valdymas',
	'qa_expense' => 'Išlaidos',
	'qa_companies' => 'Įmonės',
	'qa_company_name' => 'Įmonės pavadinimas',
	'qa_website' => 'Interneto svetainė',
	'qa_company' => 'Įmonė',
	'qa_phone' => 'Telefonas',
	'qa_photo' => 'Nuotrauka (maks. 8 MB)',
	'qa_category_name' => 'Kategorijos pavadinimas',
	'qa_product_name' => 'Produkto pavadinimas',
	'quickadmin_title' => 'VacationsBox',
];