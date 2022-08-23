<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

    @if (session()->has('message'))
    <div class="alert alert-danger position-absolute" style="width: 100%;">
        {{ session()->get('message') }}
    </div>
     @endif
    <div id="title">
        SLC 22-2
    </div>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div id="container">
            <form method="POST" action="/">
                @csrf
                <div class="d-flex justify-content-center" >
                    <h4 class="text">Login</h4>
                </div>
                <div class="mb-3 my-4">
                    <label for="exampleInputEmail1" class="form-label mb-3 text">Initial and Generation</label>
                    <input type="text" class="form-control input-field" id="exampleInputEmail1" aria-describedby="emailHelp" name="initial">
                </div>

                <div class="mb-3 my-4">
                    <label for="exampleInputPassword1" class="form-label mb-3 text">Password</label>
                    <input type="password" class="form-control input-field" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                    <label class="form-check-label text" for="exampleCheck1" >Remember Me</label>
                </div>

                <div class="container d-flex justify-content-center" >
                    <button type="submit" class="button">Login</button>
                </div>
          </form>
        </div>
    </div>

</body>
</html>
<style>

    body{
        background-color: #b4d3e3;
    }

    #title{
        position: fixed;
        width: 100%;
        background-color: #21577b;
        text-align: center;
        font-weight: bolder;
        font-size: 50px;
        color: white;
    }

    #container{
        margin-top: 50px;
        width: 30%;
        background-color: #21577b;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
    }

    .input-field{
        border-radius: 8px;
    }

    .text{
        color: white;
        font-weight: bold;
    }

    .button{
        border: none;
        border-radius: 7px;
        padding: 5px 13px 5px 13px;
        background-color: #fece6a;
        color: black;
        font-weight: bolder;
    }

    .button:hover{
        background-color: rgba(237, 190, 95, 1);
    }

</style>
