<?php
include './navbar.php';
?>
<!-- Notice Form Stated  -->
<--! method="POST" action="../controllers/studentAddCheck.php">-->
    <form onsubmit="return validate()">
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
                <td><input type="text" name="studentGender"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="studentEmail"></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="studentContact"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="studentAddress"></td>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->



    </fieldset>
    <script>
        function validate() {
            if (stdID.value == "") {
                alert("Please enter your ID");
                stdID.focus();
                return false;
            }
            if (stdName.value == "") {
                alert("Please enter your name");
                stdName.focus();
                return false;
            }
            if (stdGender.value == "") {
                alert("Please enter your contact no");
                stdGender.focus();
                return false;
            }
            if (stdEmail.value == "") {
                alert("Please enter your email");
                stdEmail.focus();
                return false;
            }
            if (stdContact.value == "") {
                alert("Please enter your contact no");
                stdContact.focus();
                return false;
            }
            if (stdAddress.value == "") {
                alert("Please enter your address");
                stdAddress.focus();
                return false;
            }
        }
    </script>





    </body>

    </html>