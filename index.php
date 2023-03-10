<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>PHP-Hotels</title>

</head>

<body>
    <h1>
        Hotels
    </h1>
    <div class="row m-1 d-flex flex-wrap">
        <?php
        foreach ($hotels as $hotelsClass) {
            echo '<div class="card m-2" style="width: 18rem;" >';
            echo '<img src="..." class="card-img-top" alt="...">';
            foreach ($hotelsClass as $index => $hotel) {
                echo '<div class="card-body">';
                echo ' <p class="card-text">';
                echo $index . ':' . $hotel;
                echo '</p>';
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>









</body>

</html>