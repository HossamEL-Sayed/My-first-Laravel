<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>

	<form method="post" action="/editCat/{{$category->id}}">

		{{ csrf_field() }}

		<label for="category" style='margin-left:40px'><b>Category</b>
		</label>
		</br>
		<textarea for="category" name="category" id="category">{{$category->category}}</textarea>
		<br><br>

		<input type="submit" name="update" value="Update">
	</form>

	@include('tasks.errors')
</body>
</html>