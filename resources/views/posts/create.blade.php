<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="contaner m-5">

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1> Add Post</h1>
    <a class="btn btn-success" href="{{ route('posts.index') }}">All Posts</a>

</div>
@include('forms.erorr')

<form action="{{ route('posts.store') }} " method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label >Title</label>
    <input type="text" class="form-control" placeholder="Title" name="title">

</div>
<div class="mb-3">
    <label >Image</label>
    <input type="file" class="form-control" name="image">

</div>

<div class="mb-3">
    <label >Content</label>
    <textarea id="mytextarea" name="content"></textarea>
    <button class="btn btn-info px-5 mb-5">Add Post</button>


</div>
</form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script>
</body>
</html>
