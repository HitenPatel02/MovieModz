<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Akshay Kumar</title>
        <link rel="stylesheet" href="../../actresses/actresses.css">
        <script src="https://kit.fontawesome.com/1e7a3cbc65.js"
            crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <script src="https://kit.fontawesome.com/1e7a3cbc65.js"
            crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
include("../../../fronend/nev_actors.php");
require("../../../backend/db01.php");


$a_id = $_POST['a_id'];
            $sql = "SELECT * FROM actors WHERE a_id = '$a_id' " ;
            // $result = $conn->query($sql);
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);





?>



        <div class="container">
            <div class="container2">
                <div class="container-item1">
                    <img src="../../../admin/<?php echo $row['a_img_url']; ?>">
                </div>
                <div class="container-item2">
                    <div class="age">Name</div>
                    <div class="age">Debut Age</div>
                    <div class="age">Gender</div>
                    <div class="age">DOB</div>
                
                </div>
                <div class="container-item3">
                    <div class="age"><?php echo $row["a_name"]; ?></div>
                    <div class="age"><?php echo $row["a_age"]; ?></div>
                    <div class="age"><?php echo $row["a_gender"]; ?></div>
                    <div class="age"><?php echo $row["a_dob"]; ?></div>

                    
                   

                    <?php }?>
                </div>
            </div>
        </div>
        <!-- ----------------------------Footer---------------------------- -->
        <div class="footer">
            <h2>MoviezModz</h2>
            <div class="footer-row">
                <div class="footer-col">
                    <h1>M</h1>
                    <h4>Connect with Us</h4>
                    <div class="footer-icons">
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-x-twitter"></i>
                    </div>
                    <div class="download-icons">
                        <img src="../../../img/googleplay.png" class="download-img">
                    </div>
                    <!-- <div class="footer-contact"><h5>Contact Us:</h5><a href="#">herok2526@gmail.com</a></div> -->
                </div>

                <div class="footer-col">
                    <h3>Popular Hindi Movies</h3>
                    <a href>Kalki 2898 AD</a>
                    <a href>Munjya</a>
                    <a href>Shaitan</a>
                    <a href>Bahubali:The Beginning</a>
                    <a href>Fighter</a>
                    <a href>Jailer</a>
                </div>

                <div class="footer-col">
                    <h3>Must Watch</h3>
                    <a href>Avengers:Endgame</a>
                    <a href>Fast and Furious-X</a>
                    <a href>Spiderman:Far From Home</a>
                    <a href>Doctor Strange:Multiverse of Madness</a>
                </div>

                <div class="footer-col">
                    <h3>Genres</h3>
                    <a href>Comedy-drama</a>
                    <a href>Science-fiction</a>
                    <a href>Horror-comedy</a>
                    <a href>Magic</a>
                </div>

                <div class="footer-col">
                    <h3>Learn More</h3>
                    <a href>View Plans</a>
                    <a href>About Us</a>
                    <a href>FAQs/Help</a>
                    <a href>Privacy Help</a>
                    <a href>Terms of Service</a>
                </div>
            </div>
        </div>
        <hr>
        <!-- -----------------------------------Copyright---------------------------------- -->

        <div class="copyright">
            <i class="fa-solid fa-copyright"></i><h3>Copyright 2024 Shivam Hiten
                Mukul. All rights reserved.</h3>
        </div>

    </body>
</html>