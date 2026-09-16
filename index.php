
<?php
include 'insert.php';
# change page if clicked on buttom that has name see_ratings
if(isset($_POST['see_ratings']))
    {
        header('Location:showmovies.php');
        exit; # will not run the rest of the script
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
<body>
    <div class="container">     <!-- creates a container -->
    <h1> Welcome! </h1>  <!-- text that is displayed in the container-->
    <h3> On this webpage you can insert your own movie ratings. </h3>
    <h3> The ratings are from 1-5, with 5 being the best. Have fun :)</h3>


    <!-- creates a form for the user to input movie reviews-->
    <!-- the input is transfered to PHP by method= "POST". The data is then inserted into the database in insert.php.-->
    <form action="" method= "POST"> 

        <!-- lable name for movie name field-->
        <label for="moviename">Movie Name:</label><br>
        
        <!-- creates the actual field in the form -->
        <input type="text" class="form-control" name="moviename"><br>

        
        <label for="year">Year:</label><br>
        <input type="text" class="form-control" name="year"><br>

        <label for="rating">Rating:</label><br>
        <select name="rating" class="form-control">
            <option value = 1> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
        </select><br><br>


        <!-- value = whats inserted to db -->
        <label for="genre">Genre:</label> <br>
        <select name="genre" class="form-control">
            <option value = 1> Action/Adventure </option>
            <option value = 2> Comedy </option>
            <option value = 3> Drama </option>
            <option value = 4> Fantasy/Sci-Fi </option>
        </select><br><br>

        <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit"><br><br>

         <input type="submit" name=see_ratings value="See ratings">
    </div>
    </form>

    
 




</body>
</html>