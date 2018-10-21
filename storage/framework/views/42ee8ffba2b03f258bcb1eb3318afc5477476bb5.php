
<article class="full">
	<div class="title">
		<h1><?php echo e($param['post']->title); ?></h1>
	</div>
	<div class="detail">
		<div class="author">
			Author : <span><?php echo e($param['post']->users->name); ?></span>
		</div>
	</div>
	<div class="content">
		<?php echo $param['post']->content; ?>

	</div>
</article>
