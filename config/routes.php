<?php

$app->post("/signup", "UserEntryController:createUser");

$app->get("/users", "UserEntryController:viewUsers");

$app->get("/users/{id}", "UserEntryController:viewsingleUser");

$app->group("/auth", function()use($app){
    $app->post("/login", "AuthController:Login");
    $app->post("/register", "AuthController:Register");

});