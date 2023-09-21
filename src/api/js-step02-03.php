<?php



$data = [
    "id" => 13,
    "name" => "テスト小次郎",
];


header("Access-Control-Allow-Origin: *");
echo json_encode($data);