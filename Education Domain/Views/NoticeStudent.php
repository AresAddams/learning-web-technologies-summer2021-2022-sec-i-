<?php
    include 'navbarStudent.php';
    require_once '../Controllers/noticeListCheck.php';
    $notices = getAllNotice();
    
?>
    <!-- Course Form Stated  -->

    <table>
            <tbody><tr><td></td></tr>
            
                <td><b>Notices:</b></td>
            </tr>
            <tr>
                </tr></tbody></table>
    <form action="">
        <table>
            
            <tr>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <tr align="center" >
                        <th >Notice Title</th>
                        <th >Notice Description</th>
                        <th >Time</th>
                        <th >Date</th>
                        
                    
                    </tr>   
                    
                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($notices as $notice){
                           
                            
                            echo "<td>$notice</td>";
                            $i++;
                            if($i>3){   
                                // echo '<td><img src="../Assests/upload/'.$notice.'" width="110px"></td>';
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
