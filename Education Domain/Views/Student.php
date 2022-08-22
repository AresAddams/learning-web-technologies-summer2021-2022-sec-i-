<?php
include 'navbar.php';
require_once '../Controllers/studentCheck.php';
$students = getAllStudent();
?>
<!-- Course Form Stated  -->
<form action="">
    <table>
        <td>
            <h3><u>Student List:</u></h3>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><button><a href="./Result.php">Show Result</a></button></td>

        <tr>
            <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">



                <tr align="center">
                    <th id="stdID">Student Id</th>
                    <th id="stdName">Student Name</th>
                    <th id="stdGender">Gender</th>
                    <th id="stdEmail">Email</th>
                    <th id="stdContact">Contact No</th>
                    <th id="stdAddress">Address</th>

                    <?php
                    $i = 0;
                    echo "<tr align='center'>";
                    foreach ($students as $student) {


                        echo "<td>$student</td>";
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
<





</body>

</html>