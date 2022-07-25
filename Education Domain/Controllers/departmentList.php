<?php	
function getAllDepartment(){
                $file = fopen('../models/department.txt', 'r');
                while(!feof($file)){
                    $department = fgets($file);
                    $departmentArray = explode('|', $department);
                    return $departmentArray;
                }
            }
?>