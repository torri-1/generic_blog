<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>
<body>
<?php include "menu.php" ?>

<div class="container">
    <div class="display-section">
    <div class="contact-info">
        <h2>Get in Touch</h2>
        <p>If you have any questions or inquiries, feel free to reach out to us. We're here to help!<br>
            Write to us through our <a href="form.php" target="_blank">Contact Form</a> or get in touch with us at:</p>
        <ul>
            <li><b>Email:</b> contact@genericblog.com</li>
            <li><b>Phone:</b> (+359) 8x xxxx xxx</li>
            <li><b>Address:</b> Generic Str., City, Country</li>
        </ul>
    </div>
    </div>
</div>

    <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6776544.377899636!2d142.7461218602388!3d9.515710057547762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x67328f3cd57de715%3A0x1bbe64e7a21aa7fc!2sMariana%20Trench!5e0!3m2!1sen!2sbg!4v1712428090382!5m2!1sen!2sbg"
                width="710" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>

<?php include "copyright.php" ?>
</body>
</html>
