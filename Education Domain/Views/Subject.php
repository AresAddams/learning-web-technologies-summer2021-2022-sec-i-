<?php
    include 'navbar.php';
    require_once '../Controllers/AssignCourse.php';
    $courses = getCourse();
    // $departments=getDepartment();
?>
<table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
         <tr align="center" >
             <th >Faculty ID</th>
             <th >Faculty Name</th>
             <th >Course Name</th>

             

             <?php

             $i=0;
             echo "<tr align='center'>";
             foreach($courses as $course){
                 
                 
                 echo "<td>$course</td>";
                 $i++;
                 if($i>2){
                     $i=0;
                     echo "</tr>";
                     echo "<tr align='center'>";
                 }
                 
             }
                
             ?>
         </tr>
              
     </table>
