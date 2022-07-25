<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/RoomNo.php" >
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
                <td>Room No</td>
                <td><input type="text" name="roomNo"></td>
</tr>
<tr>
                <td>Time</td>
                <td>
                    <input type="time" name="time">
                    
            </td>
            </tr>
                
            
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
                <td><button><a href="./ShowRoom.php">View</a></button></td>
			</tr>
            
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
        
    
    
			
</body>
</html>