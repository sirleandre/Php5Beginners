<?php
interface User{
}
class Commentator implements User{
 private $username='Jane';
	 private $gender;
	 public function setName($username){
	 	$this->username=$username;
	 }
	public function getName(){
		 	if($this->username=='Jane'){
		 		return "Mrs.".' '.$this->username."<br>";
		 	}
		 	else{
		 	return "Mr.".' '.$this->username;	
		 	}
		
	}
	 public function setGender($sex){
	 	$this->gender=$sex;
	 }
	public function getGender(){
	}
}
$user1=new Commentator();
$user1->setName("Jane");
$user1->setGender("Female");
echo $user1->getName();
$user2=new Commentator();
$user2->setName("Bob");
$user2->setGender("Male");
echo $user2->getName();
?>