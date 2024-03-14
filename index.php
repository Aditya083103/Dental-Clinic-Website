<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST["name"]);
    $rating = sanitize_input($_POST["rating"]);
    $comment = sanitize_input($_POST["comment"]);

    // Insert into database
    $sql = "INSERT INTO reviews (name, rating, comment) VALUES ('$name', '$rating', '$comment')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Review added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siddhi Dental Clinic</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Siddhi</strong>Dental </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
       
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/clinicphoto.jpg" alt="">
    </div>

    <div class="content">
        <h3>Your Gateway to Dental Health</h3>
        <p> We believe that a confident smile is a gateway to a happier and healthier dental life.</p>
        <a href="#appointment" class="btn">Book Appointment <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>1</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>10000+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>4</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>1</h3>
        <p>available dental Clinic</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>Take the best quality treatment for your teeth.</h3>
            <p>Welcome to Siddhi Dental Clinic, where your oral health is our top priority. We are a leading dental practice dedicated to providing exceptional care and creating beautiful, healthy smiles for our patients.

 </p>
            <p>At Siddhi Dental Clinic, our mission is to deliver the highest quality dental care in a welcoming and compassionate environment. We are committed to enhancing the overall well-being of our patients through comprehensive and personalized dental services.</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Discover a healthier smile with our free dental checkups, where our expert team ensures your oral health is in top shape.</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <!-- <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div> -->

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Consult with our skilled doctors and receive expert medical guidance to keep you at your best</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Get medication consultations with our pharmacists to understand and manage your prescriptions effectively</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>We have 4 beds with all the dental facilities.</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>With experience holistic well-being, we here assure you to give the best treatment possible.</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/Pratham Dad1.jpg" alt="">
            <h3>Dr. Ashish Bhalerao</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/drashishsdc?igsh=MTByNmgzNHV6ZXA2bg==" class="fab fa-instagram" id="instagramLink" target="_blank"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <!-- <div class="box">
            <img src="image/dr lady.jpg" alt="">
            <h3>Dr. Manjusha Kulkarni</h3>
            <span>Expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div> -->

        <!-- <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>win coder</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>win coder</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>win coder</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>win coder</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="image/doc-7.jpg" alt="">
            <h3>win coder</h3>
            <span>intern doctor</span>
            <div class="share">
                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>win coder</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>win coder</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div> -->

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>Make</span> Appointment </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<!-- <section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>Aditya Bhavsarr</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">It was a great experience!</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>Devam Dixit</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Personally I think, this was the best ever doctor I visited!</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>Kartikeya Dangat</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Best Doctor in Badlapur!</p>
        </div>

    </div>

</section> -->

<!-- This is my code -->

<section class="review" id="review">
        <h1 class="heading">Client's <span>Reviews</span></h1>
        <div class="box-container" id="reviewContainer">
            <!-- Existing reviews go here -->
        </div>
    </section>

    <section class="review-form">
        <div class="reviewformfinal" id="reviewfinal">
        <h2>Add Your Review</h2>
        <form id="addReviewForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>

            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>

            <button type="button" onclick="addReview()">Submit Review</button>
        </form>
        </div>
    </section>

<!-- review section ends -->

<!-- blogs section starts  -->

<!-- <section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section> -->

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <!-- <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a> -->
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <!-- <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a> -->
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8767672885 </a>
            <a href="#"> <i class="fas fa-phone"></i> +9969869140 </a>
            <a href="#"> <i class="fas fa-envelope"></i> aditya.bhavsar@somaiya.edu </a>
            <a href="#"> <i class="fas fa-envelope"></i> devam.d@somaiya.edu </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>B D L Acard, 1st Floor, Station Gandhi Chowk Road, Gajanna Mandir, Badlapur (E), Thane, Maharashtra 421503  </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <!-- <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a> -->
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/siddhidentalclinic?igsh=MXR6anZ6Nzh6cnA0Zg==" id="instagramLink"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <!-- <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a> -->
        </div>

    </div>

    <!-- <div class="credit"> created by <span>Team_IP</span> | all rights reserved </div> -->

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

