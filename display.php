<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
    <title>גבאים</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

        <h1> עמוד גבאים </h1>

    </body>
</html>

<?php

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    if (isset($first_name, $last_name))
    {
        echo "ברוך הבא ".$first_name." ".$last_name."<br/>";
        echo "מה תרצה לעשות? <br/>";
    }
        



?>