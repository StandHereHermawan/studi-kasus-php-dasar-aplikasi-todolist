<?php

require_once "14-test-view-menampilkan-todolist/view/viewShowToDoList.php";
require_once "14-test-view-menampilkan-todolist/business-logic/addtodolist.php";

addToDoList("Belajar A");
addToDoList("Belajar B");
addToDoList("Belajar C");
addToDoList("Belajar D");

viewShowAllToDoList();
