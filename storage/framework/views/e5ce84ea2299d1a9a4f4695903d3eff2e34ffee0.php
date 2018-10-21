<ul class="navigate">
	<li>
		<a href="<?php echo e(route('dashboard/article/create')); ?>">New Article</a>
	</li>
</ul>

<div class="list-data">
	<?php if(!empty($param['posts'])): ?>
	<table class="data">
		<tbody>
			<tr>
				<th>Title</th>
				<th>Content</th>
				<th>Created</th>
				<th>Action</th>
			</tr>
			<?php $__currentLoopData = $param['posts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e(str_limit($post->title, 100)); ?></td>
				<td><?php echo str_limit($post->content, 150); ?></td>
				<td><?php echo e(Carbon\Carbon::parse($post->created_at)->format('d/m/Y')); ?></td>
				<td>
					<a href="<?php echo e(route('dashboard/article')); ?>/edit/<?php echo e($post->id); ?>">Edit</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	<?php else: ?>
	<span>Tidak ada data</span>
	<?php endif; ?>
</div>