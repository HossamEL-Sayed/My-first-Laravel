<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>

		<h2 style='margin-left:25px'>Tasks</h2>
			<table border="2">
				<thead>
					<tr>
						<th>Task</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($category->tasks as $row)
						<tr>
							<td>
								{{$row->body}}
							</td>
							<td>
								{{$row->description}}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<br>
</body>
</html>