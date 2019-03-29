<?php

try 
{
	$dbh=new PDO("mysql:host=localhost;dbname=assignment","root","");
	$dbh->beginTransaction(); 
		$table1='CREATE TABLE IF NOT EXISTS students(
	    Student_Id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		Student_Name varchar(20) DEFAULT NULL,
		Student_email varchar(40) DEFAULT NULL,
		Student_city varchar(20) DEFAULT NULL,
		  PRIMARY KEY (Student_Id))';
	$dbh->exec($table1);

		$table2='CREATE TABLE IF NOT EXISTS courses(
	    Course_No int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		course_Name varchar(20) DEFAULT NULL,
		course_Credits varchar(20) DEFAULT NULL,
		PRIMARY KEY (Course_No))';
	$dbh->exec($table2);

	$table3='CREATE TABLE IF NOT EXISTS teachers(
	    Teacher_Id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		Teacher_Name varchar(20) DEFAULT NULL,
		Teacher_phone varchar(20) DEFAULT NULL,
		PRIMARY KEY (Teacher_Id))';
	$dbh->exec($table3);

	$table4='CREATE TABLE IF NOT EXISTS selected(
	    Student_Id int(10) NOT NULL,
		Course_No int(20) NOT NULL,
		PRIMARY KEY (Student_Id,Course_No))';
	$dbh->exec($table4);
	//insert queries
    $dbh->exec("INSERT INTO Students (Student_name,Student_email,Student_city) 
	            VALUES ('mugabo', 'mugabo@gmail.com','nairobi')"); 
    $dbh->exec("INSERT INTO selected(Student_id, course_No)
                VALUES ('1', '1')"); 
	$dbh->exec("INSERT INTO courses (course_Name,course_Credits) 
		        VALUES ('mathematics', '15')"); 
	$dbh->exec("INSERT INTO teachers (Teacher_Name,Teacher_phone) 
                VALUES ('Niyibizi', '788234564')"); 
    

$dbh->commit(); 

 echo 'Data entered successfully<br />'; } 
catch(PDOException $e) {

echo $sql . '<br />' . $e->getMessage(); } 
?> 