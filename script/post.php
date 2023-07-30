<?php
require 'table.php';
require 'auth.php';

$post = [
    'login' => function () {
        login($_REQUEST['username'], $_REQUEST['password']);
        header("Location: ../admin/index.php");
    },
    'change_status' => function() {
        dbConnect()->query("UPDATE {$_REQUEST['table']} SET status = 1 WHERE id = {$_REQUEST['id']}");
    },
    'menfess' => function () {
        return $GLOBALS['menfess']['insert']($_REQUEST['to'], $_REQUEST['from'], $_REQUEST['message']) ? 'true' : 'false';
    },
    'menfess_song' => function () {
        return $GLOBALS['menfess_song']['insert']($_REQUEST['to'], $_REQUEST['from'], $_REQUEST['judul'], $_REQUEST['menit_ke'], $_REQUEST['message']) ? 'true' : 'false';
    },
    'quotes' => function () {
        return $GLOBALS['quotes']['insert']($_REQUEST['from'], $_REQUEST['message']) ? 'true' : 'false';
    },
    'cerita' => function () {
        return $GLOBALS['cerita']['insert']($_REQUEST['from'], $_REQUEST['message']) ? 'true' : 'false';
    },
    'lainnya' => function () {
        return $GLOBALS['lainnya']['insert']($_REQUEST['to'], $_REQUEST['from'], $_REQUEST['message']) ? 'true' : 'false';
    },
];

echo $post[$_REQUEST['type']]();
