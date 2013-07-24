<?php snippet('header'); ?>
<?php snippet('menu'); ?>
<div class="container">
	<div class="project">
		<span class="title"><?php echo $page->title(); echo ($page->isChildOf($pages->find('work'))) ? " | " . $page->year() : ""; ?></span>
		<span class="media"><?php echo $page->media() ?></span>
		<?php if(strtolower($page->title) == "resume") echo "<div class='resume'>" ; ?>
		<?php echo kirbytext($page->text());?>
		<?php if(strtolower($page->title) == "resume") echo "</div>" ; ?>
	</div>
	<?php snippet('pagination') ?>
</div>
<?php snippet('footer') ?>