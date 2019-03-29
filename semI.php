<?php
// class Notebook{
// 	public $comp;
// 	public $color='blue';
//  	public $value='2000';
//     public function writingIn()
//  	{
//  		echo"writing In";
//  	}
//  }
//  $musana = new Notebook();
//  $Jambo = new Notebook();
//  echo $musana->color;
//  echo "<br/>";
//  echo $musana->value;
//  echo "<br/>";
//  $Jambo->color='black';
//  $Jambo->value='5000';
// echo $Jambo->color;
//  echo "<br/>";
//  echo $Jambo->value;



//static properties

// class Add{
// 	static $a=5;
// 	static $Sum;
// }
// add::$a;
// echo add::$a;




// class User{
// 	public $fname;
// 	public $lname;
// 	public function sayHello()
// 	{
// 		echo"Hello";
// 	}
// }
// $user1 = New user;
// $user1->fname="john";
// $user1->lname="doe";
// echo $user1->fname;
// echo "<br/>";
// echo $user1->lname;
// echo "<br/>";
// $user1->sayHello();




// class Test{
// 	static $a=5;
	
// }
//   Test::$a;
// echo Test::$a;








// class user{
// 	public $i;
// 	static $v=5;
// 	public function calculationMultiplicationTable()
// 	{
	
// 		for($this->i=1;$this->i<=10;$this->i++)
// 		{
// 			$result=$this->i*self::$v;
// 			echo self::$v."*".$this->i."=".$result;
// 			echo"<br>";
// 		}

// 	}
// 	public function sayhello()
// 	{
// 	echo "mariane how are you";	
// 	}

// }
// $user1=New user();
//  $user1->calculationMultiplicationTable();
//  $user1->sayhello();







// class user
// {
// 	public $fname;
// 	public $lname;
// 	public function sayhello(){
// 		return "hello,";
// 	}
// 	public function register(){
// 		echo $this->lname." ".$this->fname." "."registered";
		
// 	}
// 	public function mail(){
// 		echo "mailed";
// 	}
// }
// $user1=new user;
// $user2=new user;
// $user1->lname="john";
// $user1->fname="doe";
// $user2->lname="jane";
// $user2->fname="roe";
// echo"<br/>";
// echo $user1->sayhello();
// echo" "."";
// echo $user1->lname;
// echo" "."";
// echo $user1->fname;
// echo"<br/>";
// echo $user1->sayhello();
// echo" "."";
// echo $user2->lname;
// echo" "."";
// echo $user2->fname;
// echo"<br/>";
//  $user1->register();
// echo"<br/>";
// $user1->mail();
// echo"<br/>";
// $user1->register();
// echo" "."  ";
// $user1->mail();




// example of  public to access propert
// class Toys{
// 	public $price =600;
// }
// $s=New Toys();
//// $s->price=60;
// echo $s->price;




//example of  private to access propert using set and get
//  class Toys{
//  	private $price;
// 	public function setprice($p)
//  	{
//  		$this->price=$p;
//  	}
// 	public function getprice()
// 	{
//  		return $this->price;
//  	}
// }
//  $s=New Toys();
//  $s->setprice(600);
//  echo $s->getprice();




 //example of protected used in inhertence
// class Toys
// {
// 	protected $price=700;
// }
// 	class m extends Toys
// 	{
// 		public function display()
// 		{
// 		return $this->price;
// 		}
// 	}
// 	$s=New m();
//    echo $s->display();





//abstract used in class and method only used extend keyword
// abstract class a 
//  {   
//  	abstract function b();  
//   public function c()  
//    {   
//    	echo "Can be used as it is";  
//    }  
//     }   class m extends a  
//      {   
//      public function b()   
//    { 
//      echo "Defined function b<br/>";   
//    }  
//     }  
//     $tClass = new m();  
//     $tClass->b();   
//    $tClass->c(); 





// class user{
//  	private $firstName;
// 	public function setFirstName($name)
// 	{
// 		$this->firstName=$name;
// 	}
// 	public function getFirstName()
// 	{
// 		 return $this->firstName;
// 	}
// }
// $user1=New user();
// $user1->setFirstName("mariane");
// echo $user1->getFirstName();



//  class multiple{
// 	public $l;
// 	public $w;
// 	public $area;
// 	public function setnum($l,$w)
// 	{
// 		$this->area=$l*$w;
	
