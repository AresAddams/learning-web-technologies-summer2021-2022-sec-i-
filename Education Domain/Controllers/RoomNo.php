<?php	
	
	
	if(isset($_REQUEST['submit'])){
		
		$courseId = $_POST['courseId'];
		$courseName = $_POST['courseName'];
		$roomNo = $_POST['roomNo'];
		$time = $_POST['time'];

		if( $courseId != null &&  $courseName != null  &&  $roomNo != null &&  $time != null){
			
			
			$Acourse= "|".$courseId . "|" . $courseName. "|" . $roomNo . "|".$time;

			$file = fopen('../models/Room.txt', 'a+');
			fwrite($file, "$Acourse");
			fclose($file);
			 header('location: ../views/ShowRoom.php');


		}else{
			echo "Missing input";
		}
	}
    function getRoom(){
        $file = fopen('../models/Room.txt', 'r');
                    while(!feof($file)){
                        $courses = fgets($file);
                        $coursesArray = explode('|', $courses);
                        return $coursesArray;
                    }
    }

?>