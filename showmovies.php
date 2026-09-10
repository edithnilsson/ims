<?php
# is the php code to print all the movie data from database as an HTML table tag
echo "this is the page to show movies rating table";
?>

<!DOCTYPE html>
<html>
<body>
    <h1> Table of Movie Rating </h1>
    <br>
<!-- code to create HTML table -->
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Rating</th>
        </tr>
    </thead>

    <tbody>
        <?php
        // start database
        include 'db.php';

        // read all info from both tables and choose the correct genre based on the genreid
        $sql = "SELECT movies.mname, movies.myear, movies.mrating, genres.mgenre
        FROM movies, genres
        WHERE movies.mgenreid = genres.gid";
        $result = $conn->query($sql);


        // read data of each row
        while($row=$result->fetch_assoc()){
            echo "<tr>
                    <td>" . $row["mname"] . "</td>
                    <td>" . $row["myear"] . "</td>
                    <td>" . $row["mgenre"] . "</td>
                    <td>" . $row["mrating"] . "</td>
                </tr>";

        }
        // close database
        include 'closeDB.php';
        ?>
    </tbody>
</table>

</body>
</html>


