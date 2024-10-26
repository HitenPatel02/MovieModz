
<?php

// $sel_nem = $_POST['c_name'];
// echo $sel_nem;
?>


<?php



// $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            include("../../fronend/nev_movie_sel.php");
            include("../../backend/db01.php");

            $sel_catagry =$_POST['sel_catagry'];
                           // $conn->close();
                           
                    // echo $sel_catagry;  
            ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kalki 2898 AD</title>
        <link rel="stylesheet" href="movie_genres.css">
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
    <div class="action-header">
            <h2 class="action"><?php echo $sel_catagry;?></h2>
        </div>
        <div class="container">
            

        <?php


         
            $Sel_genres_sql = "SELECT catagry_profile_movie_list.m_catagry, catagry_profile_movie_list.m_name , movies.m_name,movies.m_p_url 
            FROM catagry_profile_movie_list 
            INNER JOIN movies 
            ON catagry_profile_movie_list.m_name= movies.m_name 
            WHERE catagry_profile_movie_list.m_catagry='$sel_catagry';";
            
           $Sel_genres_result = $conn->query($Sel_genres_sql);
                           $Sel_genres_data= array();
                           while ($row_Sel_genres = mysqli_fetch_assoc($Sel_genres_result)) {
                               $Sel_genres_data[] = $row_Sel_genres;
                           }

foreach ($Sel_genres_data as $Sel_genres_data_row):
   
   
    echo '<div class="card">';
    echo "<form method='post'>";
    echo '<a href="movie_sel.php">';  
    echo "<button formaction='movie_sel.php'>";
    
        echo '<img class="card-image" src="../'.$Sel_genres_data_row['m_p_url'] . ' ">';
        echo '</a>';
        echo '<div class="card-container">';
        echo '<h4><b>'.$Sel_genres_data_row['m_name'].'</b></h4>';
        echo "<input type='hidden' name='c_name' value='".$Sel_genres_data_row['m_name'] ."'>";
       
        
    
    
    echo '</div>';
    echo '</button>';
    echo '</form>';
    echo '</div>';

    
endforeach; 
        ?>
        <!-- </div>
            <div class="card">
                <a href="../../theboys/theboys.html"><img class="card-image" src="../../../img/action1.jpg"></a>
                <div class="card-container">
                  <h4><b>The Boys</b></h4>
                </div>
            </div>
    
            <div class="card">
                <a href="../../houseofthedragon/houseofthedragon.html"><img class="card-image" src="../../../img/action2.jfif"></a>
                <div class="card-container">
                  <h4><b>House Of The Dragons</b></h4>
                </div>
            </div>
    
            <div class="card">
                <a href="../../theacolyte/theacolyte.html"><img class="card-image" src="../../../img/action3.jpg"></a>
                <div class="card-container">
                  <h4><b>The Acolyte</b></h4>
                </div>
            </div>

            <div class="card">
                <a href="../../gameoofthrones/gameoofthrones.html"><img class="card-image" src="../../../img/action5.jpg"></a>
                <div class="card-container">
                  <h4><b>Game Of Thrones</b></h4>
                </div>
            </div>

            <div class="card">
                <a href="../../triggerwarning/triggerwarning.html"><img class="card-image" src="../../../img/action6.jpg"></a>
                <div class="card-container">
                  <h4><b>Trigger Warning</b></h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <a href="../../badboysrideordie/badboysrideordie.html"><img class="card-image" src="../../../img/action7.jpg"></a>
                <div class="card-container">
                  <h4><b>Bad Boys:Ride Or Die</b></h4>
                </div>
            </div>
    
            <div class="card">
                <a href="../../redone/redone.html"><img class="card-image" src="../../../img/action8.avif"></a>
                <div class="card-container">
                  <h4><b>Red One</b></h4>
                </div>
            </div>
    
            <div class="card">
                <a href="../../thefallout/thefallout.html"><img class="card-image" src="../../../img/action9.jpg"></a>
                <div class="card-container">
                  <h4><b>The Fallout</b></h4>
                </div>
            </div>

            <div class="card">
                <a href="../../madmaxfuryroad/madmaxfuryroad.html"><img class="card-image" src="../../../img/action10.jpg"></a>
                <div class="card-container">
                  <h4><b>Mad Max:Fury Road</b></h4>
                </div>
            </div>

            <div class="card">
                <a href="../../dune/dune.html"><img class="card-image" src="../../../img/action11.jpeg"></a>
                <div class="card-container">
                  <h4><b>Dune</b></h4>
                </div>
            </div>
        </div> -->
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
                        <img src="../../img/googleplay.png"
                            class="download-img">
                    </div>
                    <!-- <div class="footer-contact"><h5>Contact Us:</h5><a href="#">herok2526@gmail.com</a></div> -->
                </div>

                <div class="footer-col">
                    <h3>Popular Hindi Movies</h3>
                    <a href="../../kalki/kalki.html">Kalki 2898 AD</a>
                    <a href="../../munjya/munjya.html">Munjya</a>
                    <a href="../../shaitan/shaitan.html">Shaitan</a>
                    <a href="../../bahubalipart1/bahubali1.html">Bahubali:The Beginning</a>
                    <a href="../../fighter/fighter.html">Fighter</a>
                    <a href="../../jailer/jailer.html">Jailer</a>
                </div>

                <div class="footer-col">
                    <h3>Must Watch</h3>
                    <a href="../../endgame/endgame.html">Avengers:Endgame</a>
                    <a href="../../fastx/fastx.html">Fast and Furious-X</a>
                    <a href="../../spidermanfarfromhome/spidermanfarfromhome.html">Spiderman:Far From Home</a>
                    <a href="../../endgame/endgame.html">Doctor Strange:Multiverse of Madness</a>
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
            <i class="fa-solid fa-copyright"></i><h3>Copyright 2024 Shivam
                Hiten
                Mukul. All rights reserved.</h3>
        </div>

    </body>
</html>