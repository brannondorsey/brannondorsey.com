<?php snippet('header') ?>
<script type="text/javascript">
$('document').ready(function(){
	$('div.project-thumbnail').hover(function(){
		$(this).find('#title').toggleClass("active");
		$(this).find('#media').toggleClass("active");
	});
});
	
</script>
<?php //I have to require this FROM THE SAME FOLDER because using a snippet was causing a strange css bug
require_once 'menu.include.php' ?>
<div class="container">
	<?php $work = $pages->find('work');
	if($work->hasChildren()) $projects = $work->children()->visible()->flip();
	foreach($projects as $project){?>
	<a href="<?php echo $project->url()?>" class="image-link">
		<div class="project-thumbnail" id="border" >
			<span id="title"><span><?php  echo excerpt($project->title(), 20); ?></span></span>
			<span id="media"><span><?php  echo excerpt($project->media(), 25); ?></span></span>
			<img src="<?php echo $project->images()->find('thumbnail.png')->url(); ?>"/>
		</div>
	</a>
	<?php } ?>
</div>
<?php snippet('footer'); ?>