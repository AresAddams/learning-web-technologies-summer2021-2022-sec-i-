<?php
include './navbar.php';
?>
<!-- Notice Form Stated  -->
<form method="POST" action="../controllers/AssignCourse.php">
    <table>

        <tr>
            <td>Student ID</td>
            <td><input type="text" name="studentId"></td>
        </tr>
        <tr>
            <td>Student Name</td>
            <td><input type="text" name="studentName"></td>
        </tr>
        <tr>
            <td>Course Name</td>
            <td><input type="text" name="courseName"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Save"></td>
            <td><button><a href="./Subject.php">View</a></button></td>
        </tr>
    </table>
</form>
<!-- Notice Form Ended  -->



</fieldset>





</body>

</html>