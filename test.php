<?php 

$carBrand1 = 'Audi';
// $carBrand2 = 'VW';
// $carBrand3 = 'Skoda';
// $carBrand4 = 'Lada';
// $carBrand5 = 'Hundai';
// $carBrand6 = 'Ferrari';

$carBrands = [
		// 'ключ' => 'значение',
		'Audi' => 'Q7', 
		'VW' => 'Polo', 
		'Skoda' => 'Octavia', 
		'Lada' => 'Vesta', 
		'Hundai' => 'Solaris', 
		'Ferrari' => 'F355 Spider'
	];

// echo $carBrand1;
// echo $carBrands;

print_r($carBrands);
echo '<br><br><br>';

// echo $carBrands['Lada'];

echo '<ul>';
foreach( $carBrands as $item ){
	echo '<li>';
	echo $item;
	echo '</li>';
}
echo '</ul>';






?>