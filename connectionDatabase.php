<?php
$localhost="localhost";
$userName="bilal";
$passWord="bilal";
$dataBase="examconduction";

    $connect=new mysqli($localhost,$userName,$passWord,$dataBase);

    if($connect->connect_error)
    {
        echo ("Error in Connecting");
    }
