<?php
declare(strict_types=1);
// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [

	['id' => 1,
	'name' => ' J.K Rowland'
],

['id' => 2,
'name' => ' Stephen King'
],

['id' => 3,
'name' => ' John Ajvide Lindqvist'
],

['id' => 4,
'name' => ' J.R.R Tolkiens'
],

['id' => 5,
'name' => ' Sophie Kinsella'
],

];


$data = [
	[
		'author' => 1,
		'title' => ' Harry Potter Philosopher\'s Stone',
		'publishedDate' => '2018-08-09',
		'content' => file_get_contents(__DIR__.'/text/text01.txt'),
		'likeCounter' => 44




	],

	[
		'author' => 2,
		'title' => ' IT',
		'publishedDate' => '2018-04-11',
		'content' => file_get_contents(__DIR__.'/text/text02.txt'),
		'likeCounter' => 52


	],

	[
		'author' => 3,
		'title' => ' Låt den rätte komma in',
		'publishedDate' => '2018-05-23',
		'content' => file_get_contents(__DIR__.'/text/text03.txt'),
		'likeCounter' => 23


	],

	[
		'author' => 4,
		'title' => ' Lord of the Rings',
		'publishedDate' => '2018-02-15',
		'content' => file_get_contents(__DIR__.'/text/text04.txt'),
		'likeCounter' => 87


	],

	[
		'author' => 5,
		'title' => ' Confessions of a Shopaholic',
		'publishedDate' => '2017-12-17',
		'content' => file_get_contents(__DIR__.'/text/text05.txt'),
		'likeCounter' => 38


	],

	[
		'author' => 1,
		'title' => 'Harry Potter and the Chamber of Secrets',
		'publishedDate' => '2017-10-27',
		'content' => file_get_contents(__DIR__.'/text/text06.txt'),
		'likeCounter' => 44


	],

	[
		'author' => 2,
		'title' => 'The Shining',
		'publishedDate' => '2017-11-04',
		'content' => file_get_contents(__DIR__.'/text/text07.txt'),
		'likeCounter' => 52


	],

	[
		'author' => 3,
		'title' => 'Hanteringen av odöda',
		'publishedDate' => '2017-08-18',
		'content' => file_get_contents(__DIR__.'/text/text08.txt'),
		'likeCounter' => 23


	],

	[
		'author' => 4,
		'title' => 'The Two Towers',
		'publishedDate' => '2017-06-18',
		'content' => file_get_contents(__DIR__.'/text/text09.txt'),
		'likeCounter' => 67

	],

	[
		'author' => 5,
		'title' => 'Shopaholic Abroad ',
		'publishedDate' => '2017-05-19',
		'content' => file_get_contents(__DIR__.'/text/text10.txt'),
		'likeCounter' => 38

	]
];
