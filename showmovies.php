<?php
# change page if clicked on the button with name "insert_new"
if(isset($_POST['insert_new']))
    {
        header('Location:index.php'); # redirect to this page
    }
?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- make it so that the page width matches the users screen size -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- loads a CSS library, bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Movie review</title> <!-- specify page title -->

    <style>
        body{
            padding: 50px ; /* Adds 50px of space around the inside of the web browser*/
        }
        .container{
            max-width: 900px ; /* specifies the max width of the container */
            padding: 50px ; /* adds 50px of space between the content of the container and its edges */
            margin: 0 auto; /* centers the container in the web browser */ 
        } 
        .form-group{
            margin-bottom: 30 px /* Creates 30px distance between different containers */ 
        }
    </style>

</head>

<!--create HTML table -->
<body>
<div class="container">
    <h1> Table of Movie Rating </h1>
    <br>

<!-- creates a search button -->
<form method="post">
    <label for="site-search">Search the site:</label>
    <input type="search" id="site-search" name="search_button" placeholder = Search />
    <button>Search</button>
</form>

<!-- code to create HTML table -->
<table class="table table-striped"> <!-- make the rows striped -->
  <thead>
    <tr>
        <!-- specifying the column names names -->
      <th scope="col">Name</th>
      <th scope="col">Year</th>
      <th scope="col">Genre</th>
      <th scope="col">Rating</th>
    </tr>
  <thead> 

    <tbody>
        <?php
        # start database
        include 'db.php';

        # if you press search and there is text in search form
        # then you want to see only that movie
        if(isset($_POST['search_button']) && !empty($_POST['search_button']))
            {
            // save what is put into the search bar
            $search = $_POST['search_button'];

            // read all info from both tables and choose the row that matches the movie name and retrieve genre name instead of id
            $sql = "SELECT movies.mname, movies.myear, movies.mrating, genres.mgenre
            FROM movies, genres
            WHERE movies.mname = '$search'
            AND movies.mgenreid = genres.gid";
            $result = $conn->query($sql);
            }
        # if nothing is written in search bar, or it is not pressed
        else{
            // read all info from both tables and choose the correct genre based on the genreid (we don't want ID)
            $sql = "SELECT movies.mname, movies.myear, movies.mrating, genres.mgenre
            FROM movies, genres
            WHERE movies.mgenreid = genres.gid";
            $result = $conn->query($sql);
        }

            // read data of each row and display
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

<!--make a button to switch between pages -->
    <form method="post">
        <input type="submit" name=insert_new value="Insert new values">
    </form>

</div>
</body>
</html>


