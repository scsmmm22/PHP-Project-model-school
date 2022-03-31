<?php
    include_once('./connection.php');
    $msg='';
    $errMsg='';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $subject = mysqli_real_escape_string($conn,$_POST['subject']);
        $message = mysqli_real_escape_string($conn,$_POST['message']);

        $sql = "INSERT INTO contact_us(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
        if (mysqli_query($conn, $sql)) {
            $msg = "New record created successfully";
        } else {
            $errMsg = "Problem registering your Query";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- header -->
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="image"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Contact Us</h1>
    </section>
    <!-- contact-us -->
    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28624.220147946828!2d83.49240724149602!3d26.26077027486086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399181eb95a0ea23%3A0xd0cee95c8b994890!2sDohrighat%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1629024582561!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>XYZ Road, ABC Building</h5>
                        <p>Doharighat, Uttar Pradesh, IN</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+1 0123456789</h5>
                        <p>Monday to Saturday, 10AM to 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>info@mmmut.ac.in</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <span style="color:green;display:flex;justify-content:center;font-size: 24px; font-family: Arial, Helvetica, sans-serif">
                    <?php if($msg) echo $msg; ?>
                </span>
                <span style="color:red;display:flex;justify-content:center;font-size: 24px; font-family: Arial, Helvetica, sans-serif">
                    <?php if($errMsg) echo $errMsg; ?>
                </span>
                <form method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter Email Address" required>
                    <input type="text" name="subject" placeholder="Enter you subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" name='con' class="hero-btn red-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>



    <!-- footer -->
    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic consectetur repellat fugiat ut reprehenderit
            ullam ipsam! <br>Veritatis ad est deleniti veniam, cupiditate adipisci repellat!</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p></p>
    </section>




    <!-- Js code for toggle menu -->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

    </html>