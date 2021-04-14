<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Glenn Sorrentino">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>🛠 Builder - Simple Design System</title>
	<link rel="stylesheet" href="https://glenn-sorrentino.github.io/design-system/css/style.css">

	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://glenn-sorrentino.github.io/design-system/builder/js/builder.js"></script>
	<script src="https://glenn-sorrentino.github.io/design-system/js/main.js"></script>
</head>

<body id="builder">

	<section class="canvas">


		<!-- NOTIFICATIONS -->

		<?php include "components/notification/html/notification.html" ?>

		<!-- BODY -->

		<?php include "components/templates/html/instructions.php" ?>
		<?php include "components/templates/html/home-template.php" ?>
		<?php include "components/templates/html/secondary-template.php" ?>
		<?php include "components/templates/html/article-template.php" ?>
		<?php include "components/templates/html/table-template.php" ?>

		<!-- FOOTER -->

		<?php include "components/footer/html/footer.html" ?>

	</section> <!-- END CANVAS -->

	<!-- FILTERS -->

	<aside>

		<?php include "components/filters/html/filters.html" ?>

	</aside>

</body>

</html>
