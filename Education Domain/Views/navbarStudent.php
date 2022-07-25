<?php
    session_start();
    require '../Controllers/vaildUsers.php';
?>
<html>
<head>
	<title>DashBoard</title>
</head>
<body>
<fieldset><legend>DashBoard</legend>
<table>
<th><a href="NoticeStudent.php">Notice</a></th>
        <th></th>
        <th><a href="StudentResult.php">Result</a></th>
        <th></th>
    <th><a href="CourseStudent.php">Course</a></th>
        <th></th>
    <th><a href="payment.html">Payment</a></th>
        <th></th>
    <th><a href="../Controllers/logout.php">Logout</a></th>
    
    <th rowspan="4" align="right"> Welcome,  
    <?php
        if(isset($_SESSION['user'])){
            print_r($_SESSION['user']['username']);
        }
    ?>
    </th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

</table>
    </fieldset>