<?php
    include 'navbar.php';
    require_once '../Controllers/resultCheck.php';
    $results = getAllResult();
?>
<form action="">
        <table>
        <td><h3><u>Results:</u></h3></td>
         
            <tr>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
                    
                    
                    
                    <tr align="center" >
                        <th >Student Id</th>
                        <th >Student Name</th>
                        <th >Cgpa</th>
                        
                    
                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($results as $result){
                            
                            
                            echo "<td>$result</td>";
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
            </tr>
        </table>

    </form>
    
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
   
    
    
			
</body>
</html>
