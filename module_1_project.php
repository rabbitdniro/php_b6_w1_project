<?php

// ### 1. Number Classifier
// * Concepts Used: Variables, If-Else
// * Description:
// * Input a number through the terminal or define it in the script.
// * Use if-else to classify the number as positive, negative, or zero.

// Takes user input and saves in a variable
$user_input = (int) readline("Enter your number: ");

// Checks if the user input is positive/negative/zero
if ($user_input > 0) {
    echo "You entered number: $user_input is Positive!\n";
} elseif ($user_input < 0) {
    echo "You entered number: $user_input is Negative!\n";
} else {
    echo "You entered number: $user_input is Zero!\n";
}



// ### 2. Basic Authentication System
// * Concepts Used: Variables, Constants, If-Else
// * Description:
// * Use constants to store a predefined username and password.
// * Use variables to simulate a login attempt by assigning user input values.
// * Use if-else to check if the credentials match the stored constants and display success or failure messages.

// Username and Password saved as constant
define("USERNAME", "abc", false);
define("PASSWORD", "abc123");

// Takes user input for username and password and save them in variables
$user_user_name = (string) readline("Enter your username: ");
$user_pass_word = (string) readline("Enter your password: ");

// Checks if username and password match with the saved data
if ($user_user_name === USERNAME & $user_pass_word === PASSWORD) {
    echo "Your username and password are correct, login successful!\n";
} else {
    echo "Your username or password is wrong, login failed! Try again.\n";
}


// ### 3. Simple Electricity Bill Calculator
// * Concepts Used: Variables, If-Else
// * Description:
// * Use a variable for units consumed.
// * Define slabs for billing using if-else (e.g., 1–100 units = $5, 101–200 units = $10, etc.).
// * Calculate and display the total bill based on the entered units.

// Takes units from user
$user_units = (float) readline("Enter units: ");

// Billing slabs
$zero_to_hundred = 5;
$over_hundred_to_two_hundred = 10;
$over_two_hundred_to_three_hundred = 15;
$over_three_hundred = 20;

// Checks billing slab, calculates, and prints billing amount
if ($user_units <= 100) {
    $bill = $user_units * $zero_to_hundred;
    echo "Your total bill is $ $bill \n";
} elseif ($user_units <= 200) {
    $bill = (100 * $zero_to_hundred) + ($user_units - 100) * $over_hundred_to_two_hundred;
    echo "Your total bill is $ $bill \n";
} elseif ($user_units <= 300) {
    $bill = (100 * $zero_to_hundred) + (100 * $over_hundred_to_two_hundred) + ($user_units - 200) * $over_two_hundred_to_three_hundred;
    echo "Your total bill is $ $bill \n";
} else {
    $bill = (100 * $zero_to_hundred) + (100 * $over_hundred_to_two_hundred) + (100 * $over_two_hundred_to_three_hundred) + ($user_units - 300) * $over_three_hundred;
    echo "Your total bill is $ $bill \n";
}


// ### 4. Temperature Converter
// * Concepts Used: Variables, Constants, Switch
// * Description:
// * Use a constant for the conversion formula.
// * Ask the user to enter a temperature value in Celsius or Fahrenheit through PHP’s readline() function in the terminal.
// * Use a switch statement to select the type of conversion (Celsius to Fahrenheit or Fahrenheit to Celsius).

// Constants need to calculate C-F/F-C
define("RATIO", 9/5);
define("DEGREE", 32);

// Takes user input as temperature
$temperature = (float) readline("Enter temperature: ");

// Takes user input to decide C-F/F-C conversion
$choice = (int) readline("1 = C to F | 2 = F to C : ");

// Checks using switch case, calculates value and prints
switch($choice) {
    case 1:
        $result = ($temperature * RATIO) + DEGREE;
        echo "$temperature Celsius is equal to $result Fahrenheit.\n";
        break;
    case 2:
        $result = ($temperature - DEGREE) / RATIO;
        echo "$temperature Fahrenheit is equal to $result Celsius.\n";
        break;
    default:
        echo "Nothing to convert!\n";
}


?>