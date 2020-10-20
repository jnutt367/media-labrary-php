<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Jason's Media Library</a></h1>

			<ul class="nav">
                <li class="books<?php if ($section == "books") { echo " on";} ?>"><a href="catalog.php?cat=books">Read</a></li>
                <li class="movies<?php if ($section == "movies") { echo " on";} ?>"><a href="catalog.php?cat=movies">Watch</a></li>
                <li class="music<?php if ($section == "music") { echo " on";} ?>"><a href="catalog.php?cat=music">Listen</a></li>
                <li class="suggest<?php if ($section == "suggest") { echo " on";} ?>"><a href="suggest.php">Suggestions</a></li>
            </ul>

		</div>

	</div>

	<div id="content">