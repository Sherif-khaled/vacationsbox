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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Zeit',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'time-management' => [		'title' => 'Time management',		'fields' => [		],	],
		'time-work-types' => [		'title' => 'Work types',		'fields' => [			'name' => 'Name',		],	],
		'time-projects' => [		'title' => 'Projects',		'fields' => [			'name' => 'Name',		],	],
		'time-entries' => [		'title' => 'Time entries',		'fields' => [			'work-type' => 'Work type',			'project' => 'Project',			'start-time' => 'Start time',			'end-time' => 'End time',		],	],
		'time-reports' => [		'title' => 'Reports',		'fields' => [		],	],
		'faq-management' => [		'title' => 'FAQ Management',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',		],	],
		'faq-questions' => [		'title' => 'Questions',		'fields' => [			'category' => 'Category',			'question-text' => 'Question',			'answer-text' => 'Answer',		],	],
	'qa_create' => 'Erstellen',
	'qa_save' => 'Speichern',
	'qa_edit' => 'Bearbeiten',
	'qa_view' => 'Betrachten',
	'qa_update' => 'Aktualisieren',
	'qa_list' => 'Liste',
	'qa_no_entries_in_table' => 'Keine Einträge in der Tabelle.',
	'qa_custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Abmelden',
	'qa_add_new' => 'Hinzufügen',
	'qa_are_you_sure' => 'Sind Sie sicher?',
	'qa_back_to_list' => 'Zurück zur Liste',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Löschen',
	'qa_restore' => 'Wiederherstellen',
	'qa_permadel' => 'Permant löschen',
	'qa_all' => 'Alle',
	'qa_trash' => 'Papierkorb',
	'qa_delete_selected' => 'Markierte löschen',
	'qa_category' => 'Kategorie',
	'qa_categories' => 'Kategorien',
	'qa_sample_category' => 'Beispielkategorie',
	'qa_questions' => 'Fragen',
	'qa_question' => 'Frage',
	'qa_answer' => 'Antwort',
	'qa_sample_question' => 'Beispielfrage',
	'qa_sample_answer' => 'Beispielantwort',
	'qa_faq_management' => 'FAQ Verwaltung',
	'qa_administrator_can_create_other_users' => 'Administrator (kann andere Benutzer erstellen)',
	'qa_simple_user' => 'Einfacher Benutzer',
	'qa_title' => 'Titel',
	'qa_roles' => 'Rollen',
	'qa_role' => 'Rolle',
	'qa_user_management' => 'Benutzerverwaltung',
	'qa_users' => 'Benutzer',
	'qa_user' => 'Benutzer',
	'qa_name' => 'Name',
	'qa_email' => 'E-Mail',
	'qa_password' => 'Passwort',
	'qa_remember_token' => 'Remember Token',
	'qa_permissions' => 'Zugriffsrechte',
	'qa_user_actions' => 'Prokoll',
	'qa_action' => 'Action',
	'qa_action_model' => 'Action Model',
	'qa_action_id' => 'Action ID',
	'qa_time' => 'Zeit',
	'qa_campaign' => 'Kampagne',
	'qa_campaigns' => 'Kampagnen',
	'qa_description' => 'Beschreibung',
	'qa_valid_from' => 'Gültig von',
	'qa_valid_to' => 'Gültig bis',
	'quickadmin_title' => 'VacationsBox',
];