//        }
// 	public function getnum()
// 	{
// 		return $this->area;
       
// 	}
// }
// $number=New multiple();
//  $number->setnum(20,40);
//   echo $number->getnum();



//exercise

//anather way
// class level3{
// 	public $side=20;
// 	public $width=40;
// 	public $area;
// 	public function area()
// 	{
// 		$this->area=$this->side*$this->width;
// 		echo $this->area;
// 	}
// }
// $object=new level3();
//   $object->area();





// class second{
// 	public $x=42;
// 	public function divide()
// 	{
// 		if(($this->x%2==0)&&($this->x%21==0))
// 		{
// 			echo"the division of number is good";
// 		}
// 		else{
// 			echo"try again";
// 		}
// 	}
// }
// $object=new second();
//  $object->divide();







// class even{
// 	public $i;
// 	public function even1()
// 	{
// 		for($this->i=1;$this->i<=20;$this->i++)
// 		{
// 			if($this->i%2==0)
// 			{
// 				echo $this->i;
// 				echo"<br>";
// 			}
// 		}
// 	}
// }
// $object=new even();
// $object->even1();



// class line{
// 	public $y;
// 	public function line1()
// 	{
// 		for($this->y=1;$this->y<=10;$this->y++)
// 		{
// 			echo $this->y;
// 			if($this->y<10)
// 			{
// 			echo "-";	
// 			}
// 			else
// 			{
// 				echo "";
// 			}
			
// 		}
// 	}
// }
// $lee=new line();
// echo $lee->line1();



// class addition{
// 	public $x;
// 	public $sum=0;
// 	public function add()
// 	{
// 		for($this->x=0;$this->x<=30;$this->x++)
// 		{
// 			$this->sum=$this->x+$this->sum;
// 			echo $this->sum;
// 			echo "<br>";
// 		}
// 	}
// }
// $object=new addition();
// $object->add();



//if you need to display total only
// class addition{
// 	public $x;
// 	public $sum=0;
// 	public function add()
// 	{
// 		for($this->x=0;$this->x<=30;$this->x++)
// 		{
// 			$this->sum=$this->x+$this->sum;
// 		}
// 		echo $this->sum;
// 	}
// }
// $object=new addition();
// echo $object->add();





//class fact{
// 	public $n;
// 	public function multiple()
// 	{
// 		for($this->n=0;$this->n<=30;$this->n++)
// 		{
// 			if($this->n%3==0){
// 			echo $this->n;	
// 			}
			
// 			else
// 		{
// 			echo"<br>";
// 		}
// 			}
// 		}	
// 	}

// $number=new fact();
// $number->multiple();





//exercice
// class user{
// 	public $name="madam";
// 	public function palindrome()
// 	{
// 		if ($this->name==strrev($this->name))
// 		{
// 			return "palindrome";	
// 		}
// 		return"not polindrome";
// 	}
// }

// $obj=new user();
// echo $obj->palindrome();
// echo "  ".$obj->name;





////star
// class star{
// 	public $i;
// 	public $n;
// 	public function setstar()
// 	{
// 		for($this->i=1;$this->i<=5;$this->i++)
// 		{
// 		for($this->n=1;$this->n<=$this->i;$this->n++){
// 			echo"*"." ";
// 			}
		
// 	echo"<br>";
		
// 	}
// 	for($this->i=1;$this->i<=5;$this->i++)
// 		{
// 		for($this->n=5;$this->n>=$this->i;$this->n--){
// 			echo"*"." ";
// 			}
		
// 	echo"<br>";
	
// }
// }
// }
// $user1=new star();
// $user1->setstar(); 







//constructor
// class user{
// 	public $i;
// 	public function __construct($name)
// 	{
// 		$this->i=$name;
// 	}
// }
// $user1=new user("Mariane");
// echo $user1->i;



////anather way
// class user{
// 	public $i;
// 	public function __construct($name)
// 	{
// 		$this->i=$name;
// 	}
// 	public function getName()
// 	{
// 		return $this->i;
// 	}
// }
// $user1=new user("Mariane");
// echo $user1->getName();





