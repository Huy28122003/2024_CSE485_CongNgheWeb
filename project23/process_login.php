<?php
$users = [
    [
        "username" => "lamhubo2003",
        "password" => password_hash("lam123", PASSWORD_DEFAULT),
        "name" => "LamNguyen",
        "email" => "lamhubo2003@gmail.com"
    ],
];

session_start();
