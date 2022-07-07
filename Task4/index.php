<!DOCTYPE html>
<head xmlns="http://www.w3.org/1999/html">
    <meta charset="utf-8">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
        }
    </style>
</head>
<body>
<form name="feedback" method="POST" action="action.php">
    <label>Фамилия: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="LastName"></label><br><br>
    <label>Имя: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="FirstName"></label><br><br>
    <label>Год рождения: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="Years"> </label><br><br>
    <label>Город: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="City"> </label><br><br>
    <label>Номер класса: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="NumberClass"></label><br>
    <p>Стипендия &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <select name="Grands">
            <option value="1">Да</option>
            <option value="0">Нет</option>
        </select>
    </p>
    <label>Бал за семестр: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="Grades"></label><br><br>
    <label>Рейтинг универа: &nbsp&nbsp&nbsp<input type="text" name="ScoreOfUniversity"></label><br><br>

    <input type="submit" name="send" value="Добавить"><br>
</form>
<br><br>

<br><br>

<br><br>
<?php

$spaces_start = "&nbsp&nbsp&nbsp&nbsp";
$spaces_middle = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$con = mysqli_connect("localhost:3306", "iliya", "test", "test_php");
if ($con == false) {
    print("Ошибка: Невозможно подключиться к Базе Данных" . mysqli_connect_error());
    exit;
}
<<<<<<< HEAD
$resultAll = mysqli_query($con,"SELECT * FROM list_students");
$resultStudents = mysqli_query($con,"SELECT LastName, FirstName, NumberClass, CountGrands FROM list_students WHERE CountGrands >= 100");
$resultUniversity = mysqli_query($con,"SELECT LastName, FirstName, ScoreOfUniversity FROM test_php.list_students WHERE ScoreOfUniversity > 300");
$resultOnePerson = mysqli_query($con,"select concat(LastName,' ',FirstName,' родился в ', Years) as Name from list_students;");
$resultGrades = mysqli_query($con,"SELECT LastName, FirstName, NumberClass FROM test_php.list_students WHERE list_students.Grades = 150");
$resultMinScore = mysqli_query($con,"SELECT LastName, FirstName, NumberClass, min_score FROM test_php.list_students");
$resultMaxScore = mysqli_query($con,"SELECT LastName, FirstName, NumberClass, max_score  FROM test_php.list_students");
$resultAlpList = mysqli_query($con,"SELECT LastName, FirstName FROM test_php.list_students WHERE LastName LIKE 'v%' ORDER BY min_score ASC ");
=======
$resultAll = mysqli_query($con,"SELECT * FROM test_php");
$resultStudents = mysqli_query($con,"SELECT LastName, FirstName, NumberClass, CountGrands FROM test_php WHERE CountGrands >= 100");
$resultUniversity = mysqli_query($con,"SELECT LastName, FirstName, ScoreOfUniversity FROM test_php.test_php WHERE ScoreOfUniversity > 300");
$resultOnePerson = mysqli_query($con,"SELECT LastName, FirstName, Years FROM test_php.test_php WHERE ID=12");
$resultGrades = mysqli_query($con,"SELECT LastName, FirstName, NumberClass FROM test_php.test_php WHERE test_php.Grades = 150");
$resultMinScore = mysqli_query($con,"SELECT LastName, FirstName, NumberClass, min_score FROM test_php.test_php");
$resultMaxScore = mysqli_query($con,"SELECT LastName, FirstName, NumberClass, max_score  FROM test_php.test_php");
$resultAlpList = mysqli_query($con,"SELECT LastName, FirstName FROM test_php.test_php ORDER BY min_score ASC");
>>>>>>> e3c671740bfb4cd9968d3e154711b4c3b5138bf8

echo "<h1>Весь список с данными</h1>";
echo "<table border='1'>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Год рождения</th>
        <th>Город</th>
        <th>Номер класса</th>
        <th>Стипендия</th>
        <th>Выплата</th>
        <th>Бал за семестр</th>
        <th>Рейтинг универа</th>
    </tr>";

