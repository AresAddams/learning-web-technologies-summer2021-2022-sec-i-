<?php
        if(isset($_COOKIE['status'])){

?>
<html>
    <head>
        <body>
            
                <h3> HOME PAGE</h3>
                <h2><b> Welcome </b></h2>
                <a href = "userList.php"> Profile </a><br>
                <a href = "logout.php"> Logout </a>
        </body>
    </head>
</html>
<?php }
else{
    echo "Invalid request";
}
?>