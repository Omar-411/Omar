<?php
if (isset($_GET['user']) && isset($_GET['city'])) {
    $user = $_GET['user'];
    $city = $_GET['city'];
    $varNum = $_GET['varNum'];



    $errors = [];
    if (empty($user)) {
        $errors['user'] = "<div class='text-danger font-weight-bold '> User Name Is Required </div>";
    }
    if ($varNum <= 0 || $varNum > 50) {
        $errors['varNum'] = "<div class='text-danger font-weight-bold my-2'>
        Number Of Varieties Must be Between 0 & 50. 
        </div>";
    }


    if (empty($errors)) {

        if ($city == 0) {
            $cityName = "Cairo";
        } elseif ($city == 30) {
            $cityName = "Giza";
        } elseif ($city == 50) {
            $cityName = "Alex";
        } elseif ($city == 100) {
            $cityName = "Other";
        }




        $header = "<table class='table text-center mt-5'><thead><tr>";
        $idRow = " <th scope='col'>ID</th>";
        $body    = "<th scope='col'>Product Name</th>
                    <th scope='col'>Price</th>
                    <th scope='col'>Quantities</th>";
        $subTotal = "<th scope='col' class='text-warning'>Sub Total </th>";


        $enterProducts = $header .  $body;

        if (isset($_GET['reciept'])) {

            $enterProducts = $header .  $idRow .  $body .  $subTotal;
            $sum;
        }

        for ($i = 1; $i <= $varNum; $i++) {


            $inputs = "</tr></thead><tbody> <tr>
            <td><input type='text' name='productName$i' value='' class='form-control' REQUIRED ></td>
            <td><input type='number' name='price$i' value='' class='form-control' REQUIRED></td>
            <td><input type='number' name='quantities$i' value=''class='form-control' REQUIRED></td>
                                </tr>";


            if (isset($_GET['reciept'])) {
                $productName = $_GET['productName' . $i];
                $price = $_GET['price' . $i];
                $quantities = $_GET['quantities' . $i];
                $multi = $price * $quantities;

                global $sum;
                $sum += $multi;

                $coloumns = "</tr></thead><tbody> <tr>
                                <td > $i </td>
                                <td> $productName </td>
                                <td>$price EGP</td>
                                <td>$quantities </td>
                                <td class='fw-bold text-warning'>$multi EGP</td>  
                            </tr>";


                $enterProducts .= $coloumns;
            } elseif (!isset($_GET['reciept'])) {
                $enterProducts .= $inputs;
            }
        }

        $enterProducts .= "</tbody> </table>";



        if (!isset($_GET['reciept'])) {

            $enterProducts .= "<button type='submit' name='reciept' class='btn btn-dark  form-control my-2'>Reciept</button>";
        } elseif (isset($_GET['reciept'])) {


            if ($sum > 0 && $sum < 1000) {
                $discount = 0;
            } elseif ($sum < 3000) {
                $discount = .10;
            } elseif ($sum < 4500) {
                $discount = .15;
            } elseif ($sum >= 4500) {
                $discount = .20;
            }

            $discountAmount = $discount * $sum;
            $afterDiscount = $sum - $discountAmount;
            $netTotal = $afterDiscount + $city;


            $enterProducts .= "<table class='table text-center mt-5 fw-bold'>
                                <tr>
                                    <td >Client Name</td>
                                    <td  class='text-white'>$user</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td  class='text-white'>$cityName</td>
                                </tr>
                                <tr>
                                <td>Total</td>
                                <td  class='text-white'>$sum EGP</td>
                                </tr>
                                <tr>
                                <td>Discount</td>
                                <td  class='text-white'>$discountAmount EGP</td>
                                </tr>
                                <tr>
                                <td>Total After Discount</td>
                                <td  class='text-white'>$afterDiscount EGP</td>
                                </tr>
                                <tr>
                                <td>Delivery Fees</td>
                                <td  class='text-white'>$city EGP</td>
                                </tr>
                                <tr class='text-warning'>
                                <td>Net Total</td>
                                <td >$netTotal EGP</td>

                                </tr>
                                
                                ";
        }
    }
}






?>





<!doctype html>
<html lang="en">

<head>
    <title>Super Market</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../BS5-Template/css/all.min.css" type="text/css" rel="stylesheet">
    <link href="../BS5-Template/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-dark text-center my-4">
                <h2>Super Market</h2>
            </div>
            <div class="col-8 offset-2 bg-primary text-dark rounded-top py-3">
                <form method="GET">
                    <div class="form-group font-weight-bold my-2">
                        <label for="user">User Name</label>
                        <input type="text" name="user" value="<?= $user ??  "" ?>" id="" class="form-control my-1" placeholder="" aria-describedby="helpId">
                        <?= $errors['user'] ?? "" ?>
                    </div>
                    <div class="form-group font-weight-bold my-2">
                        <label for="city ">City</label>
                        <select class="form-select form-control my-1" name="city" aria-label="Default select example">
                            <option value="0" <?= isset($city) ?  $city == 0 ? 'selected' : '' : ''; ?>>Cairo</option>
                            <option value="30" <?= isset($city) ?  $city == 30 ? 'selected' : '' : ''; ?>>Giza</option>
                            <option value="50" <?= isset($city) ?  $city == 50 ? 'selected' : '' : ''; ?>>Alex</option>
                            <option value="100" <?= isset($city) ?  $city == 100 ? 'selected' : '' : ''; ?>>Other</option>
                        </select>
                        <?= $errors['city'] ?? "" ?>

                    </div>
                    <div class="form-group font-weight-bold my-2">
                        <label for="varNum">Number of Varieties</label>
                        <input type="number" name="varNum" value="<?= $varNum ??  "" ?>" id="" class="form-control my-1" placeholder="" aria-describedby="helpId">
                        <?= $errors['varNum'] ?? "" ?>

                    </div>
                    <button name="enterProducts" class="btn btn-dark  form-control my-3"> Enter Products</button>
                    <?= $enterProducts ??  "" ?>

                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../BS5-Template/css/js/bootstrap.bundle.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>