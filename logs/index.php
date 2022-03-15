<?php

try {
    $logFilename = __DIR__ . '/logs/log.log';
    $post = file_get_contents('php://input');
    $data = json_decode($post);
    # log format serviceId;correlationId;level;date;request;userId
    $userId = isset($data->userId) ? $data->userId : null;
    $serviceId = isset($data->serviceId) ? $data->serviceId : null;
    $correlationId = isset($data->correlationId) ? $data->correlationId : null;
    $level = isset($data->level) ? $data->level : 'INFO';
    $date = Date('Y-m-d\TH:i:s');
    $message = isset($data->message) ? $data->message : null;

    file_put_contents($logFilename, "$correlationId;$level;$date;$serviceId;$message;$userId\n", FILE_APPEND);
    http_response_code(200);
} catch (Exception $e) {
    http_response_code(400);
}
