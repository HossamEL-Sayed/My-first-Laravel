<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="/create">

		{{ csrf_field() }}

		<label for="task" style='margin-left:50px'><b>Task</b>
		</label>
		</br>
		<input type="text" name="task" id="task">
		</br></br>

		<label for="description" style='margin-left:50px'><b>Description</b></label></br>
		<textarea for="description" name="description" id="description"></textarea>
		<br>

		<input type="submit" name="create" value="Create">
	</form>

	@include('tasks.errors')
</body>
</html>