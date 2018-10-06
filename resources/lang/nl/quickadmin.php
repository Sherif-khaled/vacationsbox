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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Tijdstip',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'time-management' => [		'title' => 'Time management',		'fields' => [		],	],
		'time-work-types' => [		'title' => 'Work types',		'fields' => [			'name' => 'Name',		],	],
		'time-projects' => [		'title' => 'Projects',		'fields' => [			'name' => 'Name',		],	],
		'time-entries' => [		'title' => 'Time entries',		'fields' => [			'work-type' => 'Work type',			'project' => 'Project',			'start-time' => 'Start time',			'end-time' => 'End time',		],	],
		'time-reports' => [		'title' => 'Reports',		'fields' => [		],	],
		'faq-management' => [		'title' => 'FAQ Management',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',		],	],
		'faq-questions' => [		'title' => 'Questions',		'fields' => [			'category' => 'Category',			'question-text' => 'Question',			'answer-text' => 'Answer',		],	],
	'qa_create' => 'Toevoegen',
	'qa_save' => 'Opslaan',
	'qa_edit' => 'Bewerken',
	'qa_view' => 'Bekijken',
	'qa_update' => 'Bijwerken',
	'qa_list' => 'Lijst',
	'qa_no_entries_in_table' => 'Geen inhoud gevonden',
	'qa_custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Logout',
	'qa_add_new' => 'Toevoegen',
	'qa_are_you_sure' => 'Ben je zeker?',
	'qa_back_to_list' => 'Terug naar lijst',
	'qa_dashboard' => 'Boordtabel',
	'qa_delete' => 'Verwijderen',
	'qa_restore' => 'Herstellen',
	'qa_permadel' => 'Definitief verwijderen',
	'qa_all' => 'Alle',
	'qa_trash' => 'Prullenbak',
	'qa_delete_selected' => 'Geselecteerde verwijderen',
	'qa_category' => 'Categorie',
	'qa_categories' => 'Categoriën',
	'qa_questions' => 'Vragen',
	'qa_question' => 'Vraag',
	'qa_answer' => 'Antwoord',
	'qa_sample_question' => 'Demo vraag',
	'qa_sample_answer' => 'Demo antwoord',
	'qa_faq_management' => 'FAQ beheer',
	'qa_administrator_can_create_other_users' => 'Beheerder (kan gebruikers toevoegen)',
	'qa_simple_user' => 'Gewone gebruiker',
	'qa_title' => 'Titel',
	'qa_roles' => 'Rollen',
	'qa_role' => 'Rol',
	'qa_user_management' => 'Gebruikersbeheer',
	'qa_users' => 'Gebruikers',
	'qa_user' => 'Gebruiker',
	'qa_name' => 'Naam',
	'qa_email' => 'E-mail',
	'qa_password' => 'Paswoord',
	'qa_remember_token' => 'Herinneringstoken',
	'qa_permissions' => 'Toelatingen',
	'qa_user_actions' => 'Gebruikeracties',
	'qa_action' => 'Actie',
	'qa_action_model' => 'Actie model',
	'qa_action_id' => 'Actie id',
	'qa_time' => 'Tijdstip',
	'qa_campaign' => 'Campagne',
	'qa_campaigns' => 'Campagnes',
	'qa_description' => 'Omschrijving',
	'qa_valid_from' => 'Geldig van',
	'qa_valid_to' => 'Geldig tot',
	'qa_discount_amount' => 'Bedrag korting',
	'qa_discount_percent' => 'Percentage korting',
	'qa_coupons_amount' => 'Bedrag coupon',
	'qa_coupons' => 'Coupons',
	'qa_code' => 'Code',
	'qa_redeem_time' => 'Inlevertijd',
	'qa_coupon_management' => 'Couponbeheer',
	'qa_time_management' => 'Tijdmanagement',
	'qa_projects' => 'Projecten',
	'qa_reports' => 'Rapporten',
	'qa_sample_category' => 'Demo categorie',
	'qa_work_type' => 'Soort werk',
	'qa_work_types' => 'Soorten werk',
	'qa_project' => 'Project',
	'qa_start_time' => 'Starttijd',
	'qa_end_time' => 'Eindtijd',
	'qa_expense_category' => 'Uitgave categorie',
	'qa_expense_categories' => 'Uitgave categoriën',
	'qa_expense_management' => 'Uitgavebeheer',
	'qa_expenses' => 'Uitgaven',
	'qa_expense' => 'Uitgave',
	'qa_amount' => 'Bedrag',
	'qa_income_categories' => 'Inkomst categorieën',
	'qa_monthly_report' => 'Maandelijks rapport',
	'qa_companies' => 'Bedrijven',
	'qa_company_name' => 'Naam bedrijf',
	'qa_address' => 'Adres',
	'qa_website' => 'Website',
	'qa_contact_management' => 'Contactbeheer',
	'qa_contacts' => 'Contacten',
	'qa_company' => 'Bedrijf',
	'qa_first_name' => 'Voornaam',
	'qa_last_name' => 'Familienaam',
	'qa_phone' => 'Telefoon',
	'qa_phone1' => 'Telefoon 1',
	'qa_phone2' => 'Teelefoon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Foto (max. 8mb)',
	'qa_category_name' => 'Categorienaam',
	'qa_product_management' => 'Productbeheer',
	'qa_products' => 'Producten',
	'qa_product_name' => 'Productnaam',
	'qa_price' => 'Prijs',
	'qa_tags' => 'Tags',
	'qa_tag' => 'Tag',
	'qa_photo1' => 'Foto1',
	'qa_photo2' => 'Foto2',
	'qa_photo3' => 'Foto3',
	'qa_calendar' => 'Kalender',
	'qa_statuses' => 'Statuten',
	'qa_task_management' => 'Takenbeheer',
	'qa_tasks' => 'Taken',
	'qa_status' => 'Statuut',
	'qa_attachment' => 'Bijlage',
	'qa_assigned_to' => 'Toegewezen aan',
	'qa_serial_number' => 'Serienummer',
	'qa_location' => 'Plaats',
	'qa_locations' => 'Plaatsen',
	'qa_assigned_user' => 'Toegewezen (gebruiker)',
	'qa_notes' => 'Notities',
	'quickadmin_title' => 'VacationsBox',
];