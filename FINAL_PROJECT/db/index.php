<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');


    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);

    while($row= mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }
