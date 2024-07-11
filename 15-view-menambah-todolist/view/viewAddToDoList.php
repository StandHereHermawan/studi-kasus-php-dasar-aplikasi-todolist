<?php

require_once "15-view-menambah-todolist/model-todo/todolist.php";
require_once "15-view-menambah-todolist/helper/input.php";
require_once "15-view-menambah-todolist/business-logic/addtodolist.php";

function viewAddToDoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Menambah To Do (x untuk batal menambahkan to do) : ");

    switch ($todo):
        case "x":
            break;
        default:
            addToDoList($todo);
            break;
    endswitch;
}
