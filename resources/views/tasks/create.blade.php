<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>
	
	<form method="post" action="/create">

		{{ csrf_field() }}

		<label for="task" style='margin-left:35px'><b>Task</b>
		</label>
		</br>
		<input type="text" name="task" id="task">
		</br></br>

		<label for="description" style='margin-left:35px'><b>Description</b>
		</label>
		</br>
		<textarea name="description" id="description"></textarea>
		</br></br>

		<select name="category_id">
		@foreach($categories as $category)
			<option value="{{$category->id}}">{{$category->category}}</option>
		@endforeach
		</select> 
		</br></br>

		@foreach($blocks as $block)
			 <input type="checkbox" name="block[]" value="{{$block->id}}">{{$block->block}}<br>
		@endforeach 
		</br></br>

		<input type="submit" name="create" value="Create">
	</form>

	@include('tasks.errors')
</body>
</html>