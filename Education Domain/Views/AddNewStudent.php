<?php
include './navbar.php';
?>
<!-- Notice Form Stated  -->
<form method="POST" action="../controllers/studentAddCheck.php">
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
            <td>Gender</td>
            <td><input type="text" name="gender"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Contact</td>
            <td><input type="text" name="contact"></td>
        </tr>
        <tr>
            <td>CGPA</td>
            <td><input type="text" name="salary"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>
<!-- Notice Form Ended  -->



</fieldset>





</body>

</html>