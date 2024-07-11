<?php

/**
 * Function untuk menerima input data dari console masuk user.
 * parameter bertujuan untuk memberi tahu user data apa yang diinput ke konsol terminal.
 */
function input(string $info): string
{
    echo "$info : ";
    # fgets(STDIN) adalah function untuk menerima data yang diketik dari konsol berbentuk string untuk dimasukan ke variable. 
    # user perlu menekan enter setelah memasukkan semua data string agar dapat disimpan dalam variable.
    $result = fgets(STDIN);
    return trim($result);
}
