<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['changePassword'])) {

    $OldPassOk = User::checkOldPass($_POST["id"], $_POST["oldPass"]);

    if ($_POST["newPass"] === $_POST["confPass"]) {
        if ($OldPassOk) {
            $result = User::changePassword($_POST["id"], $_POST["newPass"]);
            if ($result == 'TRUE') {
                header('location: log-out.php');
                exit();
            } else {
                header('location: ../change-password.php?id=' . $_POST["id"] . '&&message=1');
                exit();
            }
        } else {
            header('location: ../change-password.php?id=' . $_POST["id"] . '&&message=2');
            exit();
        }
    } else {
        header('location: ../change-password.php?id=' . $_POST["id"] . '&&message=3');
        exit();
    }
}
