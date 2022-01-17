<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>
    <style>
      
        .container{
            background-color:aqua;
            padding:2em;
            word-spacing:1em;
        }
    </style>
</head>
<body>
<h2>This Page displays all our users in the database.</h2>
<div class='container'>  


<?php

     foreach($results as $result){

       
        echo $result->id. ' ';
        echo $result->username. ' ';
        echo $result->password .'<hr><br>';
     }

?>




</div>
    
</body>
</html>