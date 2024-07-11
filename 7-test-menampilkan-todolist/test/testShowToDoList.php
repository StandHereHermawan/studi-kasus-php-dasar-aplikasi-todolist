<?php

require_once "7-test-menampilkan-todolist/model-todo/todolist.php";
require_once "7-test-menampilkan-todolist/business-logic/showtodolist.php";

$index = 1;
$todolist[$index] = "Belajar PHP Dasar";
++$index;

$todolist[$index] = "Belajar PHP OOP";
++$index;

$todolist[$index] = "Belajar PHP Database";
++$index;

$todolist[$index] = "Belajar PHP Composer";
++$index;

$todolist[$index] = "Belajar PHP Unit Test";
++$index;

showToDoList();
