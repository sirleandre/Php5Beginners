
<?php

////object clone

// class Animals
// {
// private $name;
// private $category;
// public function setName($name,$category)
// {
// 	$this->name=$name;
// 	$this->category=$category;
// }
// public function getName()
// {
// 	return $this->name.' '.$this->category;
// }
// }
// //Creating instance of Animals class
// $objAnimals = new Animals();
// //Assigning values
// $objAnimals->setName("Lion","Wild Animal");
// //Copying $objAnimals to another variable
// $objCopied = $objAnimals;
// ////echo $objAnimals->getName();
// ////echo "<br>";
// echo $objCopied->getName();




// class Person
// {
// private $ssn;
// private $firstName;
// private $lastName;
// public function __construct($ssn,$firstName,$lastName)
// {
// $this->ssn=$ssn;
// $this->firstName=$firstName;
// $this->lastName=$lastName;
// }
// public function get()
// {
// 	return $this->ssn.' '.$this->firstName.' '.$this->lastName;
// }
// }
// $p1=new Person('12536e7','Rechard','Muhirwa');
// //echo $p1->get().'<br>';
// $p2=new Person('12536e767','Jule','Gasana');
// //echo $p2->get();
// $p1= $p2;
// echo $p1->get();








//php Overriding
// class testParent {
//  public function f1() {
//   echo 1;
//    }
//     public function f2() { 
//     echo 2;
//      }
//       } 
//       class testChild 
//       {
//        public function f2($a) //overriding function f2 
//        {
//         return $a;
//          }
//           } 
//           $a = new testChild();
//          echo $a->f2("ankur");






// class car{
//   public function hello(){
//     return "beep";
//   }
// }
// class sportscar extends car{
//   public function hello(){
//      return "hello";
//   }
// }
// $sportscar1=new sportscar();
// echo $sportscar1->hello();





//You can not implement 2 interfaces if both share function with same name. It will throw error.
interface template1
{
	public function f1();
}
interface template2
{
	public function f1();
	public function f2();
}
class test implements template1,template2
{
	public function f1()
	{
		return "1";
	}
	public function f2()
	{
		return "2";
	}
	public function f1()
	{
		return "5";
	}
}
$d=new test();
 echo $d->f1();



//php overlooding
// class test {
//  public function __construct()
//   { 

//    }
//     public function __call($method_name , $parameter)
//      { 
//      if($method_name == "overlodedFunction")
//        { 
//        $count = count($parameter);
//         switch($count)
//          { 
//          	case "1":
//           echo "You are passing 1 argument";
//            break; 
//            case "2": 
//             echo "You are done";
//              break;
//              case "3": 
//             echo "You can continue anather switch";
//              break;
//               default: 
//               throw new exception("you are overlooding");
//                }
//                 } 
//                 else
//                  { 
//                  	throw new exception("Function $method_name does not exists ");  
// }
//  } 
// }
//  $a = new test();
//   $a->overlodedFunction("ankur");
//   echo "</br>";
//    $a->overlodedFunction("techflirt" ,"ankur"); 
//     echo "</br>";
//    $a->overlodedFunction("mariane" ,"dudu" ,"itlevel 3"); 
//    $a->overlodedFunction("mariane" ,"dudu" ,"itlevel 3" ,"coding"); //it must give you error becouse you use more argument than ony you say in switch









 ////throw an exception



// class FuelEconomy { 
 
// public function calculate($distance, $gas) 
// {
// if($gas <= 0 ) 
// { 

// throw new Exception("The gas consumption cannot be less than 
// or equal to zero. You better drink coffee or take a break.");
// }  
// return $distance/$gas; 
// } 
// } 
// $dataFromCars = array( array(50,10), array(50,0), array(50,-3), array(30,5)); 
 
// foreach($dataFromCars as $data => $value) 
// { 
// 	try 
// { 
// $fuelEconomy = new FuelEconomy(); 
// echo $fuelEconomy -> calculate($value[0],$value[1]) . "<br />"; 
// } 
// catch (Exception $e) 
// { 
// // Echo the custom error message 
// echo "Message: " . $e -> getMessage() . "<br />"; 
// echo "File: " . $e -> getFile() . "<br />";
// echo "Line: " . $e -> getLine() . "<br />";

 
//} 
//}











// class User {
// private $name;
// private $age;
// public function setName($name)
// {
// // Trim the white spaces
// $name = trim($name);
// if(strlen($name)<3){
// //The username should be at  least 3 characters.
// 	throw new Exception("The username should not be less than 3 characters.");
// }
// $this -> name = $name;

// }
// public function setAge($age)
// {
// // Cast into an integer type
// $age = (int)$age;
// if($age<=0){
// //The age must great than 0.
// throw new Exception("The user age should not be less than or equal to 0 year old.");
// }
// $this -> age = $age;

// }
// public function getName()
// {
// return $this -> name;
// }
// public function getAge()
// {
// return $this -> age;
// }
// }//Declared an array outside of class
// $dataForUsers = array(array("Ben",4),array("Eva",28),array("li",29),array("Catie","not yet born"),
// 	array("Sue",1.5));
// foreach($dataForUsers as $data => $value) {
// 	// try block handles the normal data
// try
// {
// $x = new User();
// $x->setName($value[0]);
// $x->setAge($value[1]);
// echo $x -> getName()." "."is ".$x->getAge()."years old". "<br />";
// }
// catch (Exception $e)
// {
// echo "Message: " . $e -> getMessage() . "<br />";
// // Output the path to the file
// echo "File: " . $e -> getFile() . "<br />";
// // Output the line in the code
// echo "Line: " . $e -> getLine() . "<br />";
// echo "<hr />";
// }
// }





 
?>

