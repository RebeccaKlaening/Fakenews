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

		  <style>

		  .container {

		  }

		  </style>
    </head>



    <body>
		 <?php foreach($data as $item): ?>
		 		<div class="container">
					<h2><?php echo $item['title']; ?></h2>
						<p><?php echo $item['content']; ?></p>
						<p><?php echo $item['published date']; ?></p>

			<?php endforeach; ?>
			</div>

    </body>
</html>
