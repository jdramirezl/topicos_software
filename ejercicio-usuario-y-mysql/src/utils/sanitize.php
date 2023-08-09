<?php

function sanitizeUsername($username)
{
    // Trim any leading or trailing whitespace
    $username = trim($username);

    // Remove any HTML tags
    $username = strip_tags($username);

    // Convert special characters to HTML entities
    $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');


    return $username;
}

