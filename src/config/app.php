<?php declare(strict_types= 1);

return [
    "host"=> $_ENV["DB_HOST"],
    "connection"=> $_ENV["DB_CONNECTION"],
    "port"=> $_ENV["DB_PORT"],
    "dbname"=> $_ENV["DB_NAME"],
    "username"=> $_ENV["DB_USERNAME"],
    "password"=> $_ENV["DB_PASSWORD"],
];
