<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validation
        $user = $_POST['user'];
        $loanAmount = $_POST['loanAmount'];
        $years = $_POST['years'];
        $errors = [];

        if (empty($user)) {
            $errors['user'] = "<div class='text-danger font-weight-bold '> User Name Is Required </div>";
        }
        if (empty($loanAmount)) {
            $errors['loanAmount'] = "<div class='text-danger font-weight-bold my-2'> Loan Amount Is Required </div>";
        }
        if (empty($years)) {
            $errors['years'] = "<div class='text-danger font-weight-bold my-2'> Number Of Years Is Required </div>";
        } if($years <= 0 || $loanAmount <= 0){
            $errors['validNumber']="<div class='alert alert-danger text-center'>
            Please Enter Valid Value</div>";
        }
        if (empty($errors)) {

    

   
    $monthNum = $years * 12;

    if($years < 3){
        $interestRate= $years * 0.10 * $loanAmount;
        $loanAfterInterest= $interestRate + $loanAmount;
        $monthly= $loanAfterInterest / $monthNum;

    }else{
        $interestRate= $years * 0.15 * $loanAmount;
        $loanAfterInterest= $interestRate + $loanAmount;
        $monthly= $loanAfterInterest / $monthNum;
    }
    $table= "<table class='table table-dark table-striped my-2'>
    <thead>
      <tr>
        <th scope='col'>User Name</th>
        <th scope='col'>Interest Rate</th>
        <th scope='col'>Loan After Interest</th>
        <th scope='col'>Number Of Months</th>
        <th scope='col'>Monthly</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope='row'>$user</th>
        <td>$interestRate</td>
        <td>$loanAfterInterest</td>
        <td>$monthNum</td>
        <td>$monthly</td>
      </tr>";
}
}






?>





<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-dark text-center my-4">
                <h2>Bank App</h2>
            </div>
            <div class="col-10 offset-1 bg-dark text-light rounded-top py-3">
                <form method="POST">
                    <div class="form-group text-center">
                        <label for="user">User Name</label>
                        <input type="text" name="user" value="<?= $user ??  "" ?>"  id="" class="form-control  text-center" placeholder="" aria-describedby="helpId">
                        <?= $errors['user'] ?? "" ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="loanAmount">loan amount</label>
                        <input type="number" name="loanAmount" value="<?= $loanAmount ??  "" ?>" id="" class="form-control  text-center" placeholder="" aria-describedby="helpId">
                        <?= $errors['loanAmount'] ?? "" ?>

                    </div>
                    <div class="form-group text-center">
                        <label for="years">Years Number</label>
                        <input type="number" name="years" value="<?= $years ??  "" ?>" id="" class="form-control  text-center" placeholder="" aria-describedby="helpId">
                        <?= $errors['years'] ?? "" ?>

                    </div>
                    <button class="btn btn-outline-light form-control my-3"> Calc</button>
                </form>
                <?= $errors['validNumber'] ?? "" ?>
                <?= isset($table) ? $table : "" ?>




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