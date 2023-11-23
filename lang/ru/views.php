<?php

return [
    'auth' => [
        'name' => 'Имя',
        'email' => 'Email',
        'password' => 'Пароль',
        'confirm_password' => 'Подтверждение',
        'already_registered' => 'Уже зарегистрированы?',
        'register' => 'Зарегистрировать',
        'remember_me' => 'Запомнить меня',
        'forgot_your_password' => 'Забыли пароль?',
        'log_in' => 'Войти',
        'email_password_reset_link' => 'Сбросить пароль',
    ],
    'actions' => [
        'delete' => 'Удалить',
        'delete_confirm' => 'Вы уверены?',
        'edit' => 'Изменить',
    ],
    'task_status' => [
        'index' => [
            'header' => 'Статусы',
            'create' => 'Создать статус',
            'id' => 'ID',
            'name' => 'Имя',
            'created_at' => 'Дата создания',
            'actions' => 'Действия',
        ],
        'create' => [
            'header' => 'Создать статус',
            'name' => 'Имя',
            'button' => 'Создать',
        ],
        'edit' => [
            'header' => 'Изменение статуса',
            'name' => 'Имя',
            'button' => 'Обновить',
        ],
    ],
    'task' => [
        'index' => [
            'header' => 'Задачи',
            'apply' => 'Применить',
            'create_task' => 'Создать задачу',
            'id' => 'ID',
            'status' => 'Статус',
            'name' => 'Имя',
            'created_by' => 'Автор',
            'assigned_to' => 'Исполнитель',
            'created_at' => 'Дата создания',
            'actions' => 'Действия',
        ],
        'create' => [
            'header' => 'Создать задачу',
            'name' => 'Имя',
            'description' => 'Описание',
            'status' => 'Статус',
            'placeholder' => '----------',
            'assigned_to' => 'Исполнитель',
            'labels' => 'Метки',
            'button' => 'Создать',
        ],
        'edit' => [
            'header' => 'Изменение задачи',
            'name' => 'Имя',
            'description' => 'Описание',
            'status' => 'Статус',
            'placeholder' => '----------',
            'assigned_to' => 'Исполнитель',
            'labels' => 'Метки',
            'button' => 'Обновить',
        ],
        'show' => [
            'header' => 'Просмотр задачи:',
            'name' => 'Имя:',
            'status' => 'Статус:',
            'description' => 'Описание:',
            'labels' => 'Метки:',
        ],
    ],
];
