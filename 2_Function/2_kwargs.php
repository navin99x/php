<?php

function display_user_data($username, $email, $password){
    echo "$username account details:\n";
    echo "Email: $email\n";
    echo "Pass: $password";
}

// display_user_data("ram", "ram@mail.us", "somepass");  // positional arguments
display_user_data(email: "ram@mail.us", username: "ram", password: "somepass");     # named/keyword argument.