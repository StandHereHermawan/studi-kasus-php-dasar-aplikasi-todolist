<?php

require_once "9-test-menambah-todolist/model-todo/todolist.php";
require_once "9-test-menambah-todolist/business-logic/addtodolist.php";

addToDoList("Belajar PHP Dulu");
addToDoList("Cek Ulang Database SQL MySQL");
addToDoList("Cek Ulang Docker");
addToDoList("Belajar Laravel");

var_dump($todolist);
