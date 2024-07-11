<?php

require_once __DIR__ . "/../model-todo/todolist.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../business-logic/addtodolist.php";

function viewAddToDoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Menambah To Do (x untuk batal menambahkan to do) ");

    switch ($todo):
        case "x":
            echo "Batal menambahkan to do." . PHP_EOL;
            break;
        default:
            addToDoList($todo);
            break;
    endswitch;
}
