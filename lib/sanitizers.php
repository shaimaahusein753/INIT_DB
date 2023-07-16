<?php

function sanitize_email($email = "") {
    return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
}
function is_valid_email($email = "") {
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL);
}
function is_valid_username($username=null) {
    return preg_match('/^[a-z0-9_-]{3,16}$/', $username);;
}