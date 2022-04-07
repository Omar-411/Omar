<?php
if ($_GET ) {

    $firstNumber= $_GET["first"];
    $secondNumber= $_GET["second"];
    $oper=$_GET['add'];
    
    switch($oper){
        case "+":
            $result = $firstNumber + $secondNumber;
            break;
        case"-":
            $result = $firstNumber - $secondNumber;
            break;
        case"*":
            $result = $firstNumber * $secondNumber;
            break;
        case"/":
            $result = $firstNumber / $secondNumber;
            break;
        case"**":
            $result = $firstNumber ** $secondNumber;
            break;
        case"%":
            $result = $firstNumber % $secondNumber;
            break;
    }

}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Clac</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center text-dark">
        <h3 class="text-dark mt-5 mb-3">Calculator </h3>

        <div class="row bg-light py-5">
            <div class=" col-6 offset-3">
                <form method="get">
                    <div class=" form-group " >
                        <div class="row justify-content-around">
                    <label for="first" >First Number</label>
                     <label for="second" >Second Number</label>
                     </div>
                    <div class="  d-flex justify-content-between">
                    <input type="number" name="first" id="first"  value="0" class=" text-center form-control w-50 m-1 ">
                     <input type="number" name="second" id="second" value="0" class="text-center form-control w-50 m-1 ">
                        </div>
                        <div class="row  justify-content-between mt-4 mb-5">
                           
                            <button class="col-1 btn btn-warning rounded-circle" name="add" value="+">+</button>   
                            <button class="col-1 btn btn-dark rounded-circle" name="add" value="-">-</button>   
                            <button class="col-1 btn btn-warning rounded-circle" name="add" value="*">x</button>   
                            <button class="col-1 btn btn-dark rounded-circle" name="add" value="/">/</button>   
                            <button class="col-1 btn btn-warning rounded-circle" name="add" value="**">^</button>   
                            <button class="col-1 btn btn-dark rounded-circle" name="add" value="%">%</button>   
                           
                            </div>
                    </div>

                </form>
                <?php

                if (isset($result)) {
                    echo "<div class='alert alert-success'>
                    <strong>$firstNumber</strong> $oper <strong>$secondNumber</strong> =><strong> {$result} </strong>
                   
                    </div>";} 
                ?>

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