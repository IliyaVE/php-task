<?php
$link = mysqli_connect('localhost:8001' , 'root','test','test_php');

if ($link == false){
    print("Ошибка: Невозможно подключиться в Базе Данных". mysqli_connect_error());
}


$ID = $_POST['6'];
$LastName = $_POST['LastName'];
var_dump($LastName);
$FirstName = $_POST['FirstName'];
$Years = $_POST['Years'];
$City = $_POST['City'];
$NumberClass = $_POST['NumberClass'];
$Grands = $_POST['Grands'];
$CountGrands = $_POST['CountGrands'];
$Grades = $_POST['Grades'];
$ScoreOfUniversity = $_POST['ScoreOfUniversity'];
$sql = "INSERT INTO list_student VALUES ('$ID','$LastName','$FirstName','$Years','$City',$NumberClass,$Grands,$CountGrands,$Grades,$ScoreOfUniversity)";


$result = mysqli_query($link, mysqli_error($sql));







































while($row = mysqli_fetch_array($result)){
    print("Фамилия".$row['LastName']."<br>");
}