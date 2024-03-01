<?php
$users = [
    [
        "username" => "lam",
        "password" => password_hash("123", PASSWORD_DEFAULT),
        "name" => "Lam Nguyen",
        "email" => "hubo203@example.com",
        "role" => "user"
    ],
    [
        "username" => "admin",
        "password" => password_hash("1", PASSWORD_DEFAULT),
        "name" => "Jane Doe",
        "email" => "janedoe@example.com",
        "role" => "admin"
    ],
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
];
?>