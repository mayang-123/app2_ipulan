<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $grade = $_POST['grade'];
        $marks = $_POST['mark'];

        if($name != "" && $grade != "" && $mark != "" ){
            $sql = "INSERT INTO results (`name`, `class`, `mark`) VALUES ('$name', '$grade', $mark)";
            if (mysqli_query($conn, $sql)) {
                header("location: index.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Name, Class and Marks cannot be empty!";
        }
    }
?>