<?php
    $users = [
    [
        "username" => "johndoe",
        "password" => password_hash("1", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "role" => "user"
    ],
    [
        "username" => "janedoe",
        "password" => password_hash("1", PASSWORD_DEFAULT),
        "name" => "Jane Doe",
        "email" => "janedoe@example.com",
        "role" => "admin"
    ],
    [
        "username" => "huy",
        "password" => password_hash("1", PASSWORD_DEFAULT),
        "name" => "huy nguyen",
        "email" => "huy.com",
        "role" => "user"
    ],
    [
        "username" => "nguyen",
        "password" => password_hash("2", PASSWORD_DEFAULT),
        "name" => "nguyen quang",
        "email" => "nguyen.com",
        "role" => "user"
    ]
];

$authorization_levels = [
    "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false,
    ],
    "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true,
    ],
    // ... add more levels
];
