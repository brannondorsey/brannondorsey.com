<?php 
	$projects = $pages->find('work')->children()->visible();
	if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
	<div class="pagination">  

	  <?php if($page->hasNextVisible()): ?>
	  <a class="next" href="<?php echo $page->nextVisible()->url() ?>"> next &rsaquo;</a>
	  <?php endif ?>

	  <?php if($page->hasPrevVisible()): ?>
	  <a class="prev" href="<?php echo (strtolower(($page->prevVisible()->title)) == "work") ? url("home") : $page->prevVisible()->url() ?>">&lsaquo; previous</a>
	  <?php endif ?>

	</div>
	<?php endif ?>