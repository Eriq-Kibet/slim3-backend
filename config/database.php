<?php
 $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."./../../crud-slim"); 
 $dotenv->load();

$database_config =[
   
    "driver"=>"mysql",
    "host"=>"$_ENV['HOST']",
    "database"=>"$_ENV['DB_NAME']",
    "username"=>"$_ENV['USER_NAME']",
    "password"=>"$_ENV['PASSWORD']",
    "charset"=>"utf8",
    "collation"=>"utf8_unicode_ci",
    "prefix"=>""
];

$capsule =new  \Illuminate\Database\Capsule\Manager;

$capsule->addConnection($database_config);

$capsule->setAsGlobal();

$capsule->bootEloquent();

return $capsule;