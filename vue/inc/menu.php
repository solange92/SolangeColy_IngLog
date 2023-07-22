<style>
.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<div id="menu" class="vertical-menu" width="20%">
	
	<h2 <ul>CATEGORIES</h1><hr width="20%"> </h2>
		<li><a href="index.php"  >MENU</a></li> 
		<?php foreach ($categories as $categorie): ?>
			<li><a href="index.php?action=categorie&id=<?= $categorie->id ?>"><?= $categorie->libelle ?></a></li>
		<?php endforeach ?>
	</ul>
	

</div>