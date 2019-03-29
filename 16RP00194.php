<?php
interface User{
	public function setUsername($name);
    public function getUsername();
    public function setGender($gender);
    public function getGender();
}

 class Commentator implements User{
	private $username;
	private $gender;
	public function setUsername($name)
	{
		$this->username=$name;
	}
	public function setGender($gender)
	{
		$this->gender=$gender;
	}	
}

$user1=new Commentator();
$user1->setUsername("jane");
$user1->setGender("female");
  if(setGender==female){
  	echo "Mrs jane";
  }
  else{
  	echo "Mr jane";
  }
 $user2=new Commentator();
 $user2->setUsername("Bob");
$user2->setGender("male");

if(setGender==male){
 	echo "Mr Bob";
 }
 else{
 	echo "Mrs Bob";
  }

 echo $user1->getUsername();
 echo $user2->getUsername();

?>

























