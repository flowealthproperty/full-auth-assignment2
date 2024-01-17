function login($username, $password) {
    global $users;

    // Sanitize input
    $username = sanitizeInput($username);
    $password = sanitizeInput($password);

    // Check if the username exists
    if (!isset($users[$username])) {
        return "Invalid username or password.";
    }

    // Verify the password
    if (verifyPassword($password, $users[$username]['password'])) {
        return "Login successful! Welcome, $username!";
    } else {
        return "Invalid username or password.";
    }
}
