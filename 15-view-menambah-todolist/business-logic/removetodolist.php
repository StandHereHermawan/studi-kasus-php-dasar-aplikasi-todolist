<?php

/**
 * menghapus todo di List.
 */
function removeToDoList(int $number): bool
{
    global $todolist;

    switch ($number > sizeof($todolist)):
        case true:
            return false;
    endswitch;

    for ($i = $number; $i < sizeof($todolist); $i++) {
        $todolist[$i] = $todolist[$i + 1];
    }
    unset($todolist[sizeof($todolist)]);
    return true;
}
