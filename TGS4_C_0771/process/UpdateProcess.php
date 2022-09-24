<?php

session_start();
if(isset($_POST['editMoviesPage'])) {

    include('../db.php');

    $id= $_POST['id'];
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $realese = $_POST['realese'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];

    $query = mysqli_query($con, "UPDATE 'movies' SET 'id'='$id', 
    'name'='$name', 'genre'='$genre', 'realese'='$realese', 'season'='$realese', 'season'='$season',  'synopsis'='$synopsis' where id='$id'");
    or die(mysqli_error($con));
   if($query){
        echo
        '<script>
        alert("Edit Movie Succes");
        window.location = "../page/listMoviesPage.php"
        </script>';
    } else {
        echo "Error " .$sql ."<br>" .$conn->error;
    }

?>