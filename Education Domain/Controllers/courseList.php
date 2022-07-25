<?php	
function getAllCourse(){
                $file = fopen('../models/course.txt', 'r');
                while(!feof($file)){
                    $notice = fgets($file);
                    $courseArray = explode('|', $notice);
                    return $courseArray;
                }
            }
function getDepartment(){
    $file = fopen('../models/department.txt', 'r');
                while(!feof($file)){
                    $department = fgets($file);
                    $departmentArray = explode('|', $department);
                    return $departmentArray;
                }
}
?>