
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
    <form action="/action_page.php"> <!--what is this -->
        <label for="moviename">Movie Name:</label><br>
        <input type="text" id="moviename" name="moviename"><br>

        <label for="year">Year:</label><br>
        <input type="text" id="year" name="year"><br>

        <label for="rating">Year:</label><br>
        <select id="rating" name="rating">
            <option value = 1> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>

    <!--make a button to switch between pages -->
    <form method="post">
        <input type="submit" name=see_ratings value="See ratings">
    </form>





</body>
</html>