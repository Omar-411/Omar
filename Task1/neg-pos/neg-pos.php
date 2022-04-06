<?php
if ($_GET ) {
    $number = $_GET['number'] ;

    if ( $number > 0) {
        $sign = "Positive";
    } elseif( $number < 0){
        $sign="Negative";
    }else{
        $message="<div class='alert alert-danger'> This Is <strong>Zero</strong> </div>";
    }
    
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>Neg-Pos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center text-white">
        <h3 class="text-dark mt-5 mb-3">Negative || Positive </h3>

        <div class="row bg-dark py-5">
            <div class="col-4 offset-4">
                <form method="get">
                    <div class="form-group " >
                    
                        <label for="number mt-2">Add Your Number To Check</label>
                        <input type="number" name="number" id="number" class="form-control  mt-1 mb-3">
                    </div>

                    <button class="btn btn-warning w-50 mb-5 mt-2">CALC</button>
                </form>
                <?php

                if (isset($sign)) {
                    echo "<div class='alert alert-danger'>
                        Your Number Is <strong> $sign</strong>
                
                    </div>";} elseif(isset($message)){
                        
                        echo $message;
                    }
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