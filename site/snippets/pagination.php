<?php 
	if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
	<div class="pagination">  

	<?php if(strtolower($page->title) == "about" ||
	strtolower($page->title) == "resume") { ?>
	  <?php if($page->hasNextVisible()){ ?>
		  <a class="next" href="<?php echo $page->nextVisible()->url() ?>">next &rsaquo;</a>
		  <?php } ?>

		  <?php if($page->hasPrevVisible()){ ?>
		  <a class="prev" href="<?php echo (strtolower(($page->prevVisible()->title)) == "work") ? url("home") : $page->prevVisible()->url() ?>">&lsaquo; previous</a>
		  <?php } ?>
		<?php }else {?>
		  <?php if($page->hasPrevVisible()){ ?>
		  <a class="next" href="<?php echo $page->prevVisible()->url() ?>">next &rsaquo;</a>
		  <?php } ?>

		  <?php if($page->hasNextVisible()){ ?>
		  <a class="prev" href="<?php echo $page->nextVisible()->url() ?>">&lsaquo; previous</a>
		  <?php }
		}?>

	</div>
	<?php endif ?>