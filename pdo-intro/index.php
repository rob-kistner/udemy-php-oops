<?php

$host = 'localhost';
$user = 'root';
$pw = 'root';
$dbname = 'traversymvc';

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

  // pdo instance
$pdo = new PDO($dsn, $user, $pw);
  // set default fetch mode as object
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// $status = 'admin';
// $sql = 'SELECT * FROM users WHERE status = :status';
// $stmt = $pdo->prepare($sql);

// // named parameter passed
// $stmt->execute(['status' => $status]);
// $users = $stmt->fetchAll();

// foreach($users as $user) {
//   echo $user->name . '<br>';
// }

// INSERT
$name = 'Karen Williams';
$email = 'kwills@gmail.com';
$status = 'guest';

$sql = 'INSERT INTO users(name, email, status) VALUES(:name, :email, :status)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => $name, 'email' => $email, 'status' => $status]);
echo 'Added user';