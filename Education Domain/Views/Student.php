<?php
    include 'navbar.php';
    require_once '../Controllers/studentCheck.php';
    $students = getAllStudent();
?>
    <!-- Course Form Stated  -->
    <form action="">
        <table>
        <td><h3><u>Student List:</u></h3></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><button><a href="./Result.php">Show Result</a></button></td>
         
            <tr>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
                    
                    
                    
                    <tr align="center" >
                        <th >Student Id</th>
                        <th >Student Name</th>
                        <th >Gender</th>
                        <th >Email</th>
                        <th >Contact No</th>
                        <th >Address</th>
                    
                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($students as $student){
                            
                            
                            echo "<td>$student</td>";
                            $i++;
                            if($i>5){
                                $i=0;
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
