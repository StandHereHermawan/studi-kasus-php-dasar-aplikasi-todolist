<?php

// echo __DIR__ . PHP_EOL;
// echo "Aplikasi ToDoList" . PHP_EOL;

require_once __DIR__ . "/model-todo/todolist.php";
require_once __DIR__ . "/business-logic/showtodolist.php";
require_once __DIR__ . "/business-logic/addtodolist.php";
require_once __DIR__ . "/business-logic/removetodolist.php";
require_once __DIR__ . "/view/viewShowToDoList.php";
require_once __DIR__ . "/view/viewAddToDoList.php";
require_once __DIR__ . "/view/viewRemoveToDoList.php";

viewShowAllToDoList();
