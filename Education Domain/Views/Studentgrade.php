<?php
include 'navbar.php';
require_once '../Controllers/studentList.php';
$faculties = getAllStudent();
?>
<!-- Course Form Stated  -->
<form action="">
    <table>

        <tr>
            <td>
                <h3>Student List:</h3>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button><a href="./AddNewStudent.php">Add New Student</a></button></td>
            <td></td>
            <td><button><a href="./AssignCourse.php">Assign Courses</a></button></td>
            <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">

                <tr align="center">
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>CGPA</th>

                    <?php
                    $i = 0;
                    echo "<tr align='center'>";
                    foreach ($faculties as $Student) {


                        echo "<td>$Student</td>";
                        $i++;
                        if ($i > 5) {
                            $i = 0;
                            echo "</tr>";
                            echo "<tr align='center'>";
                        }
                    }

                    ?>
                </tr>

            </table>
        </tr>
    </table>

</form>

<!-- Notice Form Ended  -->



</fieldset>





</body>

</html>