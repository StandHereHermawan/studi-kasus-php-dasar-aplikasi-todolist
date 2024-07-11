<?php

require_once "16-test-view-menambah-todolist/view/viewAddToDoList.php";
require_once "16-test-view-menambah-todolist/business-logic/showtodolist.php";
require_once "16-test-view-menambah-todolist/business-logic/addtodolist.php";

addToDoList("Do 1");
addToDoList("Do 2");
addToDoList("Do 3");

viewAddToDoList();
showToDoList();

viewAddToDoList();
showToDoList();
