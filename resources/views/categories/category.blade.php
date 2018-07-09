<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>

		<h2 style='margin-left:20px'>Categories</h2>
			<table border="2">
				<thead>
					<tr>
						<th>Categories</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $row)
						<tr>
							<td>
								<a href="/showCat/{{ $row->id }}"> {{ $row->category }} </a>
							</td>
							<td>
								<form action="/editCat/{{ $row->id }} ">
							 		<input type="submit" name="edit" value="Edit">
							 	</form>

							 	<form action="/deleteCat/{{ $row->id }} ">
							 		<input type="submit" name="delete" value="Delete">
							 	</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<br>

	<form method="get" action="/createCat">

		<input type="submit" name="create" value="Create New Catigory">
	</form>
</body>
</html>