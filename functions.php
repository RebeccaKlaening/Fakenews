<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
require __DIR__.'/data.php';

function sortByDate ($a, $b) {
	 return strtotime($a['publishedDate']) < strtotime($b['publishedDate']);
}
usort($data, 'sortByDate');
