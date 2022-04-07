<?php
if ($_GET) {
    $phy= $_GET['Physics'] ;
    $che= $_GET['Chemistry'] ;
    $bio= $_GET['Biology'] ;
    $math= $_GET['Math'] ;
    $com= $_GET['Computer'];

    
    $add= $phy+ $che+ $bio+ $math +$com;
    $per=$add*100 /250;
    if ($per == 100){
        $grade ="A+" ;
    }elseif ($per >= 90){
        $grade = "A" ;
    }elseif ($per >= 80){
        $grade = "B";
    } elseif ($per >= 70){
        $grade = "C";
    }elseif ($per >= 60 ){
        $grade = "D";
    }elseif ($per >= 40 ){
        $grade = "E";
    }elseif($per >= 0){ 
        $grade = "F";
    }elseif($per < 0){ 
    $message= "<div class='alert alert-danger'>
    Add Real Values Please!</div> ";}
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center text-dark">
        <h3 class="text-Dark mt-5 mb-3">Enter Your Grade</h3>

        <div class="row bg-warning py-5">
            <div class=" col-8 offset-2">
                <form method="get">
                    <div class="form-group  " >
                        <div class="labels row justify-content-between">
                        <label for="Physics" class="col-2 form-label">Physics</label>
                        <label for="Chemistry" class="col-2 form-label">Chemistry</label>
                        <label for="Biology" class="col-2 form-label">Biology</label>
                        <label for="Math" class="col-2 form-label">Math</label>
                        <label for="Computer" class="col-2 form-label">Computer</label>

                        </div>
                        <div class="row  justify-content-between">
                        <input type="number" value="0" name="Physics" id="Physics" class="col-2 form-control text-center  mb-4">
                        <input type="number" value="0" name="Chemistry" id="Chemistry" class="col-2 form-control text-center  mb-4">
                        <input type="number" value="0" name="Biology" id="Biology" class="col-2 form-control text-center mb-4">
                        <input type="number" value="0" name="Math" id="Math" class="col-2 form-control text-center mb-4">
                        <input type="number" value="0" name="Computer" id="Computer" class="col-2 form-control text-center mb-4">
                        </div>
                    </div>

                    <button class="btn btn-dark w-50 mb-5 mt-2">CALC</button>
                </form>
                <?php

                if (isset($add,$grade)) {
                    echo "<div class='alert alert-success'>
                    Max Grade Is <br> => <strong>250</strong> <= <br>
                    Your Total Grade Is <br> => <strong>{$add}</strong> <= <br>
                    Your Percentage IS <br> => <strong>{$per}%</strong> <= <br>
                    Your Grade Is <br> => <strong>{$grade}</strong> <= <br>
                    </div>";
                
                }elseif(isset($message)){
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