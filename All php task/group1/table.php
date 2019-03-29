<?php

try 
{
	$dbh=new PDO("mysql:host=localhost;dbname=assignment","root","");
	$dbh->beginTransaction(); 
		$table1='CREATE TABLE IF NOT EXISTS students(
	    student_Id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		student_Name varchar(20) DEFAULT NULL,
		student_email varchar(20) DEFAULT NULL,
		student_city varchar(20) DEFAULT NULL,
		  PRIMARY KEY (Student_Id))';
	$dbh->exec($table1);

		$table2='CREATE TABLE IF NOT EXISTS courses(
	    course_no int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		course_Name varchar(20) DEFAULT NULL,
		course_credit varchar(20) DEFAULT NULL,
		PRIMARY KEY (course_no))';
	$dbh->exec($table2);

	$table3='CREATE TABLE IF NOT EXISTS selected(
	    student_Id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		course_no varchar(60) DEFAULT NULL,
		  PRIMARY KEY (Student_Id))';
	$dbh->exec($table3);

	$table4='CREATE TABLE IF NOT EXISTS teachers(
	    teacher_Id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		teachert_Name varchar(60) NOT NULL,
		teacher_email varchar(60) DEFAULT NULL,
		  PRIMARY KEY (teacher_Id))';
	$dbh->exec($table4);
  $dbh->exec("INSERT INTO students ( student_Name,student_email,student_city) 
  	VALUES ('1', 'HARAMBINEZA','mure@yahoo.com','Kigali')");     
  $dbh->exec("INSERT INTO students ( student_Name,student_email,student_city) 
  	VALUES ('1', 'HARAMBINEZA','mure@yahoo.com','Kigali')"); 
  $dbh->exec("INSERT INTO students ( student_Name,student_email,student_city) 
  	VALUES ('1', 'HARAMBINEZA','mure@yahoo.com','Kigali')"); 
  $dbh->exec("INSERT INTO students ( student_Name,student_email,student_city) 
  	VALUES ('1', 'HARAMBINEZA','mure@yahoo.com','Kigali')"); 
$dbh->commit(); 

 echo 'Data entered successfully<br />'; } 
catch(PDOException $e) {

echo $sql . '<br />' . $e->getMessage(); } 
?> 