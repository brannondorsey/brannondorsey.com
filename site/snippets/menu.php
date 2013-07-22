<div class="header">
	<nav class="navbar">
	  <a href="http://brannondorsey.com" class="title"><?php echo strtoupper($site->title())?></a>
	  <ul>
	    <?php foreach($pages->visible() AS $p): ?>
	    <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo (strtolower(($p->title)) == "work") ? url("home") : $p->url(); ?>"><?php echo html($p->title()) ?></a></li>
	    <?php endforeach ?>
	  </ul>
	</nav>
</div>