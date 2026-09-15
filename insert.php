


<?php
include 'db.php';



    # i guess we have to do something like this
    # INSERT INTO movies (mname, myear, mgenreid, mrating)
    # VALUES (value1, value2, value3, ...);

    if(isset($_POST['submit']))
    {

  
    

    # fetch data from POST request
    $moviename = $_POST['moviename'];
    $year = $_POST['year'];
    $rating = $_POST['rating'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO movies(mname, myear, mgenreid, mrating) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // s for string
    $stmt->bind_param("ssii", $moviename, $year, $genre, $rating);
    $result = $stmt->execute();

    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    }

include 'closeDB.php';
?>

