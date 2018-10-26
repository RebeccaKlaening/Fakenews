<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT

// a function to sort the articles after published date.
function sortByDate ($a, $b) {
	 return strtotime($a['publishedDate']) < strtotime($b['publishedDate']);
}
usort($data, 'sortByDate');



// a function to search for the authors name .
function getName(int $searchId, array $authors): string {
		foreach ($authors as $author) {
				$id = $author ['id'];
					if ($id == $searchId) {
						return $author ['name'];
					}
		}

};
