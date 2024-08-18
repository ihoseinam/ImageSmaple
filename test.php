<?php
header('Content-Type: application/json');

$response = [
    'status' => 'success',
    'message' => 'This is a simple JSON response.',
];

echo json_encode($response);
