<?php

    // require MySQL Connection
    require ('database/DBController.php');

    // require City Class
    require ('database/City.php');

    // DBController Object
    $db = new DBController();

    // City Object
    $city = new City($db);
