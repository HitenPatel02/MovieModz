<!-- nevivbar -->
<?php
include("fronend/nev01.php");
include("backend/db01.php");
?>

        <!-- Slideshow-Images -->

        <div class="slideshow-container">
<?php
$slides_sql = "SELECT * FROM slides";
$slides_result = $conn->query($slides_sql);

?>
<?php
    if ($slides_result->num_rows > 0) {
        $slide_number = 1;
        while($slides_row = $slides_result->fetch_assoc()) {
            // echo '<div class="mySlides fade" style="display: ' . ($slide_number == 1 ? 'block' : 'none') . ';">';
           
            
            echo '<div class="mySlides fade">';
            // echo '<div class="numbertext">' . $slide_number . '</div>';
            
            echo '<div class="numbertext"></div>';
            echo "<form method='post'>";
           

            // echo "<a>";
            echo '<a href="movies/Movie_sel/movie_sel.php">';
            echo "<button class='transparent-button'  formaction ='movies/Movie_sel/movie_sel.php'  style='width:100%';>"; 
            // echo "<button   formaction ='movies/Movie_sel/movie_sel.php'>";  
            // echo '<a href="'.$row['link'].'?sld_name='.$row['caption'].'"';
           
            echo '<img src="movies/' . $slides_row['image_path'] . ' ">';
           
            // echo "<button   formaction ='movies/Movie_sel/movie_sel.php'>"; 
            echo '</a>';
            
            echo '<div class="slide-text flex"><h3><center>' . $slides_row['caption'] . '</center></h3></div>';
            echo "<input type='hidden' name='c_name' value='".$slides_row['caption'] ."'>";
            echo "</button>";
            echo '</form>';
            echo '</div>';
            
            $slide_number++;
        }
    } else {
        echo "No slides available.";
    }
    ?>

                <!-- Full-width images with number and caption text -->
            <!-- <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="pages/kalki/kalki.html"><img src="img/slide1.webp" style="width:100%"></a>
                <div class="slide-text"><h3>Kalki 2898 AD</h3></div>
            </div> -->

            <!-- <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="pages/fastx/fastx.html"><img src="img/slide2.webp" style="width:100%"></a>
                <div class="slide-text"><h3>Fast and Furious-X</h3></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="pages/endgame/endgame.html"><img src="img/slide3.webp" style="width:100%"></a>
                <div class="slide-text"><h3>Avengers:Endgame</h3></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="pages/mirzapur2/mirzpur2.html"><img src="img/slide4.jpg" style="width:100%"></a>
                <div class="slide-text"><h3>Mirzapur Season-2</h3></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="pages/pushpa/pushpa.html"><img src="img/slide5.jpg" style="width:100%"></a>
                <div class="slide-text"><h3>Pushpa:The Rise</h3></div>
            </div> -->

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(+1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <!-- <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div> -->
        <!-- ---------------------------New Release-------------------------- -->

        <?php
             $new_sql = "SELECT catagry_profile_movie_list.m_catagry, catagry_profile_movie_list.m_name , movies.m_name,movies.m_p_url 
             FROM catagry_profile_movie_list 
             INNER JOIN movies 
             ON catagry_profile_movie_list.m_name= movies.m_name 
             WHERE catagry_profile_movie_list.m_catagry='New Releases';";
             
        $new_result = $conn->query($new_sql);


?>
        <div class="new-release-header">
            <h2>New Releases</h2>
            <a href="#">See all </a>
        </div>



        
        <div class="new-release-hoverable-arrows">
            <div class="new-release-content">
               <?php
               if ($new_result->num_rows > 0) {
                $new_number = 1;
                while($new_row = $new_result->fetch_assoc()) {
                    
                    echo '<div>';
                    echo '<a href="movies/Movie_sel/movie_sel.php">';
                    echo "<form method='post'>";
                    echo "<button   formaction ='movies/Movie_sel/movie_sel.php' style='background-color: transparent'>";
                    // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
                    // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
                        echo '<img class="nrimg" src="movies/'. $new_row['m_p_url'] . ' ">';
                        
                        echo "<input type='hidden' name='c_name' value='".$new_row['m_name'] ."'>";
                        echo '</button>';
                    echo '</a>';
                    echo '</div>';
                    
                        $new_number++;

                }
            
            }
               ?>
               
               <div>
                    <a href="pages/insideout2/insideout2.html"><img class="nrimg" src="img/new-release1.webp" alt="1"
                    class="release-img"></a>
                </div>
                <div>
                    <a href="pages/aquietplace/aquietplace.html"><img class="nrimg" src="img/new-release2.jpg" alt="2"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/theacolyte/theacolyte.html"><img class="nrimg" src="img/new-release3.jpg" alt="3"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/badboysrideordie/badboysrideordie.html"><img class="nrimg" src="img/new-release4.webp" alt="4"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/deadpool/deadpool.html"><img class="nrimg" src="img/new-release5.jpg" alt="5"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/kalki/kalki.php"><img class="nrimg" src="img/new-release6.jpg" alt="6"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/munjya/munjya.html"><img class="nrimg" src="img/new-release7.jpg" alt="7"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/ghostbustersfrozen/ghostbustersfrozen.html"><img class="nrimg" src="img/new-release8.jpg" alt="8"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/theexorcism/theexorcism.html"><img class="nrimg" src="img/new-release9.jfif" alt="9"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/dorodopyaar/doordopyaar.html"><img class="nrimg" src="img/new-release10.avif" alt="10"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/fighter/fighter.html"><img class="nrimg" src="img/new-release11.jpg" alt="11"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/teribaatonmeiaisauljhajiya/teribaatonmeiaisauljhajiya.html"><img class="nrimg" src="img/new-release12.jpg" alt="12"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/crakk/crakk.html"><img class="nrimg" src="img/new-release13.jpg" alt="13"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/shaitan/shaitan.html"><img class="nrimg" src="img/new-release14.jpeg" alt="14"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/chanduchampion/chanduchampion.html"><img class="nrimg" src="img/new-release15.jpg" alt="15"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/madgaonexpress/madgaonexpress.html"><img class="nrimg" src="img/new-release16.jpg" alt="16"
                        class="release-img"></a>
                </div>
                <div>
                    <a href="pages/bademiyanchotemiyan/bademiyanchotemiyan.html"><img class="nrimg" src="img/new-release17.jfif" alt="17"
                        class="release-img"></a>
                </div>
            </div>
            <div class="new-release-left-arrow" style="visibility: visible;">
                <div class="arrow-left-icon"></div>
            </div>
            <div class="new-release-right-arrow" style="visibility: visible;">
                <div class="arrow-right-icon"></div>
            </div>
        </div>

        <!-- -------------------------------Upcoming-movies------------------------------ -->

        <?php
             $Upcoming_sql = "SELECT catagry_profile_movie_list.m_catagry, catagry_profile_movie_list.m_name , movies.m_name,movies.m_p_url 
             FROM catagry_profile_movie_list 
             INNER JOIN movies 
             ON catagry_profile_movie_list.m_name= movies.m_name 
             WHERE catagry_profile_movie_list.m_catagry='Upcoming';";
             
        $Upcoming_result = $conn->query($Upcoming_sql);


?>
        <div class="blockbuster-header">
            <h2>Upcoming Movies on MovieModz</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">


            <?php
               if ($Upcoming_result ->num_rows > 0) {
                $Upcoming_number = 1;
                while($Upcoming_row = $Upcoming_result->fetch_assoc()) {
                    
                    echo '<div>';
                    echo '<a href="movies/Movie_sel/movie_sel.php">';
                    echo "<form method='post'>";
                    echo "<button   formaction ='movies/Movie_sel/movie_sel.php' style='background-color: transparent'>";
                    // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
                    // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
                        echo '<img class="nrimg" src="movies/'. $Upcoming_row['m_p_url'] . ' ">';
                        echo '<div class="slide-text"><h3>'.$Upcoming_row['m_name'] .'</h3></div>';
                        echo "<input type='hidden' name='c_name' value='".$Upcoming_row['m_name'] ."'>";
                        echo '</button>';
                    echo '</a>';
                    echo '</div>';
                    
                        $Upcoming_number++;

                }
            
            }
               ?>
                <a href="pages/captainamericanewworldorder/captainamericanewworldorder.html"><div class="block-block" ><img src="img/upcom1.jpg" alt="1"><div class="slide-text"><h3>Captain America</h3></div></div></a>
                <a href="pages/stree2/stree2.html"><div class="block-block" ><img src="img/upcom2.jpg" alt="2"><div class="slide-text"><h3>Stree-2</h3></div></div></a>
                <a href="pages/singhamagain/singhamagain.html"><div class="block-block" ><img src="img/upcom3.jpg" alt="3"><div class="slide-text"><h3>Singham Again</h3></div></div></a>
                <a href="pages/doubleismart/doubleismart.html"><div class="block-block" ><img src="img/upcom4.jpg" alt="4"><div class="slide-text"><h3>Double iSmart</h3></div></div></a>
                <a href="pages/indian2/indian2.html"><div class="block-block" ><img src="img/upcom5.avif" alt="5"><div class="slide-text"><h3>Indian 2</h3></div></div></a>
                <!-- <a href="pages/Sar"></a><div class="block-block" ><img src="img/upcom6.avif" alt="6"><div class="slide-text"><h3>Sarfira</h3></div></div> -->
                <a href="pages/vedaa/vedaa.html"><div class="block-block" ><img src="img/upcom7.webp" alt="7"><div class="slide-text"><h3>Vedaa</h3></div></div></a>
                <a href="pages/gamechanger/gamechanger.html"><div class="block-block" ><img src="img/upcom8.avif" alt="8"><div class="slide-text"><h3>Game Changer</h3></div></div></a>
                <a href="pages/missionimpossible8/missionimpossible8.html"><div class="block-block" ><img src="img/upcom9.jpg" alt="9"><div class="slide-text"><h3>Mission Impossible 8</h3></div></div></a>
                <a href="pages/lumina/lumina.html"><div class="block-block" ><img src="img/upcom10.webp" alt="10"><div class="slide-text"><h3>Lumina</h3></div></div></a>
                <a href="pages/longlegs/longlegs.html"><div class="block-block" ><img src="img/upcom11.jfif" alt="11"><div class="slide-text"><h3>Longlegs</h3></div></div></a>
                <a href="pages/borderlands/borderlands.html"><div class="block-block" ><img src="img/upcom12.jfif" alt="12"><div class="slide-text"><h3>Borderlands</h3></div></div></a>
                <a href="pages/twisters/twisters.html"><div class="block-block" ><img src="img/upcom13.cHJkLWVtcy1hc3NldHMvbW92aWVzLzFiMjY4MTJmLTQzYWEtNDU2My1hODczLWMxMWIyMjZlODVhNC5qcGc=" alt="13"><div class="slide-text"><h3>Twisters</h3></div></div></a>
                <a href="pages/thesabarmatireport/thesabarmatireport.html"><div class="block-block" ><img src="img/upcom14.jpg" alt="14"><div class="slide-text"><h3>The Sabarmati Report</h3></div></div></a>
                <a href="pages/fallmetothemoon/fallmetothemoon.html"><div class="block-block" ><img src="img/upcom15.jpg" alt="15"><div class="slide-text"><h3>Fall me to the Moon</h3></div></div></a>
                <a href="pages/kathanar/kathanar.html"><div class="block-block" ><img src="img/upcom16.jfif" alt="16"><div class="slide-text"><h3>Kathanar</h3></div></div></a>
            </div>
        </div>
        <!-- ---------------------------------Genres----------------------------- -->

        <div class="genre-header">
            <h2>Genres</h2>
        </div>
        <div>
            <div class="genre-header-items">

            <?php 
                 $sql_Genres= "SELECT * FROM catagry " ;
                 $result_Genres = $conn->query($sql_Genres);
                $Genres_data = array();

                while ($Genres_row = mysqli_fetch_assoc($result_Genres)) {
                    $Genres_data[] = $Genres_row;
                }
                // $conn->close();
                
                foreach ($Genres_data as $Genres_data_row):
                echo "<form method='post'>";
                echo "<button class='act' formaction ='movies\Movie_sel\movie_genres.php' style='background-color: transparent'>";
                echo '<a href= "movies\Movie_sel\movie_genres.php"';
             
                echo "<div class='genre-items'>";
  
                echo "<input type='hidden' name='sel_catagry' value='".$Genres_data_row["m_catagry"]."'>";
                echo '<p>'.$Genres_data_row["m_catagry"].'</p>';
                // echo "<div class='actors-text'>".$Genres_data_row['m_catagry']."</div></div>";
              
                    echo '<div>';
                    echo '</button>';
                echo '<a>';
                
                echo "</form>";
    
                
            endforeach; 
                
                
            ?>
              <!-- <a href="pages/categories/action/action.html"><div class="genre-items"><p>Action</p></div></a> -->
                <!-- <a href="#"><div class="genre-items"><p>Romance</p></div></a>
              
                <a href="pages/categories/documentry/documentry.html"><div class="genre-items"><p>Documentry</p></div></a>
                <a href="pages/categories/comedy/comedy.html"><div class="genre-items"><p>Comedy</p></div></a>
                <a href="pages/categories/horror/horror.html"><div class="genre-items"><p>Horror</p></div></a>
                <a href="pages/categories/history/history.html"><div class="genre-items"><p>History</p></div></a>
                <a href="pages/categories/scifi/scifi.html"><div class="genre-items"><p>Sci-Fi</p></div></a>
                <a href="pages/categories/adventure/adventure.html"><div class="genre-items"><p>Adventure</p></div></a>
                <a href="pages/categories/fantasy/fantasy.html"><div class="genre-items"><p>Fantasy</p></div></a>
                <a href="pages/categories/erotic/erotic.html"><div class="genre-items"><p>Erotic</p></div></a>
                <a href="pages/categories/anime/anime.html"><div class="genre-items"><p>Anime</p></div></a>
                <a href="pages/categories/devotional/devotional.html"><div class="genre-items"><p>Devotional</p></div></a>
                <a href="pages/categories/patriotic/patriotic.html"><div class="genre-items"><p>Patriotic</p></div></a>
                <a href="pages/categories/hollywood/hollywood.html"><div class="genre-items"><p>Hollywood</p></div></a>
                <a href="pages/categories/southindian/southindian.html"><div class="genre-items"><p>South India</p></div></a> -->
            </div>
        </div>
        
        <!-- ----------------------------Blockbusters------------------------ -->
        <?php
             $blockbuster_sql = "SELECT catagry_profile_movie_list.m_catagry, catagry_profile_movie_list.m_name , movies.m_name,movies.m_p_url 
             FROM catagry_profile_movie_list 
             INNER JOIN movies 
             ON catagry_profile_movie_list.m_name= movies.m_name 
             WHERE catagry_profile_movie_list.m_catagry='Blockbuster';";
             
        $Blockbuster_result = $conn->query($blockbuster_sql);


?>
        <div class="blockbuster-header">
            <h2>Blockbuster on MovieModz</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
            <?php
               if ($Blockbuster_result ->num_rows > 0) {
                $Blockbuster_number = 1;
                while($Blockbuster_row = $Blockbuster_result->fetch_assoc()) {
                    
                    echo '<div>';
                    echo '<a href="movies/Movie_sel/movie_sel.php">';
                    echo "<form method='post'>";
                    echo "<button   formaction ='movies/Movie_sel/movie_sel.php' style='background-color: transparent'>";
                    // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
                    // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
                        echo '<img class="nrimg" src="movies/'. $Blockbuster_row['m_p_url'] . ' ">';
                        echo '<div class="slide-text"><h3>'.$Blockbuster_row['m_name'] .'</h3></div>';
                        echo "<input type='hidden' name='c_name' value='".$Blockbuster_row['m_name'] ."'>";
                        echo '</button>';
                    echo '</a>';
                    echo '</div>';
                    
                        $Blockbuster_number++;

                }
            
            }
               ?>
                <!-- <a href="pages/kalki.html"><div class="block-block" ><img src="img/block1.jfif" alt="1"><div class="slide-text"><h3>Kalki 2898 AD</h3></div></div></a> -->
                <a href="pages/endgame/endgame.html"><div class="block-block" ><img src="img/block2.jpg" alt="2"><div class="slide-text"><h3>Avengers:Endgame</h3></div></div></a>
                <a href="pages/munjya/munjya.html"><div class="block-block" ><img src="img/block3.avif" alt="3"><div class="slide-text"><h3>Munjya</h3></div></div></a>
                <a href="pages/fastx/fastx.html"><div class="block-block" ><img src="img/block4.jpg" alt="4"><div class="slide-text"><h3>Fast and Furious-X</h3></div></div></a>
                <a href="pages/theexorcism/theexorcism.html"><div class="block-block" ><img src="img/block5.jpg" alt="5"><div class="slide-text"><h3>The Exorcism</h3></div></div></a>
                <a href="pages/fighter/fighter.html"><div class="block-block" ><img src="img/block6.jpeg" alt="6"><div class="slide-text"><h3>Fighter</h3></div></div></a>
                <a href="pages/shaitan/shaitan.html"><div class="block-block" ><img src="img/block7.webp" alt="7"><div class="slide-text"><h3>Shaitan</h3></div></div></a>
                <a href="pages/badboys/badboys.html"><div class="block-block" ><img src="img/block8.jpg" alt="8"><div class="slide-text"><h3>Bad Boys</h3></div></div></a>
                <a href="pages/mebeforeyou/mebeforeyou.html"><div class="block-block" ><img src="img/block9.jpg" alt="9"><div class="slide-text"><h3>Me Before You</h3></div></div></a>
                <a href="pages/intersteller/intersteller.html"><div class="block-block" ><img src="img/block10.jpg" alt="10"><div class="slide-text"><h3>Intersteller</h3></div></div></a>
                <a href="pages/spidermanfarfromhome/spidermanfarfromhome.html"><div class="block-block" ><img src="img/block11.jpg" alt="11"><div class="slide-text"><h3>Spiderman</h3></div></div></a>
                <a href="pages/mighostprotocol/mighostprotocol.html"><div class="block-block" ><img src="img/block12.jpg" alt="12"><div class="slide-text"><h3>Mission Impossible</h3></div></div></a>
                <a href="pages/batmanthedarkknight/batmanthedarkknight.html"><div class="block-block" ><img src="img/block13.jfif" alt="13"><div class="slide-text"><h3>Batman:The Dark Knight</h3></div></div></a>
            </div>
        </div>

        <!-- --------------------------------------Top-10----------------------------------------- -->

        <div class="blockbuster-header">
            <h2>Top 10 of All Time</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <a href="pages/theshawshank/theshawshank.html"><div class="block-block" ><img src="img/top1.jpg" alt="1"><div class="slide-text"><h3>The Shawshank</h3></div></div></a>
                <a href="pages/godfather1/godfather1.html"><div class="block-block" ><img src="img/top2.jpg" alt="2"><div class="slide-text"><h3>The Godfater - Part 1</h3></div></div></a>
                <a href="pages/batmanthedarkknight/batmanthedarkknight.html"><div class="block-block" ><img src="img/top3.jpg" alt="3"><div class="slide-text"><h3>The Dark Knight</h3></div></div></a>
                <a href="pages/godfather2/godfather2.html"><div class="block-block" ><img src="img/top4.jpg" alt="4"><div class="slide-text"><h3>The Godfather - Part 2</h3></div></div></a>
                <a href="pages/lordoftheringskingreturn/lordoftheringskingreturn.html"><div class="block-block" ><img src="img/top5.jpg" alt="5"><div class="slide-text"><h3>The Lord of the Rings</h3></div></div></a>
                <a href="pages/schindierslist/schindierslist.html"><div class="block-block" ><img src="img/top6.jpg" alt="6"><div class="slide-text"><h3>Schindier's List</h3></div></div></a>
                <a href="pages/goodbadugly/goodbadugly.html"><div class="block-block" ><img src="img/top7.webp" alt="7"><div class="slide-text"><h3>The Good, The Bad, The Ugly</h3></div></div></a>
                <a href="pages/lordoftheringsfellowship/lordoftheringsfellowship.html"><div class="block-block" ><img src="img/top8.jpg" alt="8"><div class="slide-text"><h3>The Lord of the Rings</h3></div></div></a>
                <a href="pages/inception/inception.html"><div class="block-block" ><img src="img/top9.jpg" alt="9"><div class="slide-text"><h3>Inception</h3></div></div></a>
                <a href="pages/matrixresurrectionn/matrixresurrectionn.html"><div class="block-block" ><img src="img/top10.jpg" alt="10"><div class="slide-text"><h3>The Matrix</h3></div></div></a>
            </div>
        </div>
        <!-- --------------------------------------Actors------------------------------------ -->

        <div class="actors-header">

            <h2>Actors</h2>
        </div>
        <div>
            <div class="actors-header-items">
                <?php
                
            $sql_m= "SELECT * FROM actors where a_gender='male'" ;
            $result_m = $conn->query($sql_m);
            $a_data_m = array();
            while ($row_m = mysqli_fetch_assoc($result_m)) {
                $a_data_m[] = $row_m;
            }
            // $conn->close();
            
            foreach ($a_data_m as $a_m_row):
            echo "<form method='post'>";
            echo "<div class='actors-img'>";
            echo "<button class='act' style='background-color: transparent' formaction ='pages/actors/actor_profile/actor_profile.php'>";
            echo "<input type='hidden' name='a_id' value='".$a_m_row["a_id"]."'>";
            echo "<img src='admin/".$a_m_row["a_img_url"]."' alt='".$a_m_row["a_id"]."'></button>";
            echo "<div class='actors-text'>".$a_m_row['a_name']."</div></div>";
            echo "</form>";

            
        endforeach; 

        ?>
        
                <div class="actors-img"><a href="pages/actors/hritikroshan/hritik.html"><img src="img/face1.avif" alt="1"></a><div class="actors-text">Hritik Roshan</div></div>
                <div class="actors-img"><a href="pages/actors/tomcruise/tomcruise.html"><img src="img/face2.jpg" alt="23"></a><div class="actors-text">Tom Cruise</div></div>
                <div class="actors-img"><a href="pages/actors/peterholland/peterholland.html"><img src="img/face3.jpg" alt=""></a><div class="actors-text">Peter Holland</div></div>
                <div class="actors-img"><a href="pages/actors/akshaykumar/akshay.php"><img src="img/face4.jpg" alt="4"></a><div class="actors-text">Akshay Kumar</div></div>
                <div class="actors-img"><a href="pages/actors/vidyutjamwal/vidyutjamwal.html"><img src="img/face5.jpg" alt="5"></a><div class="actors-text">Vidyut Jamwal</div></div>
                <div class="actors-img"><a href="pages/actors/tigershroff/tigershroff.html"><img src="img/face6.jfif" alt="6"></a><div class="actors-text">Tiger Shroff</div></div>
                <div class="actors-img"><a href="pages/actors/chrisevans/chrisevans.html"><img src="img/face7.jpg" alt="7"></a><div class="actors-text">Chris Evans</div></div>
                <div class="actors-img"><a href="pages/actors/robertdjr/robertdjr.html"><img src="img/face8.jpg" alt="8"></a><div class="actors-text">Robert D. Jr.</div></div>
                <div class="actors-img"><a href="pages/actors/alluarjun/alluarjun.html"><img src="img/face9.webp" alt="9"></a><div class="actors-text">Allu Arjun</div></div>
                <div class="actors-img"><a href="pages/actors/prabhas/prabhas.html"><img src="img/face10.jpg" alt="10"></a><div class="actors-text">Prabhas</div></div>
                <div class="actors-img"><a href="pages/actors/ramcharan/ramcharan.html"><img src="img/face11.jpg" alt="11"></a><div class="actors-text">Ram Charan</div></div>
                <div class="actors-img"><a href="pages/actors/rajnikant/rajnikant.html"><img src="img/face12.jpg" alt="12"></a><div class="actors-text">Rajnikant</div></div>
                <div class="actors-img"><a href="pages/actors/chrishemsworth/chrishemsworth.html"><img src="img/face13.webp" alt="13"></a><div class="actors-text">Chris Hemsworth</div></div>
                <div class="actors-img"><a href="pages/actors/shahidkapoor/shahidkapoor.html"><img src="img/face35.jpg" alt="35"></a><div class="actors-text">Shahid Kapoor</div></div>
                <div class="actors-img"><a href="pages/actors/sidharthmalhotra/sidharthmalhotra.html"><img src="img/face36.jpeg" alt="36"></a><div class="actors-text">Sidharth Malhotra</div></div>
                <div class="actors-img"><a href="pages/actors/vijaythalapati/vijaythalapati.html"><img src="img/face37.webp" alt="37"></a><div class="actors-text">Vijay Thalapati</div></div>
                <div class="actors-img"><a href="pages/actors/vijaydeverkonda/vijaydeverkonda.html"><img src="img/face38.jpg" alt="38"></a><div class="actors-text">Vijay Deverkonda</div></div>
                <div class="actors-img"><a href="pages/actors/dilquersalman/dilquersalman.html"><img src="img/face39.webp" alt="39"></a><div class="actors-text">Dulquer Salman</div></div>
                <div class="actors-img"><a href="pages/actors/kartikaryan/kartikaryan.html"><img src="img/face40.jpg" alt="40"></a><div class="actors-text">Kartik Aryan</div></div>
            </div>
        </div>

        <!-- --------------------------------------Actresses------------------------------------------ -->
        
        
        <div class="actors-header">
            <h2>Actresses</h2>
        </div>
        <div>
            <div class="actors-header-items">
            <?php
                
                $sql_f= "SELECT * FROM actors where a_gender='Female'" ;
                $result_f = $conn->query($sql_f);
                $a_data_f= array();
                while ($row_f = mysqli_fetch_assoc($result_f)) {
                    $a_data_f[] = $row_f;
                }
                // $conn->close();
                
                foreach ($a_data_f as $a_f_row):
                echo "<form method='post'>";
                echo "<div class='actors-img'>";
                echo "<button class='act' style='background-color: transparent' formaction ='pages/actors/actor_profile/actor_profile.php'>";
                echo "<input type='hidden' name='a_id' value='".$a_f_row["a_id"]."'>";
                echo "<img src='admin/".$a_f_row["a_img_url"]."' alt='".$a_f_row["a_id"]."'></button>";
                echo "<div class='actors-text'>".$a_f_row['a_name']."</div></div>";
                echo "</form>";
    
                
            endforeach; 
    
            ?>
            
                <div class="actors-img"><a href="pages/actresses/kareena/kareena.html"><img src="img/face14.jpg" alt="14"></a><div class="actors-text">Kareena Kapoor</div></div>
                <div class="actors-img"><a href="pages/actresses/jahanvi/jahanvi.html"><img src="img/face15.jpg" alt="15"></a><div class="actors-text">Jahanvi Kapoor</div></div>
                <div class="actors-img"><a href="pages/actresses/priyanka/priyanka.html"><img src="img/face16.jfif" alt="16"></a><div class="actors-text">Priyanka Chopra</div></div>
                <div class="actors-img"><a href="pages/actresses/sunnyleone/sunnyleone.html"><img src="img/face17.webp" alt="17"></a><div class="actors-text">Sunny Leone</div></div>
                <div class="actors-img"><a href="pages/actresses/rashmika/rashmika.html"><img src="img/face18.jpg" alt="18"></a><div class="actors-text">Rashmika</div></div>
                <div class="actors-img"><a href="pages/actresses/saipallavi/saipallavi.html"><img src="img/face19.jpg" alt="19"></a><div class="actors-text">Sai Pallavi</div></div>
                <div class="actors-img"><a href="pages/actresses/rakul/rakul.html"><img src="img/face20.webp" alt="20"></a><div class="actors-text">Rakul Singh Preet</div></div>
                <div class="actors-img"><a href="pages/actresses/kriti/kriti.html"><img src="img/face21.jfif" alt="21"></a><div class="actors-text">Kriti Sanon</div></div>
                <div class="actors-img"><a href="pages/actresses/disha/disha.html"><img src="img/face22.jpg" alt="22"></a><div class="actors-text">Disha Patni</div></div>
                <div class="actors-img"><a href="pages/actresses/karishma/karishma.html"><img src="img/face23.webp" alt="23"></a><div class="actors-text">Karishma Kapoor</div></div>
                <div class="actors-img"><a href="pages/actresses/nora/nora.html"><img src="img/face24.jfif" alt="24"></a><div class="actors-text">Nora Fatehi</div></div>
                <div class="actors-img"><a href="pages/actresses/preeti/preeti.html"><img src="img/face25.jpg" alt="25"></a><div class="actors-text">Preeti Zinta</div></div>
                <div class="actors-img"><a href="pages/actresses/kajal/kajal.html"><img src="img/face26.jfif" alt="26"></a><div class="actors-text">Kajal Aggarwal</div></div>
                <div class="actors-img"><a href="pages/actresses/scarlett/scarlett.html"><img src="img/face27.jpg" alt="27"></a><div class="actors-text">Scarlett Johansson</div></div>
                <div class="actors-img"><a href="pages/actresses/emma/emma.html"><img src="img/face28.jpg" alt="28"></a><div class="actors-text">Emma Watson</div></div>
                <div class="actors-img"><a href="pages/actresses/kristein/kristein.html"><img src="img/face29.webp" alt="29"></a><div class="actors-text">Kristen Stewart</div></div>
                <div class="actors-img"><a href="pages/actresses/jacquieline/jacquiline.html"><img src="img/face30.jpg" alt="30"></a><div class="actors-text">Jacqueline F.</div></div>
                <div class="actors-img"><a href="pages/actresses/alia/alia.html"><img src="img/face31.jpg" alt="31"></a><div class="actors-text">Alia Bhatt</div></div>
                <div class="actors-img"><a href="pages/actresses/shraddha/shraddha.html"><img src="img/face32.jpg" alt="32"></a><div class="actors-text">Sharddha Kapoor</div></div>
                <div class="actors-img"><a href="pages/actresses/katrina/katrina.html"><img src="img/face33.jpg" alt="33"></a><div class="actors-text">Katrina Kaif</div></div>
            </div>
        </div>
        <!-- <div class="hr"></div> -->

        <!-- -------------------------Documentry-------------------------------- -->

        <div class="blockbuster-header">
            <h2>Documentry</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <div class="block-block" ><img src="img/doc1.jpg" alt="1"><div class="slide-text"><h3>Flight/Risk</h3></div></div>
                <div class="block-block" ><img src="img/doc2.webp" alt="2"><div class="slide-text"><h3>Ronaldo</h3></div></div>
                <div class="block-block" ><img src="img/doc3.jpg" alt="3"><div class="slide-text"><h3>The Talking of Deborah Logan</h3></div></div>
                <div class="block-block" ><img src="img/doc4.jpg" alt="4"><div class="slide-text"><h3>Sachin:A Billion Dreams</h3></div></div>
                <div class="block-block" ><img src="img/doc5.webp" alt="5"><div class="slide-text"><h3>Mumbai Mafia</h3></div></div>
                <div class="block-block" ><img src="img/doc6.jfif" alt="6"><div class="slide-text"><h3>Hot Girls Wanted</h3></div></div>
                <div class="block-block" ><img src="img/doc7.jpg" alt="7"><div class="slide-text"><h3>The Devil on Trial</h3></div></div>
                <div class="block-block" ><img src="img/doc8.jpg" alt="8"><div class="slide-text"><h3>Paranormal Activity:Next of Kin</h3></div></div>
                <div class="block-block" ><img src="img/doc9.jpg" alt="9"><div class="slide-text"><h3>Money Shot:The Pornhub Story</h3></div></div>
                <div class="block-block" ><img src="img/doc10.jfif" alt="10"><div class="slide-text"><h3>To Kill a Tiger</h3></div></div>
                <div class="block-block" ><img src="img/doc11.jpg" alt="11"><div class="slide-text"><h3>The Elephant Whisperer</h3></div></div>
                <div class="block-block" ><img src="img/doc12.jpg" alt="12"><div class="slide-text"><h3>The Great Hack</h3></div></div>
            </div>
        </div>

        <!-- ----------------------------------Romance---------------------------- -->

        <div class="blockbuster-header">
            <h2>Romance</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <div class="block-block"><img src="img/romantic1.jpg" alt=""><div class="slide-text"><h3>Bawaal</h3></div></div>
                <div class="block-block"><img src="img/romantic2.jpg" alt=""><div class="slide-text"><h3>Ghosted</h3></div></div>
                <div class="block-block"><img src="img/romantic3.jpg" alt=""><div class="slide-text"><h3>Ok Kanmani</h3></div></div>
                <div class="block-block"><img src="img/romantic4.jpg" alt=""><div class="slide-text"><h3>Blue Valentine</h3></div></div>
                <div class="block-block"><img src="img/romantic5.webp" alt=""><div class="slide-text"><h3>Laila Majnu</h3></div></div>
                <div class="block-block"><img src="img/romantic6.jpg" alt=""><div class="slide-text"><h3>Satyaprem ki Katha</h3></div></div>
                <div class="block-block"><img src="img/romantic7.jpg" alt=""><div class="slide-text"><h3>No Reservation</h3></div></div>
                <div class="block-block"><img src="img/romantic8.jfif" alt=""><div class="slide-text"><h3>Gehraiyaan</h3></div></div>
                <div class="block-block"><img src="img/romantic9.webp" alt=""><div class="slide-text"><h3>World Famous Lover</h3></div></div>
                <div class="block-block"><img src="img/romantic10.jpg" alt=""><div class="slide-text"><h3>The Notebook</h3></div></div>
                <div class="block-block"><img src="img/romantic11.jpg" alt=""><div class="slide-text"><h3>Me Before You</h3></div></div>
                <div class="block-block"><img src="img/romantic12.jpg" alt=""><div class="slide-text"><h3>Dia</h3></div></div>
            </div>
        </div>

        <!-- ----------------------------------Live-channels--------------------------- -->

        <div class="live-channel-header">
            <h2>Live-channels</h2>
        </div>
        <div>
            <div class="live-channel-items">
                <a href="pages/aajtak/aajtak.html"><div class="live-block"><img src="img/news1.jpg" alt=""><div class="live-text"><h3>Aaj Tak</h3></div></div></a>
                <div class="live-block"><img src="img/news2.jpg" alt=""><div class="live-text"><h3>Republic Bharat</h3></div></div>
                <div class="live-block"><img src="img/news3.jpg" alt=""><div class="live-text"><h3>TV9 Bharatvarsh</h3></div></div>
                <div class="live-block"><img src="img/news4.png" alt=""><div class="live-text"><h3>ABP News</h3></div></div>
                <div class="live-block"><img src="img/news5.jpg" alt=""><div class="live-text"><h3>Star News</h3></div></div>
            </div>
        </div>

        <!-- ---------------------------------Action----------------------------- -->
        <?php
            


        

?>
        <div class="blockbuster-header">
            <h2>Action</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">

                <?php
 $Action_sql = "SELECT catagry_profile_movie_list.m_catagry, catagry_profile_movie_list.m_name , movies.m_name,movies.m_p_url 
 FROM catagry_profile_movie_list 
 INNER JOIN movies 
 ON catagry_profile_movie_list.m_name= movies.m_name 
 WHERE catagry_profile_movie_list.m_catagry='Action';";
 
$Action_result = $conn->query($Action_sql);
                $action_data= array();
                while ($row_acttion = mysqli_fetch_assoc($Action_result)) {
                    $action_data[] = $row_acttion;
                }
                // $conn->close();
                
                foreach ($action_data as $action_data_row):
                    echo '<div class="block-block">';
                    echo '<a href="movies/Movie_sel/movie_sel.php">';
                    echo "<form method='post'>";
                    echo "<button style='background-color: transparent' formaction='movies/Movie_sel/movie_sel.php'>";
                    
                  
                    // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
                    // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
                        echo '<img  src="movies/'. $action_data_row['m_p_url'] . ' ">';
                        echo '<div class="slide-text">';
                        echo '<h3>'.$action_data_row['m_name'].'</h3>';
                        echo "<input type='hidden' name='c_name' value='".$action_data_row['m_name'] ."'>";
                        echo '</button>';
                        
                    echo '</a>';
                    echo '</form>';
                    echo '</div>';
                
            endforeach; 
            
                ?>
            <?php
            // // for while looop
            //    if ($Action_result->num_rows > 0) {
            //     $Action_number = 1;
            //     while($Action_row = $Action_result->fetch_assoc()) {
                    
            //         echo '<div class="block-block">';
            //         echo '<a href="movies/Movie_sel/movie_sel.php">';
            //         echo "<form method='post'>";
            //         echo "<button formaction ='movies/Movie_sel/movie_sel.php'>";
            //         // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
            //         // echo '<img class="nrimg" src="movies/new-release1.webp" alt="1" class="release-img">';
            //             echo '<img  src="movies/'. $Action_row['m_p_url'] . ' ">';
            //             echo '<div class="slide-text">';
            //             echo '<h3>'.$Action_row['m_name'].'</h3>';
            //             echo "<input type='hidden' name='c_name' value='".$Action_row['m_name'] ."'>";
            //             echo '</button>';
            //         echo '</a>';
            //         echo '</div>';
            //          $Action_number++;
                    


            //     }
            
            // }
               ?>
                <div class="block-block"><img src="img/action1.jpg" alt=""><div class="slide-text"><h3>The Boys</h3></div></div>
                <div class="block-block"><img src="img/action2.jfif" alt=""><div class="slide-text"><h3>House of The Dragons</h3></div></div>
                <div class="block-block"><img src="img/action3.jpg" alt=""><div class="slide-text"><h3>The Acolyte</h3></div></div>
                <div class="block-block"><img src="img/action4.jfif" alt=""><div class="slide-text"><h3>Furiosa:A Mad Max Saga</h3></div></div>
                <div class="block-block"><img src="img/action5.jpg" alt=""><div class="slide-text"><h3>Game of Thrones</h3></div></div>
                <div class="block-block"><img src="img/action6.jpg" alt=""><div class="slide-text"><h3>Trigger Warning</h3></div></div>
                <div class="block-block"><img src="img/action7.jpg" alt=""><div class="slide-text"><h3>Bad Boys:Ride or Die</h3></div></div>
                <div class="block-block"><img src="img/action8.avif" alt=""><div class="slide-text"><h3>Red One</h3></div></div>
                <div class="block-block"><img src="img/action9.jpg" alt=""><div class="slide-text"><h3>The Fallout</h3></div></div>
                <div class="block-block"><img src="img/action10.jpg" alt=""><div class="slide-text"><h3>Mad Max:Fury Road</h3></div></div>
                <div class="block-block"><img src="img/action11.jpeg" alt=""><div class="slide-text"><h3>Dune</h3></div></div>
                <div class="block-block"><img src="img/action12.jpg" alt=""><div class="slide-text"><h3>Vikings</h3></div></div>
            </div>
        </div>

        <!-- ---------------------------Horror------------------------------ -->

        <div class="blockbuster-header">
            <h2>Horror</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <div class="block-block"><img src="img/horror1.jpeg" alt=""><div class="slide-text"><h3>Prey for the Devil</h3></div></div>
                <div class="block-block"><img src="img/horror2.jpg" alt=""><div class="slide-text"><h3>Evil Dead Inside</h3></div></div>
                <div class="block-block"><img src="img/horror3.jpg" alt=""><div class="slide-text"><h3>Case 39</h3></div></div>
                <div class="block-block"><img src="img/horror4.jpg" alt=""><div class="slide-text"><h3>The Nun 2</h3></div></div>
                <div class="block-block"><img src="img/horror5.jpg" alt=""><div class="slide-text"><h3>The Conjuring</h3></div></div>
                <div class="block-block"><img src="img/horror6.jpg" alt=""><div class="slide-text"><h3>The Conjuring 2</h3></div></div>
                <div class="block-block"><img src="img/horror7.jpg" alt=""><div class="slide-text"><h3>The Curse of La Llorona</h3></div></div>
                <div class="block-block"><img src="img/horror8.jpg" alt=""><div class="slide-text"><h3>Sinister 2</h3></div></div>
                <div class="block-block"><img src="img/horror9.avif" alt=""><div class="slide-text"><h3>Smile</h3></div></div>
                <div class="block-block"><img src="img/horror10.webp" alt=""><div class="slide-text"><h3>Veronica</h3></div></div>
                <div class="block-block"><img src="img/horror11.jfif" alt=""><div class="slide-text"><h3>The Exorcist:Believer</h3></div></div>
                <div class="block-block"><img src="img/horror12.jpg" alt=""><div class="slide-text"><h3>Annabellee:Creation</h3></div></div>
            </div>
        </div>

        <!-- ----------------------------Kids--------------------------- -->

        <div class="live-channel-header">
            <h2>Kids Shows</h2>
        </div>
        <div>
            <div class="live-channel-items">
                <div class="live-block"><img src="img/kid1.jpg" alt=""><div class="live-text"><h3>Motu Patlu</h3></div></div>
                <div class="live-block"><img src="img/kid2.webp" alt=""><div class="live-text"><h3>Chota Bheem</h3></div></div>
                <div class="live-block"><img src="img/kid3.avif" alt=""><div class="live-text"><h3>Ben 10</h3></div></div>
                <div class="live-block"><img src="img/kid4.jpg" alt=""><div class="live-text"><h3>Doraemon</h3></div></div>
                <div class="live-block"><img src="img/kid5.webp" alt=""><div class="live-text"><h3>Sinchan</h3></div></div>
            </div>
        </div>


        <!-- ------------------------------Sci-Fi-------------------------- -->

        <div class="blockbuster-header">
            <h2>Sci-Fi</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <div class="block-block"><img src="img/sci1.jpg" alt=""><div class="slide-text"><h3>Extinction</h3></div></div>
                <div class="block-block"><img src="img/sci2.jpg" alt=""><div class="slide-text"><h3>The Matrix:Resurrection</h3></div></div>
                <div class="block-block"><img src="img/sci3.jpg" alt=""><div class="slide-text"><h3>Inception</h3></div></div>
                <div class="block-block"><img src="img/sci4.jfif" alt=""><div class="slide-text"><h3>Transcendence</h3></div></div>
                <div class="block-block"><img src="img/sci5.webp" alt=""><div class="slide-text"><h3>Moonfall</h3></div></div>
                <div class="block-block"><img src="img/sci6.jpg" alt=""><div class="slide-text"><h3>Arrival</h3></div></div>
                <div class="block-block"><img src="img/sci7.jpg" alt=""><div class="slide-text"><h3>Oblivion</h3></div></div>
                <div class="block-block"><img src="img/sci8.jpg" alt=""><div class="slide-text"><h3>Predestination</h3></div></div>
                <div class="block-block"><img src="img/sci9.avif" alt=""><div class="slide-text"><h3>The 13th Floor</h3></div></div>
                <div class="block-block"><img src="img/sci10.jpg" alt=""><div class="slide-text"><h3>Replicas</h3></div></div>
                <div class="block-block"><img src="img/sci11.jpg" alt=""><div class="slide-text"><h3>No One Will Save You</h3></div></div>
                <div class="block-block"><img src="img/sci12.jpeg" alt=""><div class="slide-text"><h3>Prometheus</h3></div></div>
            </div>
        </div>


        <!-- -----------------------------Adventure---------------------------- -->

        <div class="blockbuster-header">
            <h2>Adventure</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <div class="block-block"><img src="img/adv1.jpg" alt=""><div class="slide-text"><h3>The Lost City of Z</h3></div></div>
                <div class="block-block"><img src="img/adv2.jpg" alt=""><div class="slide-text"><h3>10000 BC</h3></div></div>
                <div class="block-block"><img src="img/adv3.jpg" alt=""><div class="slide-text"><h3>Cast Away</h3></div></div>
                <div class="block-block"><img src="img/adv4.jpg" alt=""><div class="slide-text"><h3>Journey 2:Mysterious Island</h3></div></div>
                <div class="block-block"><img src="img/adv5.jpg" alt=""><div class="slide-text"><h3>Oblivion</h3></div></div>
                <div class="block-block"><img src="img/adv6.jpg" alt=""><div class="slide-text"><h3>In the heart of the Sea</h3></div></div>
                <div class="block-block"><img src="img/adv7.webp" alt=""><div class="slide-text"><h3>Uncharted</h3></div></div>
                <div class="block-block"><img src="img/adv8.jpg" alt=""><div class="slide-text"><h3>Everest</h3></div></div>
                <div class="block-block"><img src="img/adv9.jfif" alt=""><div class="slide-text"><h3>Time Trap</h3></div></div>
                <div class="block-block"><img src="img/adv10.jfif" alt=""><div class="slide-text"><h3>Pathfinder</h3></div></div>
                <div class="block-block"><img src="img/adv11.jpg" alt=""><div class="slide-text"><h3>Percy Jackson:Sea of Monsters</h3></div></div>
                <div class="block-block"><img src="img/adv12.jpg" alt=""><div class="slide-text"><h3>The Adam Project</h3></div></div>
            </div>
        </div>

        <!-- --------------------------------Gallery------------------------- -->

        <section id="gallery">
            <div class="pictures">
    
            </div>
        </section>
        

        <!-- -----------------------------Mystery---------------------------- -->

        <div class="blockbuster-header">
            <h2>Mystery</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <div class="block-block"><img src="img/mys1.jfif" alt=""><div class="slide-text"><h3>Sherlock Holmes</h3></div></div>
                <div class="block-block"><img src="img/mys2.jpg" alt=""><div class="slide-text"><h3>Enola Holmes 2</h3></div></div>
                <div class="block-block"><img src="img/mys3.jpg" alt=""><div class="slide-text"><h3>Inferno</h3></div></div>
                <div class="block-block"><img src="img/mys4.jpg" alt=""><div class="slide-text"><h3>Hugo</h3></div></div>
                <div class="block-block"><img src="img/mys5.jpg" alt=""><div class="slide-text"><h3>Fantasy Island</h3></div></div>
                <div class="block-block"><img src="img/mys6.jpg" alt=""><div class="slide-text"><h3>Tomorrowland</h3></div></div>
                <div class="block-block"><img src="img/mys7.jpg" alt=""><div class="slide-text"><h3>Inception</h3></div></div>
                <div class="block-block"><img src="img/mys8.webp" alt=""><div class="slide-text"><h3>The Deep</h3></div></div>
                <div class="block-block"><img src="img/mys9.jpg" alt=""><div class="slide-text"><h3>Nerve</h3></div></div>
                <div class="block-block"><img src="img/mys10.jpg" alt=""><div class="slide-text"><h3>Yeti Obhijaan</h3></div></div>
                <div class="block-block"><img src="img/mys11.jpg" alt=""><div class="slide-text"><h3>The Maze Runner</h3></div></div>
                <div class="block-block"><img src="img/mys12.jfif" alt=""><div class="slide-text"><h3>Event Horizon</h3></div></div>
            </div>
        </div>


        <!-- ----------------------------Patriotic------------------------------- -->

        <div class="blockbuster-header">
            <h2>Patriotic</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <div class="block-block"><img src="img/pat1.jfif" alt=""><div class="slide-text"><h3>The Legend Of Bhagat Singh</h3></div></div>
                <div class="block-block"><img src="img/pat2.jpg" alt=""><div class="slide-text"><h3>The Ghazi Attack</h3></div></div>
                <div class="block-block"><img src="img/pat3.jpg" alt=""><div class="slide-text"><h3>Uri:The Surgical Strike</h3></div></div>
                <div class="block-block"><img src="img/pat4.jpg" alt=""><div class="slide-text"><h3>Gold</h3></div></div>
                <div class="block-block"><img src="img/pat5.jpg" alt=""><div class="slide-text"><h3>Lakshay</h3></div></div>
                <div class="block-block"><img src="img/pat6.jpg" alt=""><div class="slide-text"><h3>Shershaah</h3></div></div>
                <div class="block-block"><img src="img/pat7.jpg" alt=""><div class="slide-text"><h3>Sam Bahadur</h3></div></div>
                <div class="block-block"><img src="img/pat8.jpg" alt=""><div class="slide-text"><h3>A Wednesday</h3></div></div>
                <div class="block-block"><img src="img/pat9.jpg" alt=""><div class="slide-text"><h3>Chak De India</h3></div></div>
                <div class="block-block"><img src="img/pat10.jpg" alt=""><div class="slide-text"><h3>Kesari</h3></div></div>
                <div class="block-block"><img src="img/pat11.jpg" alt=""><div class="slide-text"><h3>Border</h3></div></div>
                <div class="block-block"><img src="img/pat12.jpg" alt=""><div class="slide-text"><h3>The Kashmir Files</h3></div></div>
            </div>
        </div>


        <!-- -------------------------------South-Indian------------------------- -->

        <div class="blockbuster-header">
            <h2>South-indian</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <div class="block-block"><img src="img/south1.jpg" alt=""><div class="slide-text"><h3>Bahubali</h3></div></div>
                <div class="block-block"><img src="img/south2.jpg" alt=""><div class="slide-text"><h3>Bahubali Part-2</h3></div></div>
                <div class="block-block"><img src="img/south3.avif" alt=""><div class="slide-text"><h3>Pushpa</h3></div></div>
                <div class="block-block"><img src="img/south4.avif" alt=""><div class="slide-text"><h3>KGF Chpater-1</h3></div></div>
                <div class="block-block"><img src="img/south55.jpg" alt=""><div class="slide-text"><h3>RRR</h3></div></div>
                <div class="block-block"><img src="img/south6.jpg" alt=""><div class="slide-text"><h3>Master</h3></div></div>
                <div class="block-block"><img src="img/south7.jpg" alt=""><div class="slide-text"><h3>Jailer</h3></div></div>
                <div class="block-block"><img src="img/south8.jpg" alt=""><div class="slide-text"><h3>Salaar</h3></div></div>
                <div class="block-block"><img src="img/south9.jpg" alt=""><div class="slide-text"><h3>Son of Satyamurthy</h3></div></div>
                <div class="block-block"><img src="img/south10.jpg" alt=""><div class="slide-text"><h3>Dear Comrade</h3></div></div>
                <div class="block-block"><img src="img/south11.jpg" alt=""><div class="slide-text"><h3>Geetha Govindam</h3></div></div>
                <div class="block-block"><img src="img/south12.avif" alt=""><div class="slide-text"><h3>Sarrainodu</h3></div></div>
            </div>
        </div>


        <!-- ----------------------------Anime---------------------------- -->

        <div class="blockbuster-header">
            <h2>Anime</h2>
        </div>
        <div>
            <div class="blockbuster-header-items">
                <div class="block-block"><img src="img/anime1.jpg" alt=""><div class="slide-text"><h3>To every you I've loved before</h3></div></div>
                <div class="block-block"><img src="img/anime2.jpg" alt=""><div class="slide-text"><h3>To Me, the one who loved you</h3></div></div>
                <div class="block-block"><img src="img/anime3.jpg" alt=""><div class="slide-text"><h3>Demon Slayer</h3></div></div>
                <div class="block-block"><img src="img/anime4.jpg" alt=""><div class="slide-text"><h3>Dragon Ball 8</h3></div></div>
                <div class="block-block"><img src="img/anime5.jpg" alt=""><div class="slide-text"><h3>The Witcher</h3></div></div>
                <div class="block-block"><img src="img/anime6.jpg" alt=""><div class="slide-text"><h3>Godzila 3</h3></div></div>
                <div class="block-block"><img src="img/anime7.jpg" alt=""><div class="slide-text"><h3>A Whisker Away</h3></div></div>
                <div class="block-block"><img src="img/anime8.jpg" alt=""><div class="slide-text"><h3>Flavours of Youth</h3></div></div>
                <div class="block-block"><img src="img/anime9.jpg" alt=""><div class="slide-text"><h3>Applessed Alpha</h3></div></div>
                <div class="block-block"><img src="img/anime10.jpg" alt=""><div class="slide-text"><h3>Spirited Away</h3></div></div>
                <div class="block-block"><img src="img/anime11.jpg" alt=""><div class="slide-text"><h3>Jujutsu Kaisen 0</h3></div></div>
                <div class="block-block"><img src="img/anime12.webp" alt=""><div class="slide-text"><h3>Stand By Me Doraemon</h3></div></div>
            </div>
        </div>

        <!-- --------------------------------Crime------------------------------ -->

        <div class="blockbuster-header">
            <h2>Crime</h2>
        </div>
        <div class="blockbuster-header-items">
            <div class="block-block"><img src="img/crime1.jpg" alt=""><div class="slide-text"><h3>Zodiac</h3></div></div>
            <div class="block-block"><img src="img/crime2.jpg" alt=""><div class="slide-text"><h3>Guilty</h3></div></div>
            <div class="block-block"><img src="img/crime3.jpg" alt=""><div class="slide-text"><h3>Prisoners</h3></div></div>
            <div class="block-block"><img src="img/crime4.jfif" alt=""><div class="slide-text"><h3>The Batman</h3></div></div>
            <div class="block-block"><img src="img/crime5.jfif" alt=""><div class="slide-text"><h3>Forensic</h3></div></div>
            <div class="block-block"><img src="img/crime6.jpg" alt=""><div class="slide-text"><h3>Rahasya</h3></div></div>
            <div class="block-block"><img src="img/crime7.jpg" alt=""><div class="slide-text"><h3>Mrs. Serial Killer</h3></div></div>
            <div class="block-block"><img src="img/crime8.jpg" alt=""><div class="slide-text"><h3>Raat Akeli Hai</h3></div></div>
            <div class="block-block"><img src="img/crime9.jpg" alt=""><div class="slide-text"><h3>Hit:The First Case</h3></div></div>
            <div class="block-block"><img src="img/crime10.jpg" alt=""><div class="slide-text"><h3>Ittefaq</h3></div></div>
            <div class="block-block"><img src="img/crime11.jpg" alt=""><div class="slide-text"><h3>Jaane Jaan</h3></div></div>
            <div class="block-block"><img src="img/crime12.jpg" alt=""><div class="slide-text"><h3>Monica O My Darling</h3></div></div>
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
                        <img src="img/googleplay.png" class="download-img">
                    </div>
                    <!-- <div class="footer-contact"><h5>Contact Us:</h5><a href="#">herok2526@gmail.com</a></div> -->
                </div>

                <div class="footer-col">
                    <h3>Popular Hindi Movies</h3>
                    <a href="pages/kalki/kalki.html">Kalki 2898 AD</a>
                    <a href="pages/munjya/munjya.html">Munjya</a>
                    <a href="pages/shaitan/shaitan.html">Shaitan</a>
                    <a href="pages/bahubalipart1/bahubali1.html">Bahubali:The Beginning</a>
                    <a href="pages/fighter/fighter.html">Fighter</a>
                    <a href="pages/jailer/jailer.html">Jailer</a>
                </div>

                <div class="footer-col">
                    <h3>Must Watch</h3>
                    <a href="pages/endgame/endgame.html">Avengers:Endgame</a>
                    <a href="pages/fastx/fastx.html">Fast and Furious-X</a>
                    <a href="pages/spidermanfarfromhome/spidermanfarfromhome.html">Spiderman:Far From Home</a>
                    <a href="pages/endgame/endgame.html">Doctor Strange:Multiverse of Madness</a>
                </div>

                <div class="footer-col">
                    <h3>Genres</h3>
                    <a href="">Comedy-drama</a>
                    <a href="">Science-fiction</a>
                    <a href="">Horror-comedy</a>
                    <a href="">Magic</a>
                </div>

                <div class="footer-col">
                    <h3>Learn More</h3>
                    <a href="pages/offers/offers.html">View Plans</a>
                    <a href="">About Us</a>
                    <a href="">FAQs/Help</a>
                    <a href="">Privacy Help</a>
                    <a href="">Terms of Service</a>
                </div>
            </div>
        </div>
        <hr>
        <!-- -----------------------------------Copyright---------------------------------- -->

        <div class="copyright">
            <i class="fa-solid fa-copyright"></i><h3>Copyright 2024 Shivam Hiten Mukul. All rights reserved.</h3>
        </div>




    <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>





        <!-- -----------------------------JavaScript---------------------------------- -->
        <script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
    <!-- Code inject-->






    