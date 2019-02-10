<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Inventory</title>
</head>
<body>
    <hr>
    <div class="container">
        <h3>Which product would you like to purchase today?</h3>
        <hr>
        <div class="row">
            <div class="col-sm">
                <img src="./images/matches.jpg" class="picture" alt="custom matches">
                <a href="index.php">
                    <img src="./images/metal.jpg" class="picture" alt="reclaimed metal candles">
                </a>
            </div>
            <div class="col-sm">     
                <img src="./images/soy_wood.jpg" class="picture " alt="soy wood wick mason jar candles">
                <img src="./images/cinnamon.jpg" class="picture " alt="cinnamon chai reclaimed candles">
            </div>
            <div class="col-sm">
                <img src= "./images/soy.jpg" class="picture" alt="soy mason jar candles">
                <img src="./images/sticker.jpg" class="picture" alt="stickers">
            </div>
        </div>

    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
</body>
</html>