<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="contaner m-5">

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1> All posts</h1>
    <a class="btn btn-success" href="{{ route('posts.create') }}">Add new post</a>

</div>

        <form action="{{ route('posts.index') }}" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search here ..."name="search"
                value="{{ request()->search }}"

                aria-label="Recipient's username" aria-describedby="button-addon2">

                <select name="count">

                    <option {{ request()->count==5 ? 'selected' : '' }} value="5">5</option>
                    <option {{ request()->count==10 ? 'selected' : '' }} value="10">10</option>
                    <option {{ request()->count==15 ? 'selected' : '' }} value="15">15</option>
                    <option {{ request()->count==20 ? 'selected' : '' }} value="20">20</option>
                    <option {{ request()->count==$posts->total() ? 'selected' : '' }} value="{{ $posts->total() }}">All</option>
                </select>
                <button class="btn btn-dark px-5"  id="button-addon2">search</button>
              </div>

        </form>

        <table class="table table-hover table-bordered table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        @foreach ($posts as $post)
        <tr>

        <td>{{ $post->id }}</td>
        <td>{{ $post ->title }}</td>
        <td><img width="80" src="{{ asset('uploads/'.$post->image) }}" alt=""></td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
        <td>
            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
        </td> 
    </tr>
        @endforeach


        </table>
        {{ $posts->appends($_GET)->links() }}

    </div>

</body>
</html>
