<h3 class="greeting">Welcome, {{ Auth::user()->username }} | <a  href="{{ route('logout') }}">Logout</a></h3> 
	<table class="data">
		<tbody>
			<tr>
				<td>Name</td>
				<td>{{ Auth::user()->name }}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>{{ Auth::user()->username }}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{ Auth::user()->email }}</td>
			</tr>
			<tr>
				<td>Total Post</td>
				<td>{{ $param['count_posts'] }}</td>
			</tr>
		</tbody>
	</table>
</section>