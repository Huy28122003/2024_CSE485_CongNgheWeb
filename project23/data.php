<?php
$users = [
    [
        "username" => "johndoe",
        "password" => password_hash("password123", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com"
    ],
    [
        "username" => "huy",
        "password" => password_hash("1", PASSWORD_DEFAULT),
        "name" => "nguyen huy",
        "email" => "huy@gmail.com"
    ]
];
