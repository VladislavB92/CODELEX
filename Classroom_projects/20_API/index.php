<?php



$response = file_get_contents("https://api.agify.io//?name=" .  $_GET['name'] ?? ' ');

$decodedResponse = json_decode($response);


var_dump($decodedResponse);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/" method="get">

        <label for="name">Name:</label>

        <input type="text" id="name" name="name">

        <button type="submit">submit</button>


    </form>


</body>

</html>