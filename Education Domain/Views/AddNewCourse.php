<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/courseAddCheck.php" >
        <table>
            
            <tr>
                <td>Course ID</td>
                <td><input type="text" name="courseId"></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td><input type="text" name="courseName"></td>
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