<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include "menu.php" ?>
<div class="container">
    <div class="display-section">
        <h2>About Us</h2>
        <p>Welcome to <b>Generic Blog</b>! We are a team of passionate bloggers dedicated to <em>[insert relevant topics
                or themes].</em></p>
        <p>Our journey began with a simple idea: to create a space where like-minded individuals could come
            together to explore, learn, and share their experiences. Whether you're a seasoned expert or just starting
            out,
            we believe that everyone has something valuable to contribute to the conversation.</p>
        <p>At <b>Generic Blog</b>, we strive to provide informative and engaging content that inspires and empowers our
            readers. From in-depth articles and how-to guides to thought-provoking opinion pieces, we cover a wide range
            of topics to cater to diverse interests.</p>
        <p>But <b>Generic Blog</b> is more than just a platform for information—it's a community. We encourage open
            dialogue and collaboration, fostering connections between people who share a common passion. Together, we
            can learn from each other, challenge assumptions, and spark new ideas.</p>
        <p>Our team consists of dedicated individuals who are committed to delivering high-quality content that
            resonates with our audience. With backgrounds ranging from <em>[insert relevant backgrounds, e.g.,
                journalism, technology, education]</em> our diverse perspectives enrich the content we produce.</p>
        <p>Whether you're here to expand your knowledge, find inspiration, or connect with others, we're thrilled to
            have
            you join us on this journey. Thank you for being a part of the <b>Generic Blog</b> community!</p>
    </div>


    <h2 style="padding-top: 30px">Our Teammates</h2>
    <div class="team-members">
        <div class="team-member">
            <img src="img/team-member1.png" alt="Team Member 1">
            <h3>John Doe</h3>
            <p>Founder & Editor-in-Chief</p>
        </div>
        <div class="team-member">
            <img src="img/team-member2.png" alt="Team Member 2">
            <h3>Jane Smith</h3>
            <p>Senior Writer</p>
        </div>
        <div class="team-member">
            <img src="img/team-member3.png" alt="Team Member 3">
            <h3>Sarah Walker</h3>
            <p>Photographer & Content Creator</p>
        </div>
        <div class="team-member">
            <img src="img/team-member4.png" alt="Team Member 4">
            <h3>John Smith</h3>
            <p>Manager HR</p>
        </div>
    </div>

</div>

<?php include "copyright.php" ?>
</body>
</html>
