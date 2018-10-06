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
	'qa_create' => 'Crear',
	'qa_save' => 'Guardar',
	'qa_edit' => 'Editar',
	'qa_view' => 'Ver',
	'qa_update' => 'Actualizar',
	'qa_list' => 'Listar',
	'qa_no_entries_in_table' => 'Sin valores en la tabla',
	'qa_custom_controller_index' => 'Índice del controlador personalizado (index).',
	'qa_logout' => 'Salir',
	'qa_add_new' => 'Agregar',
	'qa_are_you_sure' => 'Estás seguro?',
	'qa_back_to_list' => 'Regresar a la lista?',
	'qa_dashboard' => 'Tablero de control',
	'qa_delete' => 'Eliminar',
	'qa_restore' => 'Restaurar',
	'qa_permadel' => 'Borrar permanentemente',
	'qa_all' => 'Todos',
	'qa_trash' => 'Papelera',
	'qa_delete_selected' => 'Eliminar seleccionado',
	'qa_category' => 'Categoría',
	'qa_categories' => 'Categorias',
	'qa_title' => 'Título',
	'qa_roles' => 'Roles',
	'qa_role' => 'Rol',
	'qa_user_management' => 'Administración de usuarios',
	'qa_users' => 'Usuarios',
	'qa_user' => 'Usuario',
	'qa_name' => 'Nombre',
	'qa_email' => 'Correo',
	'qa_password' => 'Contraseña',
	'qa_remember_token' => 'Recordar token',
	'qa_permissions' => 'Permisos',
	'qa_client' => 'Cliente',
	'qa_current_password' => 'Contraseña actual',
	'qa_new_password' => 'Contraseña nueva',
	'qa_password_confirm' => 'Confirmación de contraseña nueva',
	'qa_dashboard_text' => 'Ha iniciado sesión',
	'qa_forgot_password' => 'Olvidó su contraseña?',
	'qa_remember_me' => 'Recuerdame',
	'qa_login' => 'Iniciar sesión',
	'qa_copy' => 'Copiar',
	'qa_reset_password' => 'Reiniciar contraseña',
	'qa_email_greet' => 'Hola',
	'qa_confirm_password' => 'Confirmar contraseña',
	'qa_please_select' => 'Por favor seleccione',
	'qa_questions' => 'Preguntas',
	'qa_question' => 'Pregunta',
	'qa_answer' => 'Respuesta',
	'qa_project' => 'Proyecto',
	'qa_expenses' => 'Gastos',
	'qa_expense' => 'Gasto',
	'qa_amount' => 'Cantidad',
	'qa_address' => 'Dirección',
	'qa_contacts' => 'Contactos',
	'qa_first_name' => 'Nombre',
	'qa_last_name' => 'Apellido',
	'qa_phone' => 'Teléfono',
	'qa_category_name' => 'Nombre de categoría',
	'qa_products' => 'Productos',
	'qa_product_name' => 'Nombre de producto',
	'qa_price' => 'Precio',
	'qa_tag' => 'Etiqueta',
	'qa_photo1' => 'Foto 1',
	'qa_photo2' => 'Foto 2',
	'qa_photo3' => 'Foto 3',
	'qa_calendar' => 'Calendario',
	'qa_tasks' => 'Tareas',
	'qa_status' => 'Estado',
	'quickadmin_title' => 'VacationsBox',
];