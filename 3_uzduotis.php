<?php
/*
 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
 Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
 Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
*/

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function exercises3(array $holidaysList){
	
    for ($i = 0; $i < count($holidaysList); $i++) {
    	if($holidaysList[$i]['price'] !==null) {
        	$destination = $holidaysList[$i]['destination'];
        	$titles = $holidaysList[$i]['title'];
        	$total = $holidaysList[$i]['price'] * $holidaysList[$i]['tourists'];
    		for ($ii = 0; $ii < count($holidaysList); $ii++) {
        		if($i !== $ii && $holidaysList[$i]['destination'] === $holidaysList[$ii]['destination'] && $holidaysList[$ii]['price'] !== null){
                        $titles = $titles . ', ' . $holidaysList[$ii]['title'];
                        $total = $total + $holidaysList[$ii]['price'] * $holidaysList[$ii]['tourists'];
                        $holidaysList[$ii]['price'] = null;
        		}
        	}
           	echo nl2br("Destination: $destination.\nTitles: $titles.\nTotal: $total.\n\n");
        }
    }
}
exercises3($holidays);