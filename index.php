<?php
declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';


// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Fake News</title>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>
	<!--- navbar --->
	<nav>
		<ul>
			<li> <a href="">Home</a></li>
			<li> <a href="">About</a></li>
			<li><a href="">Contact</a></li>
		</ul>
	</nav>

	<header class="header">
		Fake News
	</header>

	<?php foreach($data as $item): ?>
		<!--- to print out the authors name from my function--->
		<?php $authorName = getName($item['author'],$authors); ?>
		<div class="container">


			<div class="box">

				<h1 class="name"> <?php echo $authorName;?> </h1>


				<h2 class="title"><?php echo "$item[title]"; ?> </h2>


				<p class="content"><?php echo "$item[content] <br><br>";?> </p>

				<p class="likeCounter">
					<b>	<?php echo 'Likes: '  . $item['likeCounter']; ?> </b> </p>

					<p class="publishedDate">
						<b>	<?php echo 'Published: ' . $item['publishedDate']; ?> </b>  </p>
					</div>


				</div>


			<?php endforeach; ?>


		</body>
		</html>
