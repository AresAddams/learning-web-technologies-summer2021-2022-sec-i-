<?php	
function getAllStudent(){
                $file = fopen('../models/teacher.txt', 'r');
                while(!feof($file)){
                    $faculty = fgets($file);
                    $facultyArray = explode('|', $faculty);
                    return $facultyArray;
                }
            }
            function getAssignCourse(){
                $file = fopen('../models/AssignCourse.txt', 'r');
                while(!feof($file)){
                    $Acourse = fgets($file);
                    $assignArray = explode('|', $Acourse);
                    return $assignArray;
                }
            }
