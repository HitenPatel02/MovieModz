
<?php

// $sel_nem = $_POST['c_name'];
// echo $sel_nem;
?>


<?php



// $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            include("../../fronend/nev_movie_sel_2.php");
            include("../../backend/db01.php");
            $_SESSION['sel_movie'] =   $_POST['c_name'];

            $sql="SELECT * FROM movies WHERE m_name='".$_SESSION['sel_movie']."';";
           
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            
            // echo "movie select = $c_name ";
            ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kalki 2898 AD</title>
        <link rel="stylesheet" href="movie_sel.css">
        <script src="https://kit.fontawesome.com/1e7a3cbc65.js"
            crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <script src="https://kit.fontawesome.com/1e7a3cbc65.js"
            crossorigin="anonymous"></script>
            <style>
                .container{
  width: 100%;
  height: 67.5vh;
  /* background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.85)),url(../); */
  <?php echo 'background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.85)),url(../'.$row['m_p_url'].');'?>
  /* background-size: cover; */
  background-position: center;
  padding: 10px 10%;
  position: relative;
}
            </style>
    </head>
    <body>
        <div class="header">
            
          
        </div>

        <div class="container">
            <div class="container-icon-items">
                <div class="container-icon">Premium</div>
                <div class="container-icon">U/A</div>
                <div class="container-icon">13+</div>
            </div>

            <!-- <div class="container-movie-name">Kalki 2898 AD</div> -->
            <div class="container-movie-name"><?php echo $row['m_name'];?></div>

            <!-- <div class="container-items-text">2023 | 2h 13m | Sci-Fi </div> -->
            <div class="container-items-text"><?php echo $row['m_time'].' | '.$row['m_year'] ;?>  </div>
            <div class="container-items-text">
            <?php
            $catagry_sql = "SELECT * FROM catagry_profile_movie_list WHERE m_name='".$_SESSION['sel_movie']."';";
            $catagry_result = $conn->query($catagry_sql);
            if ($catagry_result->num_rows > 0) {
                $catagry_number = 1;
                while($catagry_row = $catagry_result->fetch_assoc()) {
                    $catagry_number++;
                    // echo '<div class="container-items-text">'.$catagry_row['m_catagry'].'</div>';
                    echo  ' | ' .$catagry_row['m_catagry'];
                }
            }
            ?>
            
        </div>
            <div class="container-movie-description">
                <!-- Kalki 2898 AD is a 2024 Indian
                Telugu-language epic science fiction directed by Nag
                Ashwin and produced by Vyjayanthi Movies. The film stars Amitabh
                Bachchan, Kamal Haasan, Prabhas, Deepika Padukone and Disha
                Patani. Inspired by Hindu mythology, it is the first instalment
                in a planned Kalki Cinematic Universe. Set in a post-apocalyptic
                world in the year 2898 AD, the film follows a select group on a
                mission to save Kalki, the unborn child of SUM-80, a lab
                subject. -->
                <?php echo $row['m_dis'];?>
            </div>

            <div class="container-buttons">
            <form method='post'>
                    
                <button class="container-play-trailer" formaction='movie_sel_ply_tr.php' >Play Trailer</button>
                <button class="container-subscribe" formaction='Movie_play.php'>Play Now</button>
                
            </div>
            <div class="container-share-button">
            <a href="<?php echo $current_url; ?>" target="_blank">
                <button class="container-share" >Share</button>
    </a>  </form>   
            </div>
        </div>

        
        <?php

}
}
?>
<!-- ----------------------------cast-details----------------------- -->
      
        <div class="cast-details">
            <h1 class="cast-header">Star Cast</h1>
            <div class="cast-items">
                <!-- <div class="cast-icons">
                    <div class="cast-icons-texts">
                        <img src="../../img/face10.jpg" class="cast-image">
                        <h5 class="actor-name">Prabhas</h5>
                    </div>
                </div> -->
                <?php  
             $sql_cast="SELECT actors.a_name,actors.a_img_url,cast_profile_movie_list.cast_movie_name 
             FROM actors INNER JOIN cast_profile_movie_list 
                ON actors.a_name= cast_profile_movie_list.cast_name 
                WHERE cast_profile_movie_list.cast_movie_name='".$_SESSION['sel_movie']."';";
           
            $result_cast = mysqli_query($conn, $sql_cast);
            $cast_data = array();
            
             while($row_cast = mysqli_fetch_assoc($result_cast)) 
             
             {
                $cast_data[] = $row_cast;
             }
             foreach ($cast_data as $cast_data_row):
                echo '<div class="cast-icons">';
                echo '<div class="cast-icons-texts">';
                echo '<img src="../../admin/'.$cast_data_row['a_img_url'].'" class="cast-image">';
                echo '<h5 class="actor-name">'.$cast_data_row['a_name'].'</h5>';
                echo '</div>';
                echo '</div>';
             endforeach;
           // echo "movie select = $c_name ";
           ?>
                 
                    
                        
                        
                    
<!--
                <div class="cast-icons">
                    <div class="cast-icons-texts">
                        <img src="../../img/kamalhassan.jfif" class="cast-image">
                        <h5 class="actor-name">Kamal Hassan</h5>
                    </div>
                </div>

                <div class="cast-icons">
                    <div class="cast-icons-texts">
                        <img src="../../img/deepika.jpg" class="cast-image">
                        <h5 class="actor-name">Deepika Padukone</h5>
                    </div> -->
                <!-- </div> -->

                <!-- <div class="cast-icons">
                    <div class="cast-icons-texts">
                        <img src="../../img/disha.avif" class="cast-image">
                        <h5 class="actor-name">Disha Patani</h5>
                    </div>
                </div> -->
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
                        <img src="../../img/googleplay.png" class="download-img">
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