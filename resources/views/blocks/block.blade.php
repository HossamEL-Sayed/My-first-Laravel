<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>

		<h2 style='margin-left:20px'>Blocks</h2>
			<table border="2">
				<thead>
					<tr>
						<th>Blocks</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($blocks as $row)
						<tr>
							<td>
								<a href="/showBlock/{{ $row->id }}"> {{ $row->block }} </a>
							</td>
							<td>
								<form action="/editBlock/{{ $row->id }} ">
							 		<input type="submit" name="edit" value="Edit">
							 	</form>

							 	<form action="/deleteBlock/{{ $row->id }} ">
							 		<input type="submit" name="delete" value="Delete">
							 	</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<br>

	<form method="get" action="/createBlock">

		<input type="submit" name="create" value="Create New block">
	</form>
</body>
</html>