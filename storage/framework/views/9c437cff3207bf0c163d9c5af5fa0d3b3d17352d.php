<form action="<?php echo e(route('api/dashboard/article/edit')); ?>" redirect="<?php echo e(route('dashboard/article')); ?>" method="put">
	<table style="width:100%">
		<tr>
			<td>Title</td>
			<td>
				<input type="text" class="txt" name="title" value="<?php echo e($param['post']->title); ?>" placeholder="Article title ..">
			</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>
				<textarea name="content" placeholder="Your article ini here .." class="txt" id="" cols="30" rows="20"><?php echo e($param['post']->content); ?></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn" style="height:50px;margin-top:10px;background-color: #000;color:#fff;width:300px">Update</button>
				<button style="height:50px;margin-top:10px;background-color: #D64541;color:#fff;width:300px" id="btn_delete" class="btn btn_delete">Delete</button>
			</td>
		</tr>
	</table>
	<?php echo e(csrf_field()); ?>

	<input type="hidden" value="<?php echo e($param['id']); ?>" name="id">
</form>
<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('layout._form-usercontrol', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/javascript">
	$('button#btn_delete').on('click', function (event) {
		event.preventDefault();
		var id = $('form').find('input[name=id]')[0],
			token = $('form').find('input[name=_token]')[0],
			action = $('form').attr('action'),
			redirect = $('form').attr('redirect');
		id = $(id).val();
		token = $(token).val();
		$.ajax({
			type:'post',
			url: '/api/dashboard/article/delete',
			data: {'_method': 'delete', 'id': id, '_token': token},
			beforeSend: function () {
				var confirm = window.confirm('Yakin ingin di hapus?');
				if (!confirm) {
					return false;
				}
			},
			success: function (res) {
				var data = res;
				if (typeof(res) != 'object') {
					data = JSON.parse(res);
				}
				if (data.status == 'success'){
					window.location.href = redirect;
				}
			}
		})
	});

</script>
<?php $__env->stopPush(); ?>