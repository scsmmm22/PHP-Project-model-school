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
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <section class="header">
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
        <div class="text-box">
            <h1>World's biggest University</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas consectetur unde ullam explicabo quae et,
                odio repellendus dolor voluptas quia saepe <br> aut illum sunt rerum animi eaque? Numquam, velit
                officiis?
            </p>
            <a href="blog.php" class="hero-btn">Visit us to know more.</a>

        </div>
    </section>



    <!-- COURSE -->
    <section class="course">
        <h1>Courses we offer</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, ipsa!</p>


        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde delectus a placeat omnis quae nemo
                    obcaecati aperiam officia totam laboriosam.</p>
            </div>


            <div class="course-col">
                <h3>Degree</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde delectus a placeat omnis quae nemo
                    obcaecati aperiam officia totam laboriosam.</p>
            </div>
            <div class="course-col">
                <h3>Post-Graduation</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde delectus a placeat omnis quae nemo
                    obcaecati aperiam officia totam laboriosam.</p>
            </div>

        </div>
    </section>



    <!-- Campus -->
    <section class="campus">
        <h1>Our Global Campus</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, beatae?</p>
        <div class="row">
            <div class="campus-col">
                <img src="images/london.png" alt="image">
                <div class="layer">
                    <h3>LONDON</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/newyork.png" alt="image">
                <div class="layer">
                    <h3>NEW YORK</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/washington.png" alt="image">
                <div class="layer">
                    <h3>WASHINGTON</h3>
                </div>
            </div>
        </div>
    </section>




    <!-- Facilities -->


    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing el</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/library.png" alt="image">
                <h3>World class Library</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, nam.</p>
            </div>
            <div class="facilities-col">
                <img src="images/basketball.png" alt="image">
                <h3>Largest Playground</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, nam.</p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.png" alt="image">
                <h3>Tasty and healthy Food</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, nam.</p>
            </div>
        </div>

    </section>

    <!-- testimonials -->
    <section class="testimonials">
        <h1>What our students say!</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing el</p>
        <div class="row">

            <div class="testimonial-col">
                <img src="images/user1.jpg" alt="image">
                <div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt temporibus laborum a quod?</p>
                    <h3>Saumya Tiwari</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/user2.jpg" alt="image">
                <div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt temporibus laborum a quod?</p>
                    <h3>Saurabh Gupta</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action -->
    <section class="cta">
        <h1>Enroll For Our Various Online Courses <br>Anywhere From The World</h1>
        <a href="contact.php" class="hero-btn">CONTACT US</a>
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