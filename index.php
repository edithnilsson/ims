
<?php
# change page if clicked on buttom that has name see_ratings
if(isset($_POST['see_ratings']))
    {
        header('Location:showmovies.php');
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
    <title>Movie review</title>

    <style>
        body{
            padding: 50px ; 
        }
        .container{
            max-width: 900px ;
            padding: 50px ;
            margin: 0 auto;
        } 
        .form-group{
            margin-bottom: 30 px
        }
    </style>

</head>
<body>
    <div class="container">
    <h1> Welcome! </h1>
    <h3> On this webpage you can insert your own movie ratings. </h3>
    <h3> The ratings are from 1-5, with 5 being the best. Have fun :)</h3>

    <form action="" method= "POST"> <!--we have to change this, apperantly something in tutorials -->
        <label for="moviename">Movie Name:</label><br>
        <input type="text" id="moviename" class="form-control" name="moviename"><br>

        <label for="year">Year:</label><br>
        <input type="text" id="year" class="form-control" name="year"><br>

        <label for="rating">Rating:</label><br>
        <select id="rating" name="rating" class="form-control">
            <option value = 1> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
        </select><br><br>


        <!--do we have to connect to the database to choose the genres, or can we just do it here? -->
        <!-- value = whats inserted to db (we need to take into account the FK) -->
        <label for="genre">Genre:</label> <br>
        <select id="genre" name="genre" class="form-control">
            <option value = 1> Action/Adventure </option>
            <option value = 2> Comedy </option>
            <option value = 3> Drama </option>
            <option value = 4> Fantasy/Sci-Fi </option>
        </select><br><br>

        <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit">
    </div>
    </form>

    <!--make a button to switch between pages -->
    <form method="post">
        <input type="submit" name=see_ratings value="See ratings">
    </form>





</body>
</html>

<?php
include 'db.php';



    # i guess we have to do something like this
    # INSERT INTO movies (mname, myear, mgenreid, mrating)
    # VALUES (value1, value2, value3, ...);

    isset($_POST['submit'])
    {

    

    # fetch data from POST request
    $moviename = $_POST['moviename'];
    $year = $_POST['year'];
    $rating = $_POST['rating'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO movies(mname, myear, mgenreid, mrating) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // s for string
    $stmt->bind_param("ssii", $moviename, $year, $rating, $genre);
    $result = $stmt->execute();

    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    }

include 'closeDB.php';
?>