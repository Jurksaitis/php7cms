<?php
include_once 'initialise.php';
// $db->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');

// $db->bind(':fname', 'John');
// $db->bind(':lname', 'Smith');
// $db->bind(':age', '24');
// $db->bind(':gender', 'male');
//
// $db->execute();
//
// echo $db->lastInsertId();

// $db->beginTransaction();
// $db->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');
//
// $db->bind(':fname', 'Jilly');
// $db->bind(':lname', 'Smith');
// $db->bind(':age', '25');
// $db->bind(':gender', 'female');
// $db->execute();
// echo $db->lastInsertId();
// $db->endTransaction();
// $db->query('SELECT FName, LName, Age, Gender FROM mytable WHERE FName = :fname');
// $db->bind(':fname', 'Jenny');
// $row = $db->single();

$db->query('select * from mytable');
$result = $db->resultset();
foreach ($result as $row){
echo "<pre>";
print_r($row);
echo "</pre>";
}
 ?>
