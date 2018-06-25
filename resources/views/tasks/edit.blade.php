<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="/edit/{{$task->id}}">

		{{ csrf_field() }}

		<label for="task" style='margin-left:50px'><b>Task</b>
		</label>
		</br>
		<textarea for="task" name="task" id="task">{{$task->body}}</textarea>
		<br><br>

		<label for="description" style='margin-left:50px'><b>Description</b></label></br>
		<textarea for="description" name="description" id="description">{{$task->description}}</textarea>
		<br>

		<input type="submit" name="update" value="Update">
	</form>

	@include('tasks.errors')
</body>
</html>