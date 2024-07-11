<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../business-logic/removetodolist.php";

function viewRemoveToDoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $toDoTerpilih = input("Masukkan nomor to do yang akan dihapus (x untuk membatalkan) ");

    switch ($toDoTerpilih):
        case "x":
            echo "Batal menghapus to do." . PHP_EOL;
            break;
        default:
            $toDoTerpilih = (int) $toDoTerpilih;
            $success = removeToDoList($toDoTerpilih);

            switch ($success):
                case true:
                    echo "Sukses menghapus to do nomor $toDoTerpilih." . PHP_EOL;
                    break;
                default:
                    echo "Gagal Menghapus to do nomor $toDoTerpilih." . PHP_EOL;
            endswitch;
    endswitch;
}
