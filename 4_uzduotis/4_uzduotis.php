<?php
/*
4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
*/

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

function printDetails($holidaysDetails){
        $filename = "4uzduotis_failas.txt";
        $file = fopen($filename, "a+") or die("Can not open the file");
        fwrite($file, $holidaysDetails . PHP_EOL);
}

function exercises4(array $holidaysList){
    $holidaysDetails = '';
    for ($i = 0; $i < count($holidaysList); $i++) {
    	if($holidaysList[$i]['price'] !== null) {
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
            $holidaysDetails = $holidaysDetails . nl2br("Destination: $destination.\nTitles: $titles.\nTotal: $total.\n\n");
        }
    }
    printDetails($holidaysDetails);
}

exercises4($holidays);