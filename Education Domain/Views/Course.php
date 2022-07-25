<?php
    include 'navbar.php';
    require_once '../Controllers/courseList.php';
    $courses = getAllCourse();
    $departments=getDepartment();
?>
    <!-- Course Form Stated  -->
    <form action="">
        <table>
            <tr><td></td></tr>
            <tr>
                <td>Department</td>
                <td>
                <select name="departments" id="departments">
                <?php
                        for($i=1;$i<count($departments);$i=$i+2){
                            echo "<option value=".$departments[$i].">";
                            print_r($departments[$i]);
                            echo "</option>";
                        }

                ?>
                </select>
                </td>
  
               </td>
               <td></td>
               <td></td>
               <td><button><a href="./AddNewCourse.php">Add New Course</a></button></td>
            </tr>
            <tr>
                <td><b>Offered Courses:</b></td>
            </tr>
            <tr>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <tr align="center" >
                        <th >Course Id</th>
                        <th >Course Name</th>
                        <!-- <th >Teacher</th> -->
                    </tr>

                    <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($courses as $course){
                            
                            
                            echo "<td>$course</td>";
                            $i++;
                            if($i>1){
                                $i=0;
                                echo "</tr>";
                                echo "<tr align='center'>";
                            }
                            
                        }
                           
                        ?>
                    
                         
                </table>
            </tr>
        </table>

    </form>
    
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
   
    
    
			
</body>
</html>