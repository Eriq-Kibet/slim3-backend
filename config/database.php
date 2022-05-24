<?php

$database_config =[
    "driver"=>"mysql",
    "host"=>"127.0.0.1",
    "database"=>"octagon",
    "username"=>"cire",
    "password"=>"MKUe1d@1CT",
    "charset"=>"utf8",
    "collation"=>"utf8_unicode_ci",
    "prefix"=>""
];

$capsule =new  \Illuminate\Database\Capsule\Manager;

$capsule->addConnection($database_config);

$capsule->setAsGlobal();

$capsule->bootEloquent();

return $capsule;