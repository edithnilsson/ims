
<?php
include 'db.php';




# change page if clicked on buttom that has name see_ratings
if(isset($_POST['see_ratings']))
    {
        header('Location:showmovies.php');
    }

include 'closeDB.php';

?>


<!DOCTYPE html> 
<html>
<body>
    <h1> Welcome! </h1>
    <h3> On this webpage you can insert your own movie ratings. </h3>
    <h3> The ratings are from 1-5, with 5 being the best. Have fun :)</h3>

    <form action="/action_page.php"> <!--we have to change this, apperantly something in tutorials -->
        <label for="moviename">Movie Name:</label><br>
        <input type="text" id="moviename" name="moviename"><br>

        <label for="year">Year:</label><br>
        <input type="text" id="year" name="year"><br>

        <label for="rating">Rating:</label><br>
        <select id="rating" name="rating">
            <option value = 1> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
        </select><br><br>


        <!--do we have to connect to the database to choose the genres, or can we just do it here? -->
        <!-- value = whats inserted to db (we need to take into account the FK) -->
        <label for="genre">Genre:</label> <br>
        <select id="genre" name="genre">
            <option value = 1> Action/Adventure </option>
            <option value = 2> Comedy </option>
            <option value = 3> Drama </option>
            <option value = 4> Fantasy/Sci-Fi </option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>

    <!--make a button to switch between pages -->
    <form method="post">
        <input type="submit" name=see_ratings value="See ratings">
    </form>





</body>
</html>