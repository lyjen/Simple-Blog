<div class="wrapper" id="register">
	<form action="{{ route('api/register') }}" method="post" redirect="dashboard">
		<center><h1>Sign up</h1></center>
		<table>
			<tbody>
				<tr class="status">
					<td colspan="2">
						<div id="messagelog"></div>
					</td>
				</tr>
				<tr>
					<td><label for="name">Name</label></td>
					<td>
						<input type="text" class="txt" name="name" id="name" autocomplete="off" maxlength="100">
					</td>
				</tr>
				<tr>
					<td><label for="username">Username</label></td>
					<td>
						<input type="text" class="txt" name="username" id="username" autocomplete="off" maxlength="100">
					</td>
				</tr>
				<tr>
					<td><label for="password">Password</label></td>
					<td>
						<input type="password" class="txt" name="password" id="password" autocomplete="off">
					</td>
				</tr>
				<tr>
					<td><label for="email">Email</label></td>
					<td>
						<input type="email" class="txt" name="email" id="email">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button class="btn" type="submit">Register</button>
					</td>
				</tr>
			</tbody>
		</table>
		{{ csrf_field() }}
	</form>
</div>