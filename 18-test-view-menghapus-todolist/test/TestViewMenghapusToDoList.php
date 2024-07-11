<?php

require_once "18-test-view-menghapus-todolist/model-todo/todolist.php";
require_once "18-test-view-menghapus-todolist/view/viewRemoveToDoList.php";
require_once "18-test-view-menghapus-todolist/business-logic/addtodolist.php";
require_once "18-test-view-menghapus-todolist/business-logic/showtodolist.php";

$index = 1;

while ($index <= 6) {
    addToDoList("Do $index");
    ++$index;
}

showToDoList();
viewRemoveToDoList();
showToDoList();
