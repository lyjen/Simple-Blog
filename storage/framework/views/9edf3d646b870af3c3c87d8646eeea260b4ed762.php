<h3 class="greeting">Welcome, <?php echo e(Auth::user()->username); ?> | <a  href="<?php echo e(route('logout')); ?>">Logout</a></h3> 
	<table class="data">
		<tbody>
			<tr>
				<td>Name</td>
				<td><?php echo e(Auth::user()->name); ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><?php echo e(Auth::user()->username); ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo e(Auth::user()->email); ?></td>
			</tr>
			<tr>
				<td>Total Post</td>
				<td><?php echo e($param['count_posts']); ?></td>
			</tr>
		</tbody>
	</table>
</section>