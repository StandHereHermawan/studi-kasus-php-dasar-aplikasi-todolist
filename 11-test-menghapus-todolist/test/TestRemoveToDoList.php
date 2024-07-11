<?php

require_once "11-test-menghapus-todolist/model/todolist.php";
require_once "11-test-menghapus-todolist/business-logic/showtodolist.php";
require_once "11-test-menghapus-todolist/business-logic/addtodolist.php";
require_once "11-test-menghapus-todolist/business-logic/removetodolist.php";

addToDoList("Maen WT");
addToDoList("Maen Automation");
addToDoList("Maen Free Nuds");

showToDoList();

$firstAttempt = removeToDoList(3);
var_dump($firstAttempt);
showToDoList();

$secondAttempt = removeToDoList(2);
var_dump($secondAttempt);
showToDoList();

$thirdAttempt = removeToDoList(3);
var_dump($thirdAttempt);
showToDoList();
