<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="bg-light" data-new-gr-c-s-check-loaded="14.1133.0" data-gr-ext-installed="">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<div class="container">
    <main>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2>Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" method="post" @yield('action')>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="fname" class="form-label">First name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="" value="">
                        </div>

                        <div class="col-sm-6">
                            <label for="lname" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="" value="">
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                        </div>
                        <div class="col-12">
                            <label for="from" class="form-label">From</label>
                            <input type="date" class="form-control" id="from" name="from" placeholder="dd/mm/YY" min="">
                        </div>
                        <div class="col-12">
                            <label for="to" class="form-label">To</label>
                            <input type="date" class="form-control" id="to" name="to" placeholder="dd/mm/YY">
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Save this information for next time</label>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="">
                            <label class="form-check-label" for="credit">Credit card</label>
                        </div>
                    </div>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cardname" class="form-label">Name on card</label>
                            <input type="text" class="form-control" id="cardname" name="cardname" placeholder="">
                            <small class="text-muted">Full name as displayed on card</small>
                        </div>

                        <div class="col-md-6">
                            <label for="cardnumber" class="form-label">Credit card number</label>
                            <input type="text" class="form-control" id="cardnumber" name="cardnumber" placeholder="">
                        </div>

                        <div class="col-md-3">
                            <label for="cardexp" class="form-label">Expiration</label>
                            <input type="text" class="form-control" id="cardexp" name="cardexp" placeholder="">
                        </div>

                        <div class="col-md-3">
                            <label for="cardcvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cardcvv" name="cardcvv" placeholder="">
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017–2021 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
<script>
    const today = new Date().toISOString().slice(0, 10);
    document.getElementById("from").min = today;
    document.getElementById("to").min = today;
</script>
</body>
</html>
