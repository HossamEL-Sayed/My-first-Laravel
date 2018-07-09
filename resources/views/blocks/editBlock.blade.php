<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>

	<form method="post" action="/editBlock/{{$block->id}}">

		{{ csrf_field() }}

		<label for="block" style='margin-left:40px'><b>Block</b>
		</label>
		</br>
		<textarea for="block" name="block" id="block">{{$block->block}}</textarea>
		<br><br>

		<input type="submit" name="update" value="Update">
	</form>

	@include('tasks.errors')
</body>
</html>