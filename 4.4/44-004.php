<?php
  header('Content-Type: text/html; charset=UTF-8');
  $author = $_GET['author'];
  try {
    $opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                 PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
                 PDO::ATTR_EMULATE_PREPARES => false);
//    if (defined('PDO::MYSQL_ATTR_MULTI_STATEMENTS')) {
//      $opt[PDO::MYSQL_ATTR_MULTI_STATEMENTS] = false;
//    }

    $db = new PDO("mysql:host=127.0.0.1;dbname=wasbook;charset=utf8", "wasbook", "wasbook", $opt);
    $sql = "SELECT * FROM books WHERE author = ? ORDER BY id";
    $ps = $db->prepare($sql);
    $ps->bindValue(1, $author, PDO::PARAM_STR);
    //表示の部分は同じなので省略

