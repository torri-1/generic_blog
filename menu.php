<header>
<div class="menu-container">
    <h1 class="logo">Generic Blog</h1>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
            <li><a href="logout.php">Logout</a></li>
            <?php
            } else {
            ?>
            <li><a href="login.php">Login</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>
</div>
</header>
