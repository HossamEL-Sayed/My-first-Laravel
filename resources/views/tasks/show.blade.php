<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>

	<table border="2">
		<thead>
			<tr>
				<th>Task</th>
				<th>Decription</th>
				<th>Category</th>
				<th>Blocks</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ $task->body }}</td>
				<td>{{ $task->description }}</td>
				<td>{{ $task->category->category }}</td>
				<td>
					@foreach ($task->blocks as $row)
						
						{{$row->block}}<br>

					@endforeach
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>