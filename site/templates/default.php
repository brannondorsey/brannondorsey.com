<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="container">
	<div class="project">
		<span class="title"><?php echo $page->title(); echo ($page->isChildOf($pages->find('work'))) ? " | " . $page->year() : ""; ?></span>
		<span class="media"><?php echo $page->media() ?></span>
		<?php echo kirbytext($page->text());?>
	</div>
	<?php snippet('pagination') ?>
</div>
<?php snippet('footer') ?>