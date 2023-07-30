<?php
require_once 'database.php';

$menfess = [
    'insert' => function ($to, $from, $message) {
        $db = dbConnect();
        $result = $db->query("INSERT INTO menfess (`_to`, `_from`, `message`) VALUES ('$to', '$from', '$message')");
        $db->close();
        return $result ? true : false;
    },
    'get' => function () {
        $db = dbConnect();
        $data = [];
        $result = $db->query('SELECT * FROM menfess');

        while ($row = $result->fetch_assoc()) {
            array_push($data, ['id' => $row['id'], 'to' => $row['_to'], 'from' => $row['_from'], 'message' => $row['message'], 'status' => $row['status']]);
        }

        return $data;
    },
];

$menfess_song = [
    'insert' => function ($to, $from, $judul, $menit_ke, $message) {
        $db = dbConnect();
        $result = $db->query("INSERT INTO menfess_song (`_to`, `_from`, `judul`, `menit_ke`, `message`) VALUES ('$to', '$from', '$judul', '$menit_ke', '$message')");
        $db->close();
        return $result ? true : false;
    },
    'get' => function () {
        $db = dbConnect();
        $data = [];
        $result = $db->query('SELECT * FROM menfess_song');

        while ($row = $result->fetch_assoc()) {
            array_push($data, ['id' => $row['id'], 'to' => $row['_to'], 'from' => $row['_from'], 'judul' => $row['judul'], 'menit_ke' => $row['menit_ke'],'message' => $row['message'], 'status' => $row['status']]);
        }

        return $data;
    },
];

$quotes = [
    'insert' => function ($from, $message) {
        $db = dbConnect();
        $result = $db->query("INSERT INTO quotes (`_from`, `message`) VALUES ('$from', '$message')");
        $db->close();
        return $result ? true : false;
    },
    'get' => function () {
        $db = dbConnect();
        $data = [];
        $result = $db->query('SELECT * FROM quotes');

        while ($row = $result->fetch_assoc()) {
            array_push($data, ['id' => $row['id'], 'from' => $row['_from'], 'message' => $row['message'], 'status' => $row['status']]);
        }

        return $data;
    },
];

$cerita = [
    'insert' => function ($from, $message) {
        $db = dbConnect();
        $result = $db->query("INSERT INTO cerita (`_from`, `message`) VALUES ('$from', '$message')");
        $db->close();
        return $result ? true : false;
    },
    'get' => function () {
        $db = dbConnect();
        $data = [];
        $result = $db->query('SELECT * FROM cerita');

        while ($row = $result->fetch_assoc()) {
            array_push($data, ['id' => $row['id'], 'from' => $row['_from'], 'message' => $row['message'], 'status' => $row['status']]);
        }

        return $data;
    },
];

$lainnya = [
    'insert' => function ($to, $from, $message) {
        $db = dbConnect();
        $result = $db->query("INSERT INTO lainnya (`_to`, `_from`, `message`) VALUES ('$to', '$from', '$message')");
        $db->close();
        return $result ? true : false;
    },
    'get' => function () {
        $db = dbConnect();
        $data = [];
        $result = $db->query('SELECT * FROM lainnya');

        while ($row = $result->fetch_assoc()) {
            array_push($data, ['id' => $row['id'], 'to' => $row['_to'], 'from' => $row['_from'], 'message' => $row['message'], 'status' => $row['status']]);
        }

        return $data;
    },
];
