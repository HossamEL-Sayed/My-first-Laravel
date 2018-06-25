<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>

		<h2 style='margin-left:100px'>Tasks</h2>
			<table border="2">
				<thead>
					<tr>
						<th>Task</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tasks as $row)
						<tr>
							<td>
								<a href="/read/{{ $row->id }}"> {{ $row->body }} </a>
							</td>
							<td>
								<form action="/edit/{{ $row->id }} ">
							 		<input type="submit" name="edit" value="Edit">
							 	</form>

							 	<form action="/delete/{{ $row->id }} ">
							 		<input type="submit" name="delete" value="Delete">
							 	</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<br>

	<form method="get" action="/create">
		<input type="submit" name="create" value="Create New Task">
	</form>
</body>
</html>