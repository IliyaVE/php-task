<?php
$link = mysqli_connect('localhost:3306' , 'iliya','test','test_php');

if ($link == false){
    print("Ошибка: Невозможно подключиться в Базе Данных". mysqli_connect_error());
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


$result = mysqli_query($link,$sql);
