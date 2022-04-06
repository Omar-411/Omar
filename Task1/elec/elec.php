<?php
if ($_GET) {
    $value = $_GET['val'];

    if ($value == 0) {
        $unitPrice = "0";
    } elseif ($value <= 50) {
        $unitPrice = ".50";
    } elseif ($value <= 150) {
        $unitPrice = ".75";
    } elseif ($value <= 250) {
        $unitPrice = "1.20";
    } elseif ($value > 250) {
        $unitPrice = "1.50";
    }

    $price = $value * $unitPrice;

    $vat = 20;
    $vatValue = $vat * $price / 100;

    $totalPrice = $price + $vatValue;
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Elec</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center text-dark">
        <h3 class="text-Dark mt-5 mb-3">Smart Invoice</h3>

        <div class="row bg-info py-5 ">
            <div class=" col-6 offset-3">
                <form method="get">
                    <div class="form-group  ">
                        <label for="val" class=" form-label">Enter Your Value!</label>
                        <input type="number" value="0" name="val" id="val" class="offset-3 w-50 form-control text-center mb-3">
                    </div>
                    <button class="btn btn-dark w-50 mb-3  rounded-pill">CALC</button>
                </form>
            


            <?php

            if (isset($unitPrice)) {
                echo "<div class='alert alert-success rounded-pill '>

                    Unit Price Is <br> => <strong>{$unitPrice} EGP</strong> <= <br>
                    Price After Unit Price Is<br> => <strong>{$price} EGP</strong> <= <br>
                    Vat Percentage IS <br> => <strong>{$vat}%</strong> <= <br>
                    Total Price After Vat Is <br> => <strong>{$totalPrice} EGP</strong> <= <br>

                    </div>";
            }
            ?>
</div>
        </div>
    </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>