<?php $__env->startSection('title'); ?>
<?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('blog.register._register', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<center><a class="link-to" href="<?php echo e(route('login')); ?>">Signin</a></center>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('layout._form-usercontrol', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>