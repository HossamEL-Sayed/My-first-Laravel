<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>
	
	<form method="post" action="/createBlock">

		{{ csrf_field() }}

		<label for="block" style='margin-left:35px'><b>Block</b>
		</label>
		</br>
		<input type="text" name="block" id="block">
		</br></br>

		<input type="submit" name="create" value="Create">
	</form>

	@include('tasks.errors')
</body>
</html>