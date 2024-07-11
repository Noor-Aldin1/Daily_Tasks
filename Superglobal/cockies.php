<?php
// Set cookie parameters
$cookie_name = "my_cookie";
$cookie_value = "Hello, this is my cookie value!";
$expiry_time = time() + (86400 * 30); // 30 days from now
$cookie_path = "/";
$domain = ""; // Set as appropriate
$secure = false; // Change to true if using HTTPS
$httponly = true; // HTTP only cookie

// Set the cookie
setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);

echo "Cookie '$cookie_name' is set.<br>";

// Retrieve all cookies
if(isset($_COOKIE)) {
    echo "<br>All Cookies:<br>";
    foreach ($_COOKIE as $key => $value) {
        echo $key . ' => ' . $value . '<br>';
    }
}

// Delete the cookie by setting its expiry time in the past
$cookie_name_to_delete = "my_cookie";
$cookie_path_to_delete = "/";

// Set expiry time to the past (1 hour ago)
setcookie($cookie_name_to_delete, "", time() - 3600, $cookie_path_to_delete);

echo "<br>Cookie '$cookie_name_to_delete' is deleted.";