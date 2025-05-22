<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ethio-Visa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
   <meta name="google-site-verification" content="h2SiWuzwxnT6aBtUgXdDNfldI-MaGxdvOmXxFav-EAY" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
<link rel="shortcut icon" type="x-icon" href="img/ev.ico">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <style>
    body { 
      background-color: #f0f0f0; 
    }

    .card-box {
      max-width: 900px;
      margin: 0 auto;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      position: relative;
      margin-bottom: 20px;
    }

    .title {
      font-size: 27px; 
      color: darkblue;
    }

    .card-box p {
      font-size: 16px; 
    }

    .card-box .description {
      font-size: 14px; 
      display: flex;
      align-items: baseline;
    }

    .desctitle {
      font-size: 16px;
      margin-right: 10px;
      flex-shrink: 0;
      width: 100px;
    }

    .description p {
      margin-bottom: 10px;
    }

    .description-text {
      word-break: break-word;
    }

    .top-right-image {
      position: absolute;
      top: 0;
      right: 0;
      width: 80px;
      height: 80px;
      background-size: cover;
      background-position: center; 
      border-top-right-radius: 10%;
    }
  .nav {   
      padding: 10px;
      text-align: center;
      display: flex;
      justify-content: center;
}

.nav button {
  color: white;
  text-decoration: none;
  margin-right: 10px;
  background-color: #06BBCC;
  border: none; 
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-bottom: 10px;
}

.nav button:hover {
  background-color:  gray;
}

.section {
  display: none;
  margin-top: 30px; 
  padding: 20px;
  border-radius: 5px;
}

.section.active {
  display: block;
}
  

.section p {
  color: #333;
  line-height: 1.6;
}  



.image-gallery {
            display: flex;
            flex-wrap: wrap; 
        } 

        .image-container {
    margin: 10px;
    text-align: center;
    background-color: transparent;
    max-width: 400px;
    cursor: pointer;
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
}

.image-container:hover {
    transform: scale(1.4);
}

.image-container img {
    max-width: 100%;
    max-height: 100%;
}



  </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <b><h3 class="m-0 text-primary" style="font-family: 'Nunito', Times, serif, sans-serif;"><img style="margin-left:-20px;" src="img/ev.ico" width="95" height="75"> Ethio-Visa Consultancy</h3></b>
        </a>

       <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="toggleButton()" style="margin-left: auto; background-color: white; margin-bottom: 10px; color: white; padding: 5px;margin-top:-15px;">
  <span style="margin-left: auto; color: white;" class="navbar-toggler-icon"></span>
</button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="news.php" class="nav-item nav-link">News</a>
                <a href="countries.html" class="nav-item nav-link">Destinations</a>
                <a href="services.html" class="nav-item nav-link">Services</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="enroll.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Enroll Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
 
 <br>
 

 <div class="nav">  
  <button onclick="toggleSection(event, 'section1')">News for Work enrollments</button>
  <button onclick="toggleSection(event, 'section2')">News for School applications</button>
  <button onclick="toggleSection(event, 'section3')">Image news</button>
</div>


<!-- section 1 start  -->
<div class="section active" id="section1"> 

<?php
  // Database connection
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'sampledb';

  $conn = new mysqli($host, $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Query to retrieve four values from the database
  $sql = "SELECT * FROM users ORDER BY id DESC";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $title = $row['title'];
      $salary = $row['salary'];
      $address = $row['address'];
      $description = $row['description'];
      $country = $row['country'];
      ?>


<div class="card-box">

    



<?php 

if ($country === "china") {
    $imagePath = "img/china.jpg"; 

}else if ($country === "usa") {
  $imagePath = "img/usa.jpg"; 

}else if ($country === "canada") {
  $imagePath = "img/canada.jpg";

}else if ($country === "australia") {
  $imagePath = "img/australia.jpg"; 

}else if ($country === "poland") {
  $imagePath = "img/poland.jpg"; 

}else if ($country === "romania") {
  $imagePath = "img/romania.jpg"; 

}else if ($country === "turkey") {
  $imagePath = "img/turkey.jpg"; 

}else if ($country === "uae") {
  $imagePath = "img/uae.jpg"; 
}

else {
    $imagePath = "img/ev.ico"; // Default image path (Romania)
}
?>      

<img class="top-right-image" src="<?php echo $imagePath; ?>">
      


    <div class="description" >
      <div class="desctitle" style="color:darkblue; font-size:24px;">Title:</div>
      <p class="description-text" style="color:darkblue; font-size:24px;"> <?php echo $title; ?></p>
    </div>
 


    <div class="description">
      <div class="desctitle">Salary:</div>
      <p class="description-text"><?php echo $salary; ?></p>
    </div>
     
    <div class="description">
      <div class="desctitle">Address:</div>
      <p class="description-text"> <?php echo $address; ?></p>
    </div>
 
    <div class="description">
      <div class="desctitle">Description:</div>
      <p class="description-text"> <?php echo $description; ?></p>
    </div>
  </div>
     


      <?php
    }
  } else {
    echo "<div class='card-box'>";  
    echo "<div class='description'> ";
    echo" <p class='description-text' style='color:darkblue; text-align: center; font-size:24px;'> There are no news for today</p>";
    echo"</div>";
    echo"</div>"; 
    echo"</div>";
  }

  $conn->close();
  ?> 