// class BankAccount{ 
//     public $accountNumber; 
//     public $totalBalance; 
//      public function __construct($accountNo, $initialAmount){ 
//         $this->accountNumber = $accountNo; 
//         $this->totalBalance = $initialAmount;
//     } } 
// $account = new BankAccount('1243845355',2000); 
// echo $account->accountNumber."  ".$account->totalBalance;





// anather way
// class BankAccount{ 
//     public $accountNumber; 
//     public $totalBalance;
//     public $name; 
//      public function __construct($accountNo, $initialAmount,$name){ 
//         $this->accountNumber = $accountNo; 
//         $this->totalBalance = $initialAmount;
//         $this->name = $name;
//     }
//     	public function getAccount()
//  	{
//  		return $this->accountNumber;
//  	}
//  	public function getAmount()
//  	{
//  		return $this->totalBalance;
//  	}
//  	public function getname()
//  	{
//  		return $this->name;
//  	}
//       } 
//  $account = new BankAccount('1243845355',2000,'mariane'); 
//  echo $account->getAccount();
//  echo"<br>";
//  echo $account->getAmount();
//  echo"<br>";
//  echo $account->getname();





//constructor overlooding can not possible
//class BankAccount{ 
   // public $accountNumber; 
    //public $totalBalance; 
    // public function __construct($accountNo, $initialAmount){ 
      //  $this->accountNumber = $accountNo; 
       // $this->totalBalance = $initialAmount;
    //}
    //public function __construct($accountNo)
    //{
    //$this->accountNumber = $accountNo;	
    //}
     //} 
// $account = new BankAccount('1243845355',2000); 
//echo $account->accountNumber."  ".$account->totalBalance;




//excercise

// class user{
// 	private $firstName;
// 	private $lastName;
// 	public function __construct($first,$last)
// 	{
// 		$this->firstName=$first;
// 		$this->lastName=$last;
// 	}
// 	 public function getFullName()
// 	 {
// 	 	return $this->firstName."  ".$this->lastName;
// 	}
// }
// $user1=new user("Mariane","DUSABIMANA");
// echo $user1->getFullName();







////destruct example
// class user{
// 	public $name;
// 	public function __construct($x)
// 	{
// 		$this->name=$x;
// 	}
// 	public function __destruct()
// 	{
// 		echo "the object's properties has been destroyed"."  ".$this->name;
// 	}
// }
// $obj=new user("Mariane");
// echo $obj->name."<br>";






////single inhertance
// class car{
// 	public function hello()
// 	{
// 		return "inzu";
// 	}
// }
// class sportscar extends car{
// 	public function call(){
// 		echo "umurima";
// 	}
// }
// $sportscar1=new sportscar();
// echo $sportscar1->hello();
// echo"<br>";
// echo $sportscar1->call();




////multiple inhertence
//is not supported by php

// class test1 
 
// { 
// public function hello() 
// {
// 	return "bepp";
// }
// }
//  class test2
//  { 
//  	public function sayhello()
//  	{
//  	return "hello";	
//  	}
//   } 
//   class test3 extends test1,test2 
//   {
//    }
// $object=new test3();
// echo $obj->sayhello();
// echo $obj->hello();


////multilevel example
// class GrandFather 
// { 
// 	public function  gfAge()
//   {  
//    return  ' age is 80';
//     } 
// }
//  class Father extends GrandFather 
//  {
//      public function  fAge() 
//       {   
//       	return  ' age is 50'; 
//       	 } 
//       	} 
//       	class Son extends Father 
//       	{ 
//       	 public function  sAge()  
//       	 {  
//       	  return  'age is 20'; 
//       	   } 
 
//      public function myHistory() 
//           { 
//       echo "my grand father ".$this->gfAge();
//      echo"<br>";
//     echo "my father ".$this->fAge();
//     echo"<br>";  
//     echo "my ".$this->sAge(); 
//     } 
//     }
//     $son = new Son();
//     $son->myHistory();




////outside of a class 
// class GrandFather 
// { 
// 	public function  gfAge()
//   {  
//    return  ' age is 80';
//     } 
// }
//  class Father extends GrandFather 
//  {
//      public function  fAge() 
//       {   
//       	return  ' age is 50'; 
//       	 } 
//       	} 
//       	class Son extends Father 
//       	{ 
//       	 public function  sAge()  
//       	 {  
//       	  return  'age is 20'; 
//       	   } 
//       	}
//         $son = new Son();
//         echo"my grand father" .$son->gfAge()."<br>";
//         echo"my father" .$son->fAge()."<br>";
//         echo"my son" .$son->sAge(); 

 

