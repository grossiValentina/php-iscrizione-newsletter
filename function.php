<?php

$email = $_GET["email"] ?? null; 

// funzione per filtrare la mail
function filter_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
};