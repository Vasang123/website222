<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<body >

    @if (session()->has('message'))
    <div class="alert alert-danger position-absolute" style="width: 100%;">
        {{ session()->get('message') }}
    </div>
     @endif
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container col-3">
            <form method="POST" action="/" class="">
                <div class="container d-flex justify-content-center" >
                    <h4>Login</h4>
                </div>
                @csrf
                <div class="mb-3 my-4">
                    <label for="exampleInputEmail1" class="form-label mb-3">Initial and Generation</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="initial">
                </div>

                <div class="mb-3 my-4">
                    <label for="exampleInputPassword1" class="form-label mb-3">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                    <label class="form-check-label" for="exampleCheck1" >Remember Me</label>
                </div>

                <div class="container d-flex justify-content-center" >
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
          </form>
        </div>
    </div>

</body>
</html>
