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
        <h1 class="jumbotron-heading">Edit {{$category->title}}</h1>
      </div>

      	<form method="POST" action="{{route('category')}}/{{$category->id}}">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

      <label for="category" class="lead text-muted"><b>Category Title</b></label></br>
			<textarea for="category" name="title" id="title">{{$category->title}}</textarea>
			<br><br>

			<input class="btn btn-primary" type="submit" name="update" value="Update">
		</form>
    </section>

	@include('errors')
  </body>
</html>

