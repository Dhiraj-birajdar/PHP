<?php

    // header("Content-type: text/plain"); // content type header
    // header("Location: http://www.google.com"); // redirection header
    // header("Expires: Sun, 11 Feb 2024 20:45:00 IST"); // expiration

    if(!isset($_SERVER['PHP_AUTH_USER'])){
        header('WWW-Authenticate: Basic realm="MyWebsite"');
        header('HTTP/1.0 401 Unauthorized');
        echo "enter valid username and password";
        exit;
    }else{
        if($_SERVER['PHP_AUTH_USER'] === "user"){
            
            echo "Hello ". $_SERVER['PHP_AUTH_USER'] . "<br>";
            echo "you entered ". $_SERVER['PHP_AUTH_PW'] . "as your password <br>";
        }else{
            
            header('HTTP/1.0 401 Unauthorized');
            echo "who are you?";
        }
    }

// Function to validate the username and password
// function authenticate($username, $password) {
//     // Replace this with your actual authentication logic
//     $validUsername = 'user';
//     $validPassword = 'password';

//     return ($username === $validUsername && $password === $validPassword);
// }

// // Check if the Authorization header is set
// if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
//     // Get the Authorization header value
//     $authHeader = $_SERVER['HTTP_AUTHORIZATION'];

//     // Extract the authentication type and credentials
//     list($authType, $authData) = explode(' ', $authHeader, 2);

//     // Check if the authentication type is 'Basic'
//     if (strtolower($authType) === 'basic') {
//         // Decode the Base64-encoded credentials
//         $credentials = base64_decode($authData);

//         // Extract the username and password
//         list($username, $password) = explode(':', $credentials, 2);

//         // Validate the username and password
//         if (authenticate($username, $password)) {
//             echo "Authentication successful!";
//         } else {
//             // Authentication failed
//             header('HTTP/1.1 401 Unauthorized');
//             header('WWW-Authenticate: Basic realm="Restricted Area"');
//             echo "Authentication failed!";
//             exit;
//         }
//     }
// } else {
//     // Authorization header is not set
//     header('HTTP/1.1 401 Unauthorized');
//     header('WWW-Authenticate: Basic realm="Restricted Area"');
//     echo "Authentication required!";
//     exit;
// }