// 





////excercise
// class user{
// 	private $userName;
// 	public function setName($userName)
// 	{
// 		$this->userName=$userName;
// 	}

// 	public function getName()
// 	{
// 		return $this->userName;
// 	}
// }
// class Admin extends user{
// 	public $userName;
// 	public function expressYourRoll()
// 	{
// 		return"Admin";
// 	}
// 	public function sayhello()
// 	{
// 		return"hello admin".'   '.$this->userName;
// 	}
// }
// $admin1=new admin();
// $admin1->setName("balthazar");
// echo $admin1->sayhello();
// echo $admin1->getName();


////correct way as excercise say
// class user{
// 	protected $userName;
// 	public function setName($userName)
// 	{
// 		$this->userName=$userName;
// 	}
// 	public function getName()
// 	{
// 		return $this->userName;
// 	}
// }
// class Admin extends user{

// 	public function expressYourRoll()
// 	{
// 		return"Admin";
// 	}
// 	public function sayhello()
// 	{
// 		return"hello admin".'   '.$this->getName();
// 	}
// }
// $admin1=new admin();
// $admin1->setName("balthazar");
// echo $admin1->sayhello();



//qwiz 2
// abstract class user{
// 	abstract function stateYourRole();
// 	protected $username;
// 	public function setUsername($name)
// 	{
//        $this->username=$name;
// 	}
// 	public function getUsername()
// 	{
//   return $this->username;
// 	}
// 		}
// 	 class admin extends user  
//      {   
//      public function stateYourRole()   
//    { 
//      return "admin";   
//    }
// }
//    class viewer extends user  
//      {   
//      public function stateYourRole()   
//    { 
//      return "viewer";   
//    }
// }

// $tClass = new viewer();  
//     $tClass->setUsername("balthazar");   
//    echo $tClass->stateYourRole();







////interface
// class User{
// 	protected $username;
// 	public function setName($username)
// 	{
// 		$this->username=$username;
// 	}
// 	public function getName()
// 	{
// 		return $this->username;
// 	}
// }
// 	interface Author
// 	{
// 		public function setAuthorPrivileges($array);
// 		public function getAuthorPrivileges();
// 	}
// 	interface Editor
// 	{
// 		public function setEditorPrivileges($array);
// 		public function getEditorPrivileges();
// 	}
// 	class AuthorEditor extends User implements Author,Editor{
//       private $authorPrivilegesArray;
//       //private $editorPrivilegesArray;
//       public function setAuthorPrivileges($array)
//       {
//       	$this->authorPrivilegesArray=$array;

//       }
//       public function getAuthorPrivileges()
//       {
//       	return $this->authorPrivilegesArray;
//       }
//       public function setEditorPrivileges($array)
//       {
//       	$this->editorPrivilegesArray=$array;
//       }
//       public function getEditorPrivileges()
//       {
//       	return $this->editorPrivilegesArray;
//       }
// 	}
// $user1=new AuthorEditor();
// $user1->setName("Barthazal");
// $user1->setAuthorPrivileges(array("write text","add punctuation"));
// $user1->setEditorPrivileges(array("edit text","edit punctuation"));
// echo $user1->getName()."has the following privileges:";
// $x=array_merge($user1->getAuthorPrivileges(),$user1->getEditorPrivileges());
// foreach($x as $d)
// {
// 	echo $d.".";
// }









// interface Shape{
// 	public function calcArea();
// }
// class Circle implements Shape{
// 	private $radius;
// 	public function __construct($radius)
// 	{
// $this->radius=$radius;
// 	}
// 	public function calcArea()
// 	{
// 		return $this->radius * $this->radius * pi();
// 	}
// }
// class Rectangle implements Shape{
// 	private $width;
// 	private $height;
// 	public function __construct($width,$height)
// 	{
// 		$this->width=$width;
// 		$this->height=$height;
// 	}
// 	public function calcArea()
// 	{
// 		return $this->width *$this->height;
// 	}
// }
// $circ=new Circle(3);
// $rect=new Rectangle(3,4);
// echo $circ->calcArea();
// echo $rect->calcArea();











//  abstract class User {    
//  	protected $scores= 0;  
//     protected $numberOfArticles = 0;

