<?php

require __DIR__."/../vendor/autoload.php";

Toro::serve(array(
    "/" => "\Controller\Home",
    "/post/:number" => "Controller\Post",
    "/123" => "Controller\Post"
));