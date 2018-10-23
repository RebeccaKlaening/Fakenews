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
    'publishedDate' => '1997-05-25',
    'content' => require __DIR__.'/text.php/text01.php',
    'likeCounter' => 44

  ],

  [
    'author' => 2,
    'title' => ' IT',
    'publishedDate' => '1986-10-31',
    'content' => require __DIR__.'/text.php/text02.php',
    'likeCounter' => 52
  ],

  [
    'author' => 3,
    'title' => ' Låt den rätte komma in',
    'publishedDate' => '2004-09-10',
    'content' => require __DIR__.'/text.php/text03.php',
    'likeCounter' => 23
  ],

  [
    'author' => 4,
    'title' => ' Lord of the Rings',
    'publishedDate' => '1954-06-02',
    'content' => require __DIR__.'/text.php/text04.php',
	 'likeCounter' => 87
  ],

  [
    'author' => 5,
    'title' => ' Confessions of a Shopaholic',
    'publishedDate' => '2001-02-14',
    'content' => require __DIR__.'/text.php/text05.php',
    'likeCounter' => 38
  ],

  [
    'author' => 1,
    'title' => 'Harry Potter and the Chamber of Secrets',
    'publishedDate' => '2002-08-14',
    'content' => require __DIR__.'/text.php/text06.php',
    'likeCounter' => 44

  ],

  [
    'author' => 2,
    'title' => 'The Shining',
    'publishedDate' => '2006-09-21',
    'content' => require __DIR__.'/text.php/text07.php',
    'likeCounter' => 52
  ],

  [
    'author' => 3,
    'title' => 'Hanteringen av odöda',
    'publishedDate' => '2010-05-24',
    'content' => require __DIR__.'/text.php/text08.php',
    'likeCounter' => 23
  ],

  [
    'author' => 4,
    'title' => 'The Two Towers',
    'publishedDate' => '2009-06-07',
    'content' => require __DIR__.'/text.php/text09.php',
    'likeCounter' => 67
  ],

  [
    'author' => 5,
    'title' => 'Shopaholic Abroad ',
    'publishedDate' => '1989-04-11',
    'content' => require __DIR__.'/text.php/text10.php',
    'likeCounter' => 38
  ],

  ];
