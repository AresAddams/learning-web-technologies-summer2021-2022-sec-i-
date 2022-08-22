<?php
session_start();
require '../Controllers/vaildUsers.php';
?>
<html>

<head>
    <title>DashBoard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>


<body>

    <div class="navbar">
        <div class="part1">
            <b class="aiub">American International University Bangladesh</b>
        </div>


        <div class="part2">
            <table>
                <th><a href="NoticeList.php">Notice</a></th>
                <th></th>
                <th><a href="Course.php">Course</a></th>
                <th></th>
                <th><a href="Studentgrade.php">Student Grade</a></th>
                <th></th>
                <th><a href="Student.php">Student</a></th>
                <th></th>
                <th></th>
                <th><a href="../Controllers/logout.php">Logout</a></th>

                <th rowspan="4" align="right">
                    Welcome,
                    <?php
                    if (isset($_SESSION['user'])) {
                        print_r($_SESSION['user']['username']);
                    }
                    ?>
        </div>

        </table>
    </div>