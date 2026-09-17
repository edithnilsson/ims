


<?php
include 'db.php';

    # if button to submit info:
    if(isset($_POST['submit']))
    {
    # fetch data from POST request
    $moviename = $_POST['moviename'];
    $year = $_POST['year'];
    $rating = $_POST['rating'];
    $genre = $_POST['genre'];

    # use placeholders to protect against sql injection
    $sql = "INSERT INTO movies(mname, myear, mgenreid, mrating) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    # s for string, i for integer
    $stmt->bind_param("siii", $moviename, $year, $genre, $rating);
    $result = $stmt->execute();

    # echos how it went
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    }

include 'closeDB.php';
?>

