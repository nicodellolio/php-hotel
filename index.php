<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => 'yes',
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => 'yes',
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => 'no',
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => 'no',
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => 'yes',
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$hotels[0]['description'] = "Experience luxury at Hotel Belvedere, featuring elegant rooms, gourmet dining, and exceptional service.";
$hotels[1]['description'] = "The Hotel Futuro offers cozy accommodations, breathtaking scenery, and warm hospitality.";
$hotels[2]['description'] = "Discover comfort and convenience at Hotel Rivamare, complete with modern amenities and stunning views.";
$hotels[3]['description'] = "Escape to the tranquil Hotel Bellavista, offering serene spaces and personalized experiences.";
$hotels[4]['description'] = "The Hotel Milano provides a unique blend of style, comfort, and unforgettable city views.";


// var_dump($hotels)


// foreach ($hotels as $hotel) {
//     foreach ($hotel as $key => $hotel_data) {
//         echo $key . ": " . $hotel_data . '<br>';
//     }
// }

?>


<!doctype html>
<html lang="en">

<head>
    <title>PHP Hotels</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <main>


        <div class="m-3 rounded">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Hotel Name</th>
                        <th scope="col"></th>
                        <th scope="col">Description</th>
                        <th scope="col"></th>
                        <th scope="col">Parking</th>
                        <th scope="col"></th>
                        <th scope="col">Vote</th>
                        <th scope="col"></th>
                        <th scope="col">Distance from center</th>
                    </tr>
                </thead>
                <tbody class="">

                    <?php
                    foreach ($hotels as $key => $hotel) {
                        echo "<tr>";

                        foreach ($hotel as $key => $hotel_data) {
                            if (!empty($hotel_data)) {
                                echo "<td>" . $hotel_data . "<td>";
                                if ($key == 'parking' && $hotel['parking'] == true) {
                                    "<td> yes <td>";
                                }
                                elseif ($key == 'parking' && $hotel['parking'] == false) {
                                    "<td> no <td>";
                                }
                                
                            }
                        }
                        echo '</tr>';
                    }
                    ?>

                </tbody>
            </table>
        </div>

    </main>

</body>

</html>