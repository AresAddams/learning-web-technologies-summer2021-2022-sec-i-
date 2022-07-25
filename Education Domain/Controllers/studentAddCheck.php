<?php


if (isset($_REQUEST['submit'])) {

	$studentId = $_POST['studentId'];
	$studentName = $_POST['studentName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$CGPA = $_POST['CGPA'];




	if ($studentId != null &&  $studentName != null &&  $gender != null &&  $email != null  &&  $contact != null &&  $CGPA != null) {


		$faculties = "|" . $studentId . "|" . $studentName . "|" . $gender . "|" . $email . "|" . $contact . "|" . $CGPA . "\r\n";

		$file = fopen('../models/teacher.txt', 'a+');
		fwrite($file, "$students");
		fclose($file);
		header('location: ../views/faculty.php');
	} else {
		echo "Missing input";
	}
}
