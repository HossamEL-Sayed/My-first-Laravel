<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>
	
	<form method="post" action="/createCat">

		{{ csrf_field() }}

		<label for="category" style='margin-left:35px'><b>Category</b>
		</label>
		</br>
		<input type="text" name="category" id="category">
		</br></br>

		<input type="submit" name="create" value="Create">
	</form>

	@include('tasks.errors')
</body>
</html>