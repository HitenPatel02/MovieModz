<?php
  include("../../fronend/nev_movie_sel_2.php");

  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kalki 2898 AD</title>
        <link rel="stylesheet" href="movie_sel.css">
        <link href="https://vjs.zencdn.net/7.21.1/video-js.css" rel="stylesheet" />
        <script src="https://vjs.zencdn.net/7.21.1/video.min.js"></script>

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
  .play-video{
    width: 100%;
    height: 500px;
    padding-top: 35px;
  } 

  .movie h2{
    margin-left: 40px;
    font-size: 30px;
    color: orangered;
  }
  .movie p{
    margin-left: 40px;
    margin-top: 10px;
    color: white;
  }
  .audio-only {
            width: 0;
            height: 0;
            display: none;
        }
   
   </style>
    </head>

    <body>
        <?php
        
        $sql="SELECT * FROM movies WHERE m_name='".$_SESSION['sel_movie']."';";
        
        $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            
            // echo "movie select = $c_name ";
            ?>

<div class="movie">

<!-- <video class="play-video" src="../Movie_uploed/<?php //echo $row['m_v_url'];?>"  ></video> -->

        <!-- Display the movie for streaming from the provided file path -->
        <video id="my-video"  class="play-video"  controls width="320" height="240" controls> 
            <source src="../Movie_uploed/<?php echo $row['m_v_url'];?>" type="video/mp4" >

            Your browser does not support the video tag.
        </video> 
        <!-- Video.js JS -->
        <script src="https://vjs.zencdn.net/7.21.1/video.min.js"></script>
<!-- Video element hidden (for audio-only) -->
      
        <p><?php //echo $row['m_v_url'];?></p>
        <h2><?php echo $row['m_name']; ?></h2>
        <p><?php echo $row['m_dis']; ?></p>
       
        
        

        <!-- Display the YouTube trailer link -->
       
    </div>


<?php
    }}
?>
    </body>