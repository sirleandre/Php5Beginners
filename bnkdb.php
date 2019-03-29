<?php
try{
$dbh=new PDO("mysql:host=localhost;dbname=bnkdb","root","");
$dbh->beginTransaction();

$table1='CREATE TABLE IF NOT EXISTS `accounts` (
  `account_no` int(15) NOT NULL,
  `account_holder` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `account_type` varchar(15) NOT NULL,
  `last_time_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1';
$dbh->exec($table1);



$table2='CREATE TABLE IF NOT EXISTS `customer_info` (
  `account_no` int(15) NOT NULL,
  `account_holder` varchar(200) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fathernames` varchar(100) NOT NULL,
  `mothernames` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `cont_no` int(18) NOT NULL,
  `idnumber` varchar(16) NOT NULL,
  `dateofbirth` date NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `address` varchar(60) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `martial_status` varchar(15) NOT NULL,
  `acc_type` varchar(14) NOT NULL,
  `carrier` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1';
$dbh->exec($table2);


$table3='CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `names` varchar(80) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `post` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ';
$dbh->exec($table3);



$dbh->commit();
}
catch(PDOException $e) {

echo $sql . '<br />' . $e->getMessage(); } 

?>