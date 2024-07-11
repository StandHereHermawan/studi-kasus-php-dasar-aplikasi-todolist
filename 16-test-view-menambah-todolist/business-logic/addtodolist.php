<?php

/**
 * Menambahkan todo ke List.
 */
function addToDoList(string $todo)
{
    global $todolist;
    # sizeof adalah function untuk mengambil ukuran array. 
    $indexAddedTodo = sizeof($todolist) + 1;
    $todolist[$indexAddedTodo] = $todo;
}
