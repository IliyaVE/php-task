<?php
$link = mysqli_connect('localhost:3306' , 'iliya','test','test_php');

<<<<<<< HEAD
header("Location: http://localhost:63342/php-task/Task4/index.php");

if ($link == false) {
    print("Ошибка: Невозможно подключиться к Базе Данных" . mysqli_connect_error());
    exit;
}


$LastName = $_POST["LastName"];
$firstName = $_POST["FirstName"];
$Years = $_POST["Years"] ;
$City = $_POST["City"] ;
$NumberClass = $_POST["NumberClass"] ;
$Grands = $_POST["Grands"] ;
$CountGrands = 10000;
$Grades = $_POST["Grades"] ;
$ScoreOfUniversity = $_POST["ScoreOfUniversity"] ;
//$sql =  "INSERT INTO list_students ('ID','LastName','firstName','Years','City','NumberClass','Grands','CountGrands','Grades','ScoreOfUniversity') VALUES(' ','$LastName','$firstName',$Years,'$City',$NumberClass,$Grands,$CountGrands,$Grades,$ScoreOfUniversity)";
$sql =  "INSERT INTO list_students (ID,LastName,firstName,Years,City,NumberClass,Grands,CountGrands,Grades,ScoreOfUniversity) VALUES(NULL, '$LastName','$firstName',$Years,'$City',$NumberClass,$Grands,$CountGrands,$Grades,$ScoreOfUniversity)";
var_dump($sql);
#$num = '20';
#$varch = 'sad';
#$sql =  "INSERT INTO test_name_1 VALUES($num,'$varch')";
$result = mysqli_query($link, $sql);
var_dump($result);


if (!$result) {
    echo "Произошла ошибка.\n";
    exit;
=======
if ($link == false){
    print("Ошибка: Невозможно подключиться в Базе Данных". mysqli_connect_error());
>>>>>>> e3c671740bfb4cd9968d3e154711b4c3b5138bf8
}


// $ID = $_POST[''];
$LastName = $_POST['LastName'];
$FirstName = $_POST['FirstName'];
$Years = $_POST['Years'];
$City = $_POST['City'];
$NumberClass = $_POST['NumberClass'];
$Grands = $_POST['Grands'];
$CountGrands = 10000;
$Grades = $_POST['Grades'];
$ScoreOfUniversity = $_POST['ScoreOfUniversity'];
$sql = "INSERT INTO test_php.test_php VALUES ('NULL','$LastName','$FirstName','$Years','$City','$NumberClass','$Grands','$CountGrands','$Grades','$ScoreOfUniversity')";


<<<<<<< HEAD


=======
$result = mysqli_query($link,$sql);
>>>>>>> e3c671740bfb4cd9968d3e154711b4c3b5138bf8