while($row = mysqli_fetch_array($resultAll))
{
    echo "<tr >";
    echo "<td>".$row['LastName']."</td>";
    echo "<td>".$row['FirstName']."</td>";
    echo "<td>".$row['Years']."</td>";
    echo "<td>".$row['City']."</td>";
    echo "<td>".$row['NumberClass']."</td>";
    echo "<td>".$row['Grands']."</td>";
    echo "<td>".$row['CountGrands']."</td>";
    echo "<td>".$row['Grades']."</td>";
    echo "<td>".$row['ScoreOfUniversity']."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h1>Список универов выше 300</h1>";
echo "<table border='1'>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Год рождения</th>
        <th>Город</th>
        <th>Номер класса</th>
        <th>Стипендия</th>
        <th>Выплата</th>
        <th>Бал за семестр</th>
        <th>Рейтинг универа</th>
    </tr>";

while($row = mysqli_fetch_array($resultUniversity))
{
    echo "<tr >";
    echo "<td>".$row['LastName']."</td>";
    echo "<td>".$row['FirstName']."</td>";
    echo "<td>".$row['Years']."</td>";
    echo "<td>".$row['City']."</td>";
    echo "<td>".$row['NumberClass']."</td>";
    echo "<td>".$row['Grands']."</td>";
    echo "<td>".$row['CountGrands']."</td>";
    echo "<td>".$row['Grades']."</td>";
    echo "<td>".$row['ScoreOfUniversity']."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h1>Список студентов со стипендией выше 100</h1>";
echo "<table border='1'>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Год рождения</th>
        <th>Город</th>
        <th>Номер класса</th>
        <th>Стипендия</th>
        <th>Выплата</th>
        <th>Бал за семестр</th>
        <th>Рейтинг универа</th>
    </tr>";

while($row = mysqli_fetch_array($resultStudents))
{
    echo "<tr >";
    echo "<td>".$row['LastName']."</td>";
    echo "<td>".$row['FirstName']."</td>";
    echo "<td>".$row['Years']."</td>";
    echo "<td>".$row['City']."</td>";
    echo "<td>".$row['NumberClass']."</td>";
    echo "<td>".$row['Grands']."</td>";
    echo "<td>".$row['CountGrands']."</td>";
    echo "<td>".$row['Grades']."</td>";
    echo "<td>".$row['ScoreOfUniversity']."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h1>Запись с одним человеком</h1><br>";

while($row = mysqli_fetch_array($resultOnePerson))
{
    echo $row[0]."<br>";
};

echo "<h1>Список студенов с оценкой 150</h1>";
echo "<table border='1'>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Год рождения</th>
        <th>Город</th>
        <th>Номер класса</th>
        <th>Стипендия</th>
        <th>Выплата</th>
        <th>Бал за семестр</th>
        <th>Рейтинг универа</th>
    </tr>";

while($row = mysqli_fetch_array($resultGrades))
{
    echo "<tr >";
    echo "<td>".$row['LastName']."</td>";
    echo "<td>".$row['FirstName']."</td>";
    echo "<td>".$row['Years']."</td>";
    echo "<td>".$row['City']."</td>";
    echo "<td>".$row['NumberClass']."</td>";
    echo "<td>".$row['Grands']."</td>";
    echo "<td>".$row['CountGrands']."</td>";
    echo "<td>".$row['Grades']."</td>";
    echo "<td>".$row['ScoreOfUniversity']."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h1>Список студенов с минимальной оценкой</h1>";
echo "<table border='1'>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Год рождения</th>
        <th>Город</th>
        <th>Номер класса</th>
        <th>Стипендия</th>
        <th>Выплата</th>
        <th>Бал за семестр</th>
        <th>Рейтинг универа</th>
        <th>Минимальная оценка</th>
        <th>Максимальная оценка</th>
    </tr>";

while($row = mysqli_fetch_array($resultMinScore))
{
    echo "<tr >";
    echo "<td>".$row['LastName']."</td>";
    echo "<td>".$row['FirstName']."</td>";
    echo "<td>".$row['Years']."</td>";
    echo "<td>".$row['City']."</td>";
    echo "<td>".$row['NumberClass']."</td>";
    echo "<td>".$row['Grands']."</td>";
    echo "<td>".$row['CountGrands']."</td>";
    echo "<td>".$row['Grades']."</td>";
    echo "<td>".$row['ScoreOfUniversity']."</td>";
    echo "<td>".$row['min_score']."</td>";
    echo "<td>".$row['max_score']."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h1>Список студенов с макисмальной оценкой</h1>";
echo "<table border='1'>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Год рождения</th>
        <th>Город</th>
        <th>Номер класса</th>
        <th>Стипендия</th>
        <th>Выплата</th>
        <th>Бал за семестр</th>
        <th>Рейтинг универа</th>
        <th>Минимальная оценка</th>
        <th>Максимальная оценка</th>
    </tr>";

while($row = mysqli_fetch_array($resultMaxScore))
{
    echo "<tr >";
    echo "<td>".$row['LastName']."</td>";
    echo "<td>".$row['FirstName']."</td>";
    echo "<td>".$row['Years']."</td>";
    echo "<td>".$row['City']."</td>";
    echo "<td>".$row['NumberClass']."</td>";
    echo "<td>".$row['Grands']."</td>";
    echo "<td>".$row['CountGrands']."</td>";
    echo "<td>".$row['Grades']."</td>";
    echo "<td>".$row['ScoreOfUniversity']."</td>";
    echo "<td>".$row['min_score']."</td>";
    echo "<td>".$row['max_score']."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h1>Список студенов с определенной буквы</h1>";
echo "<table border='1'>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Год рождения</th>
        <th>Город</th>
        <th>Номер класса</th>
        <th>Стипендия</th>
        <th>Выплата</th>
        <th>Бал за семестр</th>
        <th>Рейтинг универа</th>
        <th>Минимальная оценка</th>
        <th>Максимальная оценка</th>
    </tr>";

while($row = mysqli_fetch_array($resultAlpList))
{
    echo "<tr >";
    echo "<td>".$row['LastName']."</td>";
    echo "<td>".$row['FirstName']."</td>";
    echo "<td>".$row['Years']."</td>";
    echo "<td>".$row['City']."</td>";
    echo "<td>".$row['NumberClass']."</td>";
    echo "<td>".$row['Grands']."</td>";
    echo "<td>".$row['CountGrands']."</td>";
    echo "<td>".$row['Grades']."</td>";
    echo "<td>".$row['ScoreOfUniversity']."</td>";
    echo "<td>".$row['min_score']."</td>";
    echo "<td>".$row['max_score']."</td>";
    echo "</tr>";
}
echo "</table>";


?>
</body>
