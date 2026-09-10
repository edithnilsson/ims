
<?php
echo "hello Edith";

?>

<!DOCTYPE html> 
<html>
<body>
    <form action="/action_page.php">
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


<?php
echo "hello Edith";

include 'db.php';




include 'closeDB.php';

?>


</body>
</html>