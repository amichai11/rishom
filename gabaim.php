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

        <div class="container mt-3">
        <h2>כנסית גבאים</h2>
        <form action="./gabaim.php" method="post">
            <div class="mb-3 mt-3">
            <label for="email">שם פרטי:</label>
            <input type="text" class="form-control" id="first_name" placeholder="שם פרטי" name="first_name">
            </div>
            <div class="mb-3">
            <label for="pwd">שם משפחה:</label>
            <input type="text" class="form-control" id="last_name" placeholder="שם משפחה" name="last_name">
            </div>
            <button type="submit" class="btn btn-primary">אישור</button>
        </form>
        </div>

    </body>
</html>

<?php

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    
    if(isset($first_name, $last_name))
    {
        try 
        {
            echo "aaa";

        } 
        catch (PDOException $e) 
        {
            echo "<br>Error: ".$e -> getMessage();
        }
    }
    



?>


