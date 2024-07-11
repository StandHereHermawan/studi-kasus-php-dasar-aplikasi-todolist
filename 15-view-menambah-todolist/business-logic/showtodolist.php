<?php

/**
 * Menampilkan todo di List.
 */
function showToDoList()
{
    global $todolist;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo " $number. $value" . PHP_EOL;
    }
}
