<?php	
function getAllResult(){
                $file = fopen('../models/results.txt', 'r');
                while(!feof($file)){
                    $results = fgets($file);
                    $resultArray = explode('|', $results);
                    return $resultArray;
                }
            }