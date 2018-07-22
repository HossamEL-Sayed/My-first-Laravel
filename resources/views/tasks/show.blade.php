<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>To DO List</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
        <a href="/" class="navbar-brand">Laravel Crud</a>
      </div>
    </div>

    <section class="jumbotron text-center">
      	<div class="container">
        	<h1 class="jumbotron-heading">Details of {{$task->title}}</h1>
      	</div>
      	<div>
      		<table border-collapse="collapse" border="1">
				<thead>
					<tr>
						<th>Task Title</th>
						<th>Decription</th>
						<th>Category Title</th>
						<th>Blocks Title</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>{{ $task->title }}</td>
							<td>{{ $task->description }}</td>
							<td>{{ $task->category->title }}</td>
							<td>
								@foreach ($task->blocks as $row)
						
									{{$row->title}}<br>

								@endforeach
							</td>
						</tr>
				</tbody>
			</table>
		</div>
    </section>

  </body>
</html>