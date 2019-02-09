<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Pay Page</title>
</head>
<body>
    <form action="/charge" method="post" id="payment-form">
    <div class="form-row">
        <label for="card-element">
        Credit or debit card
        </label>
        <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>

    <button>Submit Payment</button>
    </form>


<script src="https://js.stripe.com/v3/"></script>
<script src="charge.js"></script>
</body>
</html>