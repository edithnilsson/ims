<?php
# is the php code to print all the movie data from database as an HTML table tag

# change page if clicked on buttom that has name insert_new
if(isset($_POST['insert_new']))
    {
        header('Location:index.php');
    }

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

        # if you press search
        if(isset($_POST['search_button']) && !empty($_POST['search_button']))
            {
            // define whats put into the search bar
            $search = $_POST['search_button'];

            // read all info from both tables and choose the correct genre based on the genreid
            $sql = "SELECT movies.mname, movies.myear, movies.mrating, genres.mgenre
            FROM movies, genres
            WHERE movies.mname = '$search'
            AND movies.mgenreid = genres.gid";
            $result = $conn->query($sql);
            }

        else{ # nothing in search bar, or it is not pressed
            // read all info from both tables and choose the correct genre based on the genreid
            $sql = "SELECT movies.mname, movies.myear, movies.mrating, genres.mgenre
            FROM movies, genres
            WHERE movies.mgenreid = genres.gid";
            $result = $conn->query($sql);
        }

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


<form method="post">
    <label for="site-search">Search the site:</label>
    <input type="search" id="site-search" name="search_button" placeholder = Search />
    <button>Search</button>
</form>



<!--make a button to switch between pages -->
    <form method="post">
        <input type="submit" name=insert_new value="Insert new values">
    </form>

</body>
</html>


