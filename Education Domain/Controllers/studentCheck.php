<?php	
function getAllStudent(){
                $file = fopen('../models/students.txt', 'r');
                while(!feof($file)){
                    $students = fgets($file);
                    $studentArray = explode('|', $students);
                    return $studentArray;
                }
            }