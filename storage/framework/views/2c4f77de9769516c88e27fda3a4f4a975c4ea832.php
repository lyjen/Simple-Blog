<?php $__currentLoopData = $param['posts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<article>
	<div class="title">
		<a href="view/<?php echo e($post->id); ?>">
			<h1><?php echo e($post->title); ?></h1>
		</a>
	</div>
	<div class="detail">
		<div class="author">
			Author : <span><?php echo e($post->users->name); ?></span>
		</div>
	</div>
	<div class="content">
		<?php echo str_limit($post->content, 350); ?>

	</div>
</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>