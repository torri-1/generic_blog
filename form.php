<?php
session_start();
include "db.php";
if (!empty($_POST)) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];

    if (isset($_POST["subscribe"]))
        $subscribe_checked = true;
    // Prepare data for insertion into the newsletter table
    if ($subscribe_checked) {
        // Insert data into the newsletter table
        $query = "INSERT INTO newsletter (`name`, email, age, gender, birthdate) 
                  VALUES ('$name', '$email', '$age', '$gender', '$birthdate')";

        try {
            mysqli_query($link, $query);
        } catch (mysqli_sql_exception) {
            $msg = "Failed to add to newsletter! :(";
        }
    }

//    $to = "g94454503@gmail.com";
//    $subject = "New Contact Form Submission";
//    $message = "Name: $name\n";
//    $message .= "Email: $email\n";
//    $message .= "Age: $age\n";
//    $message .= "Gender: $gender\n";
//    $message .= "Birthdate: $birthdate\n";
//    $message .= "------------------------------\n";
//    $message .= "Message: $message\n";
//    $message .= "------------------------------\n";
//
//    if (mail($to, $subject, $message)) {
//        $msg = "Thank you for your message!";
//    } else {
//        $msg = "Failed to submit the form. Please try again.";
//    }

    $my_file = fopen("user_messages.txt", "a") or die("Unable to open file!");
    date_default_timezone_set("EET");
    $message = "New Contact Form Submission - " . date("d/m/y h:ia") . "\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Age: $age\n";
    $message .= "Gender: $gender\n";
    $message .= "Birthdate: $birthdate\n";
    $message .= "------------------------------\n";
    $message .= "Message: " . $_POST["message"] . "\n";
    $message .= "------------------------------\n\n\n";

    if (fwrite($my_file, $message)) {
        $msg = "Thank you for your message!";
    } else {
        $msg = "Failed to submit the form. Please try again.";
    }

    fclose($my_file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Form</title>
</head>
<body>
<?php include "menu.php" ?>
<fieldset class="input-section">
    <legend><h2>Example Contact Form</h2></legend>
    <form action="form.php" method="POST">
        <table id="form-table">
            <tr>
                <td><label for="name" class="required">Name:</label></td>
                <td><input type="text" class="form-input" name="name" id="name" placeholder="First and Last"
                           required></td>
            </tr>
            <tr>
                <td><label for="email" class="required">Email:</label></td>
                <td><input type="email" class="form-input" id="email" name="email" placeholder="name@domain" required>
                </td>
            </tr>
            <tr>
                <td><label for="age" class="required">Age:</label></td>
                <td><input type="number" class="form-input" name="age" id="age" placeholder="Age" min="0" required></td>
            </tr>
            <tr>
                <td><label for="gender" class="required">Gender:</label></td>

                <td>
                    <input type="radio" name="gender" id="male" value="male" checked>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other" value="other">
                    <label for="other">Other</label>
                </td>
            </tr>
            <tr>
                <td><label for="birthdate" class="required">Birthdate:</label></td>
                <td><input type="date" class="form-input" name="birthdate" id="birthdate" required></td>
            </tr>
            <tr>
                <td><label for="city" class="required">City:</label></td>
                <td>
                    <select name="city" id="city" required>
                        <option value="" disabled selected>Select a city</option>
                        <option value="Amsterdam">Amsterdam</option>
                        <option value="Athens">Athens</option>
                        <option value="Berlin">Berlin</option>
                        <option value="Brussels">Brussels</option>
                        <option value="Budapest">Budapest</option>
                        <option value="Copenhagen">Copenhagen</option>
                        <option value="Dublin">Dublin</option>
                        <option value="Helsinki">Helsinki</option>
                        <option value="Lisbon">Lisbon</option>
                        <option value="London">London</option>
                        <option value="Madrid">Madrid</option>
                        <option value="Oslo">Oslo</option>
                        <option value="Paris">Paris</option>
                        <option value="Prague">Prague</option>
                        <option value="Rome">Rome</option>
                        <option value="Stockholm">Stockholm</option>
                        <option value="Vienna">Vienna</option>
                        <option value="Warsaw">Warsaw</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="favcolor">Preferred Color:</label></td>
                <td><input type="color" class="form-input" name="favcolor" id="favcolor" value="#006666"></td>
            </tr>
            <tr>
                <td><label for="message" class="required">Your Message:</label></td>
                <td><textarea id="message" name="message" rows="4" class="form-input" placeholder="*ଘ(੭*ˊᵕˋ)੭* ੈ✩‧₊˚..."
                              required></textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 10px 0;">
                    <input type="checkbox" name="subscribe" id="subscribe">
                    <label for="subscribe">Subscribe to newsletter</label>
                    <br>
                    <input type="checkbox" name="terms" id="terms" required>
                    <label for="terms" class="required">Agree to Terms of Service</label>
                </td>
            </tr>
        </table>
        <div class="message"><?php if (isset($msg)) echo $msg;?></div>
        <button type="submit">Submit</button>
    </form>
</fieldset>
<?php include "copyright.php" ?>
</body>
</html>
