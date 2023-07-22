<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Polytech Actu</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">
 <script src="script.js"></script>
</head>
<body>
	<?php require_once 'inc/entete.php'; ?>
	<div id="contenu">
		<?php if (!empty($articles)): ?>
			<?php foreach ($articles as $article): ?>
				<div class="article">
					<h1><a href="index.php?action=article&id=<?= $article->id ?>"><?= $article->titre ?></a></h1>
					<p><?= substr($article->contenu, 0, 300) . '...' ?></p>
				</div>
			<?php endforeach ?>
		<?php else: ?>
			<div class="message">Aucun article trouvé</div>
		<?php endif ?>
	</div>
	<?php 
		require_once 'inc/menu.php'; 
	?>
</body>
</html>