</div>
<!-- section 1 end  -->

<div class="section" id="section2">
  <?php
    echo "<div class='card-box'>";  
    echo "<div class='description'> ";
    echo" <p class='description-text' style='color:darkblue; text-align: center; font-size:24px;'> There are no news for today</p>";
    echo"</div>";
    echo"</div>"; 
    echo"</div>";
?>

</div>



<div class="section" id="section3">
   <hr style="background-color:white;">
 <div class="image-gallery">
        <?php
        // Database connection
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'sampledb';

        $conn = new mysqli($host, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve images from the database
        $sql = "SELECT * FROM images ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $image_id = $row['id'];
                $image_name = $row['image_name'];
                $image_data = $row['image_data'];

                // Display the image
                echo '<div class="image-container">';
                echo '<hr style="color:black;">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($image_data) . '" alt="' . $image_name . '">';
                echo '<hr style="color:black;">';
                echo '</div>';
               
            }
        } else {
            echo "No images found.";
        }

        $conn->close();
        ?>
    </div>


</div>




<script>
function toggleSection(event, sectionId) {
  event.preventDefault();
  
  var sections = document.querySelectorAll('.section');
  for (var i = 0; i < sections.length; i++) {
    sections[i].classList.remove('active');
  }
  
  var selectedSection = document.getElementById(sectionId);
  selectedSection.classList.add('active');
}
</script>








    <!-- Footer Start -->

    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
 
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="services.html">Our services</a> 
                    <a class="btn btn-link" href="contact.html">Contact Us</a> 

                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>22, Addis Ababa, Ethiopia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+2519-10-52-67-05</p> 
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:Ethiovisa01@gmail.com">Ethiovisa01@gmail.com</a></p>
                   
                </div>


                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Business hours</h4> 
                    <p class="mb-2"><i class="fa fa-solid fa-arrow-right me-3"></i>Mon:	9:00 AM – 6:00 PM</p>
                    <p class="mb-2"><i class="fa fa-solid fa-arrow-right me-3"></i>Tue :	9:00 AM – 6:00 PM</p>
                    <p class="mb-2"><i class="fa fa-solid fa-arrow-right me-3"></i>Wed:	9:00 AM – 6:00 PM</p>
                    <p class="mb-2"><i class="fa fa-solid fa-arrow-right me-3"></i>Thu :	9:00 AM – 6:00 PM</p>
                    <p class="mb-2"><i class="fa fa-solid fa-arrow-right me-3"></i> Fri :	9:00 AM – 6:00 PM</p>
                    <p class="mb-2"><i class="fa fa-solid fa-arrow-right me-3"></i>Sat :	9:00 AM – 1:00 PM</p>
                    <p class="mb-2"><i class="fa fa-solid fa-arrow-right me-3"></i>Sun:	Closed</p>
                    
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Visit our Social Medias</h4> 
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://t.me/ethiovisa"><i class="fab fa-telegram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/people/Ethio-Visa/100091411388308/?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://wa.me/message/RMMSPTGACRIMD1"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://instagram.com/ethiovisa?igshid=MzMyNGUyNmU2YQ=="><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                 
            </div>
        </div>
 
        
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Ethio-Visa </a>, All Right Reserved.

                        
                        Designed By <a href="https://yonicodes.000webhostapp.com/index.html" class="border-bottom" title="0967285600">Yonicodes</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.html">Home</a>  
                            <a href="faq.html">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>