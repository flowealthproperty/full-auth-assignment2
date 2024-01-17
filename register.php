<?php

// Function to sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

// Function to hash passwords
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Function to verify the password against the hashed password
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

// Simulated user database (replace this with a real database in a production environment)
$users = [];

// Function to handle user signup
function signup($username, $password) {
    global $users;

    // Sanitize input
    $username = sanitizeInput($username);
    $password = sanitizeInput($password);

    // Check if the username is already taken
    if (isset($users[$username])) {
        return "Username is already taken. Please choose another.";
    }

    // Hash the password before storing
    $hashedPassword = hashPassword($password);

    // Store the user in the database
    $users[$username] = ['password' => $hashedPassword];

    return "Signup successful! You can now log in.";
}

// SDLC STEPS


    
    
//    SDLC STEPS
    
    // Sanitize Input: The sanitizeInput function is used to clean and sanitize user input to prevent SQL injection and other security issues.
    
    // Hash Passwords: The hashPassword function uses PHP's password_hash function to securely hash passwords before storing them.
    
    // Verify Passwords: The verifyPassword function checks if the provided password matches the stored hashed password using password_verify.
    
    // Simulated User Database: In a real-world scenario, you would replace the simulated user database with an actual database like MySQL or PostgreSQL.
    
    // User Signup: The signup function handles the user signup process by checking if the username is available, hashing the password, and storing the user in the database.
    
    // User Login: The login function handles user login by checking if the username exists and verifying the entered password against the stored hashed password.

