<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categoties</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="contaner m-5">
        <h1>All categoties</h1>
        <table class="table table-hover table-bordered table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Ceruate At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
           @foreach ($pp as $categoties)
           <tr>
            <th>{{ $categoties->id}}</th>
            <th>{{ $categoties->name }}</th>
            <th>{{ $categoties->created_at}}</th>
            <th>{{ $categoties->updated_at}}</th>
            <th>
                <a class="btn btn-info btn-sm " href="#"><i class="fas fa-edit"></i></a>
                <a class="btn btn-danger btn-sm " href="#"><i class="fas fa-trash"></i></a>
            </th>
        </tr>

           @endforeach
        </table>





    </div>

</body>
</html>
