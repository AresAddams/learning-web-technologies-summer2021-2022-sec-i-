<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/noticeAddCheck.php">
        <table>
            
            <tr>
                <td>Notice Title</td>
                <td><input type="text" name="noticeTitle"></td>
            </tr>
            <tr>
                <td>Notice Description</td>
                <td><input type="text" name="noticeDescription"></td>
            </tr>
            <tr>
                <td>Time & Date</td>
                <td>
                    <input type="time" name="time">
                    <input type="date" name="date">
            </td>
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