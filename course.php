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
    <!-- headeer -->
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
        <h1>Our Courses</h1>
    </section>
    <!-- Courses -->

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

    <!-- facilities -->
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