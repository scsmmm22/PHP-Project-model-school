<?php
    include_once('./connection.php');
    $msg='';
    $errMsg='';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $comment = mysqli_real_escape_string($conn,$_POST['comment']);

        $sql = "INSERT INTO comments(name,email,comment) VALUES('$name','$email','$comment')";
        if (mysqli_query($conn, $sql)) {
            $msg = "Successfull";
        } else {
            $errMsg = "Failed to post comment.";
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
        <h1>Our Certificate and Online Programs for 2021 </h1>
    </section>
    <!-- blog page content -->
    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="images/certificate.jpg" alt="image">
                <h2>Our Certificate and Online Programs for 2021 </h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores atque autem nemo architecto dolore
                    aperiam nisi, dolorem sed placeat debitis aut alias illum iure. Harum eligendi modi placeat
                    inventore eaque consequuntur praesentium. Voluptatem eveniet modi nesciunt quia magnam numquam culpa
                    labore, eum qui odio cupiditate suscipit animi, quae sint quibusdam aliquid non repudiandae?
                    Possimus quis exercitationem nesciunt quibusdam maxime voluptate tempore quidem repudiandae, magni
                    consectetur illum pariatur perspiciatis nostrum soluta ipsam ad natus quod assumenda?</p>
                <br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis laudantium omnis dignissimos
                    mollitia modi iste ut consectetur ducimus? Pariatur, sit possimus? Officia tempora, dolorem
                    obcaecati dolor quisquam aliquid consequatur quae omnis fugit accusamus. Officiis voluptas dolorem
                    nostrum sit ea consectetur? Dolor debitis nulla veniam possimus perferendis laudantium unde delectus
                    praesentium quaerat rerum illo officiis tempore optio atque suscipit ratione inventore ab, omnis
                    placeat asperiores velit. Accusantium commodi corporis vel laborum eum excepturi sint quos maiores.
                </p>
                <br>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id vel, accusamus incidunt laudantium
                    itaque soluta enim explicabo non nisi fugit cupiditate consequuntur distinctio delectus dolorem sunt
                    eligendi facere? Blanditiis at aperiam eos numquam, ipsum hic dicta vero eveniet illo doloribus,
                    odio et, vitae ad consequuntur ut laudantium saepe deleniti fugit quidem beatae quod dolorum! Odio
                    numquam, ut explicabo beatae provident eius aliquam in quia laborum quae natus fugiat eveniet ea
                    minima inventore facere, nulla aliquid!
                </p>
                <br/>
                <p style=" text-decoration: underline;color:black;font-size:23px;text-align:center;font-family:cursive">
                    Comments
                    
                    <br>
                    <br>
                    <div style=" font-size: 14px; font-family: cursive">
                    <?php
                        $sql2 = "SELECT * FROM COMMENTS";
                        $result = mysqli_query($conn, $sql2);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<div>
                                    <div> " . $row["name"]. "</div>
                                    <div> " . $row["comment"]. "</div>
                                </div> <hr/>";
                            }
                          } else {
                            echo "0 results";
                          }

                    ?>
                    </div>
                </p>
                <div class="comment-box">
                    <span style="display:flex;justify-content:center;color:green;text-align:center;font-size: 20px; font-family: Arial, Helvetica, sans-serif; width:20px; margin:auto;font-weight: bold">
                        <?php if($msg) echo $msg; ?>
                    </span>
                    <span class='errMsg'>
                        <?php if($errMsg) echo $errMsg; ?>
                    </span>
                    <h3>Leave a comment</h3>
                    <form class="comment-form" method='post'>
                        <input type="text" name='name' placeholder="Enter Name" required>
                        <input type="email" name='email' placeholder="Enter Email" required>
                        <textarea rows="5" name='comment' placeholder="Your comment" required></textarea>
                        <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                    </form>
                </div>


            </div>
            <div class="blog-right">
                <h3>Post Categories</h3>
                <div>
                    <span>Business Analytics</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Data Science</span>
                    <span>28</span>
                </div>
                <div>
                    <span>Machine Learning</span>
                    <span>27</span>
                </div>
                <div>
                    <span>Computer Science</span>
                    <span>20</span>
                </div>
                <div>
                    <span>Commerce</span>
                    <span>31</span>
                </div>
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