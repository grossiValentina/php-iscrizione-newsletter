<?php

$email = $_GET["email"] ?? null; 

function filter_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
};