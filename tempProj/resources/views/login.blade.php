<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body style="background-color: #5F7ADB;">
<section>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/login/check">
        @csrf
        <div class="container py-5 h-75">
            <div class="row d-flex justify-content-center align-items-center h-75 mt-5">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Login</h3>

                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email"/>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="pass" name="pass" class="form-control form-control-lg" placeholder="Password"/>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                <label class="form-check-label ms-3" for="form1Example3"> Remember password </label>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block w-75 bg-success" type="submit">Login</button>

                            <hr class="my-4">
                            <div class="row justify-content-around d-flex">
                                <div class="col-md-3">
                            <button class="btn btn-lg btn-block btn-primary border-0" style="background-color: #dd4b39;"
                                    type="submit"><i class="bi bi-google"></i></button>
                                </div>
                                <div class="col-md-3">
                            <button class="btn btn-lg btn-block btn-primary  border-0" style="background-color: #3b5998;"
                                    type="submit"><i class="bi bi-facebook"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
