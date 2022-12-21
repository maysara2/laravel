<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>


<div class="container my-5">
<h1>Register Form</h1>
{{-- @dump($errors) --}}
{{-- @dump($errors->any()) --}}

{{-- الطريقة الاولي
@if ($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach

</ul>
</div>
@endif --}}
{{-- الطريقة الثانية والارتب
@error('name')
<small class="text-danger">{{ $message }}</small>
        @enderror --}}

<form action="{{ route('form3_data') }}" method="post">
  {{--  <input type="hidden" name='_token' value="{{ csrf_token() }}"> --}}
  @csrf
  <div class="mb-3">
        <label>Name</label>
        <input class="form-control @error('fname')
is-invalid
        @enderror" type="text" placeholder="Name" name="fname" />

        @error('fname')
<small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label>email</label>
        <input class="form-control @error('femail') is-invalid

        @enderror" type="femail" placeholder="femail" name="femail" />
        @error('femail')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input class="form-control  @error('fpassword') is-invalid

        @enderror" type="fpassword" placeholder="fpassword" name="fpassword" />
        @error('fpassword')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror

    </div>

    <div class="mb-3">
        <label>Confirm Password</label>
        <input class="form-control @error('fpassword_confirmation')
        is-invalid
        @enderror" type="password" placeholder="Confirm Password" name="fpassword_confirmation" />
        @error('fpassword_confirmation')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>





    <div class="text-center">
    <button class="btn btn-info w-25 ">Send</button>
    </div>

</form>
</div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
