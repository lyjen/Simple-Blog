<?php $__env->startSection('title'); ?>
<?php echo e($param['title']); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="navigation">
	<nav>
		<ul class="nav">
			<li>
				<a href="<?php echo e(route('home')); ?>">Home</a>
			</li>
			<?php if(!Auth::check()): ?>
			<li>
				<a href="<?php echo e(route('login')); ?>">Login</a>
			</li>
			<li>
				<a href="<?php echo e(route('register')); ?>">Register</a>
			</li>
			<?php endif; ?>
			<?php if(Auth::check()): ?>
			<li>
				<a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
			</li>
			<?php endif; ?>
		</ul>
	</nav>
</div>
<?php if($param['path'] == 'index'): ?>
<?php echo $__env->make('blog.main.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($param['path'] == 'view'): ?>
<?php echo $__env->make('blog.main.view', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>