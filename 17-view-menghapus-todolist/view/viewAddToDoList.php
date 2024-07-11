<?php

require_once "16-test-view-menambah-todolist/model-todo/todolist.php";
require_once "16-test-view-menambah-todolist/helper/input.php";
require_once "16-test-view-menambah-todolist/business-logic/addtodolist.php";

function viewAddToDoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Menambah To Do (x untuk batal menambahkan to do) ");

    switch ($todo):
        case "x":
            echo "Batal menambahkan to do.". PHP_EOL;
            break;
        default:
            addToDoList($todo);
            break;
    endswitch;
}