//     public function setNumberOfArticles($int)
//     {
//     	$this->numberOfArticles=$int;
//     }
//     public function getNumberOfArticles()
//     {
//     	return $this->numberOfArticles;
//     }
//     ////abstract function calcScores($scores);
//     }
// class Author extends User
// {
// public function calcScores()
// {
// 	return $this->scores=$this->numberOfArticles*10+20;
// }
// }
// class Editor extends User
// {
// public function calcScores()
// {
// 	return $this->scores=$this->numberOfArticles*6+15;
// }
// }
// $author1=new Author();
// $author1->setNumberOfArticles(8);
// echo $author1->calcScores();
// echo "</br>";
// $editor1=new Editor();
// $editor1->setNumberOfArticles(15);
// echo $editor1->calcScores();




// class User{
// 	protected $username;
// 	public function setName($username){
// 		$this->username=$username;
// 	}
// 	public function getName(){
// 		return $this->username;
// 	}
	
// }
// interface Author
// {
// 	public function setAuthorPrivileges($array);
// 	public function getAuthorPrivileges();
	
// }
// interface Editor
// {
// 	public function setEditorPrivileges($array);
// 	public function getEditorPrivileges();
// }
// class AuthorEditor extends User implements Author,Editor{
// 	//private $authorPrivilegesArray;
// 	//private $editorPrivilegesArray;
// 	public function  setAuthorPrivileges($array)
// 	{
// 		$this->authorPrivilegesArray=$array;
// 	}
// 	public function getAuthorPrivileges()
// 	{
// 		return $this->authorPrivilegesArray;
// 	}
// 	public function  setEditorPrivileges($array)
// 	{
// 		$this->EditorPrivilegesArray=$array;
// 	}
// 	public function getEditorPrivileges()
// 	{
// 		return $this->EditorPrivilegesArray;
// 	}
// }
// $user1=new AuthorEditor();
// $user1->setName("Balthazar");
// $user1->setAuthorPrivileges(array("write text","add punctuation"));
// $user1->setEditorPrivileges(array ("edit text","punctuation"));
// echo $user1->getName()."has the following privileges:";
// $x=array_merge($user1->getAuthorPrivileges(),$user1->getEditorPrivileges());
// foreach($x as $d)
// {
// 	echo $d.".";
// }




////Autoload your classes in PHP, it was came to simplyfy question of to cleate many page and include it in one page

// class ITL1{
// 	public function __construct()
// 	{
// 		echo "ITL1"."<br>";
// 	}
// }



// class ITL2{
// 	public function __construct()
// 	{
// 		echo "ITL2"."<br>";
// 	}
// }




// class ITL3{
// 	public function __construct()
// 	{
// 		echo "ITL3"."<br>";
// 	}
// }
 

//  include"ITL1.php";  // or you can use require or require __once
//  include"ITL2.php";
//  include"ITL3.php";
//  $a=new ITL1();
//  $b=new ITL2();
//  $c=new ITL3();




////how to use Autoload your classes in PHP   you create many page have name of there class and extention.php then require it using magic function=function has __(ex :contructor )
// function __autoload ($class_name){
// 	require_once $class_name . '.php';
// }
// $a=new ITL1();
//  $b=new ITL2();
//  $c=new ITL3();





//exercise on Autoload 
//// 1.create page colled image.php
// interface Sum{
// 	public function setSum($a,$b);
// 	public function getSum();
// }
// interface Multiplication{
// 	public function setmult($e,$v);
// 	public function getmult();
// }



// ////2.create anather page colled test.php
// include"Image.php";
// class test implements Sum,Multiplication{
// 	public $Sum;
// 	public $mult;

// 	public function setSum($a,$b){
// 		$this->sum=$a+$b;
// 	}
// 	public function getSum(){
// 	return $this->Sum;	
// 	}
// 	public function setMult($e,$v){
// 		$this->sum=$e*$v;
// 	}
// 	public function getMult(){
// 	return $this->Mult;	
// 	}
// }

// ////3.create anather page colled result.php it is not allowed to use access modifier

// function __autoload($classname){
// 	include $classname.'.php';
// }
// $a=new test();
// $a->setSum(4,6);
// $a->setMult(4,6);
// echo $a->getSum()."<br>";
// echo $a->getMult();




?>