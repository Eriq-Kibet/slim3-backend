<?php

return function($container)
{
    $container["UserEntryController"] = function()
    {
        return new \App\Controller\UserEntryController;
    };
};