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


		  body {
		  height: 100vh;
	    widows: 100vw;
		 margin: 30px;
		 background-color: white;

	 	}

		.header {
			display: flex;
		 justify-content: center;
		 flex-direction: row;
		 font-size: 40px;
		 font-family: bold;
		 text-transform:uppercase;
		}

		  .container {
			display: flex;
			flex-wrap: wrap;
			justify-content: left;
			align-items: center;
			flex-direction: column;
			padding-top: 40px;
			margin: auto;


		  }

		  .box {
			flex-direction: column;
			text-align: center;
			background-color: black;
			border-radius: 90px;
			width: 700px;
			height: 300px;
			margin-bottom: 40px;
			padding: 40px;
		  }

		  .content {
			  text-align: left;

			  color: #98FB98;
		  }

		  .title {
		  	color: #98FB98;
		  }

		  .name {
			color: #98FB98;
		  }

		  .publishedDate {
		  	display: flex;
			flex-direction: column;
			justify-content: flex-start;
			align-items: baseline;

			color: #98FB98;

		  }

		  .likeCounter {
		  	display:flex;
			justify-content: flex-end;
		  	color: #98FB98;
		  }




		  </style>

    </head>



    <body>
		 <header class="header">
		 	Fake News
		 </header>

		 <?php foreach($data as $item): ?>

		 		<div class="container">
						<?php foreach ($authors as $author):?>
					<div class="box">
						<h1 class="name"> <?php echo $author['name'];?> </h1>
							<h2 class="title"><?php echo $item['title']; ?> </h2>

									<p class="content"><?php echo "$item[content] <br><br>";?> </p>

											<p class="publishedDate"><b>Published date: </b>
												<?php echo "$item[publishedDate]"; ?> </p>
												<p class="likeCounter"><b>Like Counter:  </b>
													<?php echo "$item[likeCounter]"; ?> </p>

											</div>

			<?php endforeach; ?>
		<?php endforeach; ?>
			</div>

    </body>
</html>
