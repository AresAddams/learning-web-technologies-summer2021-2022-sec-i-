<?php
    include 'navbar.php';
    require_once '../Controllers/RoomNo.php';
    $courses = getRoom();
    // $departments=getDepartment();
?>
<table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
         <tr align="center" >
             <th >Course ID</th>
             <th >Course Name</th>
             <th >Allocated Room</th>
             <th >Class Time</th>

             

             <?php

             $i=0;
             echo "<tr align='center'>";
             foreach($courses as $course){
                 
                 
                 echo "<td>$course</td>";
                 $i++;
                 if($i>3){
                     $i=0;
                     echo "</tr>";
                     echo "<tr align='center'>";
                 }
                 
             }
                
             ?>
         </tr>
              
     </table>
