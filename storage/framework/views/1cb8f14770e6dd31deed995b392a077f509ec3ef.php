<?php $__env->startSection('title'); ?>
<?php echo e($param['title']); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper" id="dashboard">
	<section class="sidebar">
		<ul class="sidebar-menu">
			<li>
				<a href="<?php echo e(route('home')); ?>" target="_blank">View Blog</a>
			</li>
			<li>
				<a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
			</li>
			<li>
				<a href="<?php echo e(route('dashboard/article')); ?>">Article</a>
			</li>
		</ul>
	</section>
	<section class="main">
	<?php if($param['path'] == 'index'): ?>
		<?php echo $__env->make('dashboard._dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php elseif($param['path'] == 'article'): ?>
		<?php echo $__env->make('dashboard._article', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php elseif($param['path'] == 'article/create'): ?>
		<?php echo $__env->make('dashboard._article-create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php elseif($param['path'] == 'article/edit'): ?>
		<?php echo $__env->make('dashboard._article-edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>