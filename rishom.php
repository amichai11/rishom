
<?php

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $is_here = $_POST["is_here"];
    $guest = $_POST["guest"];
    $shabat = $_POST["shabat"];
    $first_name = normolize_input_text($first_name);
    $last_name = normolize_input_text($last_name);
    $is_here = normolize_input($is_here);
    $guest = normolize_input($guest);
    $shabat = normolize_input_text($shabat);


    echo "first name: ".$first_name."<br>";
    echo "last name: ".$last_name."<br>";
    echo "is here: ".$is_here."<br>";
    echo "guest: ".$guest."<br>";
    echo "shabat: ".$shabat."<br>";

    $our_parasha = "bereshit"; //TODO: make array with all of the prashot  and make logic

    $host = "localhost";
    $user = "test1";
    $pass = "test1";
    $dbname = "rishom";


    //TODO: turn into function. and make function to display the data with options
    if(isset($first_name, $last_name, $shabat))
    {
        try{
            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected successfully";

            $data = array('first_name' => $first_name, 'last_name' => $last_name, 'is_here' => $is_here, 'guest' => $guest, 'shabat' => $shabat);

            $cursor = $db -> prepare("INSERT INTO names(first_name, last_name, is_here, guest, shabat) value(:first_name, :last_name, :is_here, :guest, :shabat)");

            $cursor -> execute($data);

            $cursor = $db -> query("SELECT DISTINCT COUNT(id) FROM names WHERE shabat='bereshit' AND is_here=1");

            $row_count = $cursor -> fetch();

            echo "<br>row count = ".$row_count[0];

            $db = null;
        }
        catch(PDOException $e){
            echo "<br>Error: ".$e -> getMessage();
        }
    }


    function normolize_input($post_input){

        if($post_input == "1"){
            $post_input = 1;
        }
        else{
            $post_input = 0;
        }
        return $post_input;
    }
    function normolize_input_text($post_input){

        if($post_input == ""){
            $post_input = null;
        }
        return $post_input;
    }

?>

<br>
<a href="./">go back</a>
