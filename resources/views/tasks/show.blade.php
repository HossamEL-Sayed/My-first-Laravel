<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2">
				<thead>
					<tr>
						<th>Task</th>
						<th>Decription</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ $task->body }}</td>
						<td>{{ $task->description }}</td>
					</tr>
				</tbody>
			</table>
</body>
</html>