<?php
session_start();
define('bad', 0);
define('good', 3);
define('veryGood', 5);
define('excellent', 10);
if($_GET){
    $_SESSION['q1']= $_GET['q1'];
    $_SESSION['q2']= $_GET['q2'];
    $_SESSION['q3']= $_GET['q3'];
    $_SESSION['q4']= $_GET['q4'];
    $_SESSION['q5']= $_GET['q5'];
    
    header('location:result.php');
}
?>




<!doctype html>
<html lang="en">

<head>
    <title>Hospital</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container py-4 bg-light">
        <h2 class="text-center text-dark">Hospital Survey</h2>
        <form  method="get">
            <table class="table table-dark table-striped my-3 ">
                <thead>
                    <tr>
                        <th scope="col">QUESTIONS?</th>
                        <th scope="col">Bad</th>
                        <th scope="col">Good</th>
                        <th scope="col">Very Good</th>
                        <th scope="col">Excellent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Are you satisfied with the <strong>level of cleanliness</strong>?</th>
                        <div class="form-check">
                            <td><input type="radio" class="form-check-input " name="q1" id="" value="<?= bad ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q1" id="" value="<?= good ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q1" id="" value="<?= veryGood ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q1" id="" value="<?= excellent ?>"></td>
                        </div>
                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>service prices</strong>?</th>
                        <div class="form-check">
                            <td><input type="radio" class="form-check-input " name="q2" id="" value="<?= bad ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q2" id="" value="<?= good ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q2" id="" value="<?= veryGood ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q2" id="" value="<?= excellent ?>"></td>
                        </div>
                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>nursing service</strong>?</th>
                        <div class="form-check">
                            <td><input type="radio" class="form-check-input " name="q3" id="" value="<?= bad ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q3" id="" value="<?= good ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q3" id="" value="<?= veryGood ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q3" id="" value="<?= excellent ?>"></td>
                        </div>
                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>level of the doctors</strong>?</th>
                        <div class="form-check">
                            <td><input type="radio" class="form-check-input " name="q4" id="" value="<?= bad ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q4" id="" value="<?= good ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q4" id="" value="<?= veryGood ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q4" id="" value="<?= excellent ?>"></td>
                        </div>
                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>calmness in the hospital</strong>?</th>
                        <div class="form-check">
                            <td><input type="radio" class="form-check-input " name="q5" id="" value="<?= bad ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q5" id="" value="<?= good ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q5" id="" value="<?= veryGood ?>"></td>
                            <td><input type="radio" class="form-check-input " name="q5" id="" value="<?= excellent ?>"></td>
                        </div>
                    </tr>

                </tbody>

            </table>
            <button class="btn btn-outline-dark form-control font-weight-bold">RESULT</button>

        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>