<form action="<?php echo e(route('api/dashboard/article/create')); ?>" redirect="<?php echo e(route('dashboard/article')); ?>" method="post">
	<table style="width:100%">
		<tr>
			<td>Title</td>
			<td>
				<input type="text" class="txt" name="title" placeholder="Article title ..">
			</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>
				<textarea name="content" placeholder="Your article ini here .." class="txt" id="" cols="30" rows="20"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn" style="height:50px;margin-top:10px;float: right;background-color: #000;color:#fff;width:350px;">Post</button>
			</td>
		</tr>
	</table>
	<?php echo e(csrf_field()); ?>

</form>

<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('layout._form-usercontrol', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>