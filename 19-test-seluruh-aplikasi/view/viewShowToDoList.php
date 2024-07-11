<?php

echo __DIR__ . PHP_EOL;

require_once __DIR__ . "/../model-todo/todolist.php";
require_once __DIR__ . "/../business-logic/showtodolist.php";
require_once __DIR__ . "/viewAddToDoList.php";
require_once __DIR__ . "/viewRemoveToDoList.php";
require_once __DIR__ . "/../helper/input.php";

function viewShowAllToDoList()
{
    $appRunning = true;
    while ($appRunning) {
        showToDoList();

        echo "MENU APLIKASI" . PHP_EOL;
        echo "1. Tambah To Do" . PHP_EOL;
        echo "2. Hapus To Do" . PHP_EOL;
        echo "X. Keluar APLIKASI" . PHP_EOL;

        $menuDipilih = input("Pilih");

        switch ($menuDipilih):
            case "1":
                viewAddToDoList();
                break;
            case "2":
                viewRemoveToDoList();
                break;
            case "X":
            case "x":
                $appRunning = false;
                break;
            default:
                echo "Pilihan Anda tidak tersedia dalam menu." . PHP_EOL . PHP_EOL;
        endswitch;
    }

    echo "Terima kasih telah menggunakan aplikasi to do list kami." . PHP_EOL;
}
