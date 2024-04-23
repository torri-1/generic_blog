<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include "menu.php" ?>

<div class="container">
    <div class="display-section">
        <h1 id="welcome">Welcome to Our Blog!</h1>
        <table id="post-table">
            <tr>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Auctor urna nunc id cursus. Amet porttitor eget dolor morbi non arcu risus
                    quis. Amet volutpat consequat mauris nunc congue nisi vitae. Pellentesque id nibh tortor id aliquet
                    lectus proin. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Ridiculus
                    mus mauris vitae ultricies leo integer malesuada nunc vel. Duis at tellus at urna condimentum
                    mattis. Euismod elementum nisi quis eleifend quam. Maecenas ultricies mi eget mauris pharetra. Erat
                    pellentesque adipiscing commodo elit at imperdiet dui accumsan sit.
                </td>
                <td><img src="img/home-img1.jpg" alt="home-img1"></td>
            </tr>
            <tr>
                <td><img src="img/home-img2.jpg" alt="home-img2"></td>
                <td>Sit amet commodo nulla facilisi nullam vehicula ipsum. Ipsum dolor sit amet consectetur adipiscing
                    elit pellentesque.<br>Eleifend donec pretium vulputate sapien nec sagittis. Aliquet eget sit amet
                    tellus cras. Neque viverra justo nec ultrices dui sapien eget mi proin. Eget nulla facilisi etiam
                    dignissim diam. Ut porttitor leo a diam sollicitudin. Pulvinar etiam non quam lacus suspendisse
                    faucibus interdum posuere lorem. Vitae aliquet nec ullamcorper sit amet risus. Ipsum dolor sit amet
                    consectetur adipiscing elit ut. Sit amet consectetur adipiscing elit ut aliquam purus. Enim nulla
                    aliquet porttitor lacus luctus accumsan tortor posuere ac.
                </td>
            </tr>
            <tr>
                <td>Magna sit amet purus gravida quis blandit turpis cursus. Cras tincidunt lobortis feugiat vivamus at
                    augue eget arcu. Ut venenatis tellus in metus vulputate eu scelerisque. Nunc pulvinar sapien et
                    ligula ullamcorper malesuada proin. Semper viverra nam libero justo laoreet. Ac turpis egestas
                    integer eget. Quis hendrerit dolor magna eget est lorem ipsum dolor. Pretium fusce id velit ut
                    tortor pretium viverra. Vivamus at augue eget arcu dictum varius. Metus aliquam eleifend mi in nulla
                    posuere sollicitudin aliquam. Nulla at volutpat diam ut venenatis tellus in metus. Lorem sed risus
                    ultricies tristique nulla aliquet. Gravida arcu ac tortor dignissim convallis aenean.
                </td>
                <td><img src="img/home-img3.jpg" alt="home-img1"></td>
            </tr>
        </table>
    </div>
</div>

<?php include "copyright.php" ?>
</body>
</html>
