<tbody>
    <?php
    require("../backend/db01.php");
    $query =  "SELECT * FROM movies";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row["m_id"]; ?></td>
        <td><a href="movie_play.php?id=<?php echo $row['m_id']; ?>"><?php echo $row["m_name"]; ?></a></td>
        <td><?php echo $row["m_t_url"]; ?></td>
        <td><?php echo $row["m_v_url"]; ?></td>
        <td><img width="50px" src="<?php echo $row['m_p_url'];?>" alt="<?php echo $row['m_name'] ?>"></td>
        <td><?php echo $row["m_year"]; ?></td>
        <td><?php echo $row["m_time"]; ?></td>
        <td><?php echo $row["m_dis"]; ?></td>
        <td>
            <form action="" method="post">
                <input type="hidden" name="uid" value="<?php echo $row['m_id'];?>">
                <button class="btn-edit" formaction="edit_movie.php?id=<?php echo $row['m_id']; ?>">Edit</button>
                <button class="btn-delete" formaction="delete_movie.php?id=<?php echo $row['m_id']; ?>">Delete</button>
            </form>
        </td>
    </tr>
    <?php
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
</tbody>
