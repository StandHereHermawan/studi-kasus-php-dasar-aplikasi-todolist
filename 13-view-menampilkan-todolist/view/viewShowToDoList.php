<?php

require_once "13-view-menampilkan-todolist/model-todo/todolist.php";
require_once "13-view-menampilkan-todolist/business-logic/showtodolist.php";
require_once "13-view-menampilkan-todolist/business-logic/addtodolist.php";
require_once "13-view-menampilkan-todolist/business-logic/removetodolist.php";
require_once "13-view-menampilkan-todolist/helper/input.php";

function viewShowAllToDoList()
{
    while ($appRunning = true) {
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
                $appRunning = false;
                break;
            default:
                echo "Pilihan Anda tidak tersedia dalam menu." . PHP_EOL;
        endswitch;
    }

    echo "Terima kasih telah menggunakan aplikasi to do list kami." . PHP_EOL;
}
