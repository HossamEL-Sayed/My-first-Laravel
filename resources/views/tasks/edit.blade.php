<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center">To DO List</h1>
	<hr>

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

		<input type="submit" name="update" value="Update">
	</form>

	@include('tasks.errors')
</body>
</html>