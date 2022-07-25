<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/departmentAddCheck.php" >
        <table>
            
            <tr>
                <td>Department ID</td>
                <td><input type="text" name="departmentId"></td>
            </tr>
            <tr>
                <td>Department Name</td>
                <td><input type="text" name="departmentName"></td>
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