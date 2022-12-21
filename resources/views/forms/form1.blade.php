<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>


<div class="container my-5">
<h1>form</h1>
<form action="{{ route('form1_data') }}" method="post">
  {{--  <input type="hidden" name='_token' value="{{ csrf_token() }}"> --}}
  @csrf
  <div class="mb-3">
        <label>Name</label>
        <input class="form-control" type="text" placeholder="Name" name="name" />
    </div>

    <div class="mb-3">
        <label>Age</label>
        <input class="form-control" type="text" placeholder="Age" name="age" />
    </div>




    <div class="text-center">
    <button class="btn btn-info w-25 ">Send</button>
    </div>

</form>
</div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
