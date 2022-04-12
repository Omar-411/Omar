<?php 
session_start();
$phoneNumber=$_SESSION['phoneNumber'];

$q1= $_SESSION['q1'];
$q2= $_SESSION['q2'];
$q3= $_SESSION['q3'];
$q4= $_SESSION['q4'];
$q5= $_SESSION['q5'];

$result=$q1+$q2+$q3+$q4+$q5;
if($result >= 25){
    $review =$bad;

}else{
    $review =$good;

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
        <h2 class="text-center text-dark">Hospital Survay</h2>
        <form method="get">
        <table class="table table-dark table-striped my-3 ">
            <thead>
                <tr>
                    <th scope="col">QUESTIONS?</th>
                    <th scope="col">REVIEWS</th>
                    
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <th>Are you satisfied with the <strong>level of cleanliness</strong>?</th>
                        <td><?= $_SESSION['']['gender'] == 'f' ? 'checked' : '' ?></td>

                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>service prices</strong>?</th>
                        <td><input type="radio" class="form-check-input " name="q1" id="" value="0"></td>

                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>nursing service</strong>?</th>
                        <td><input type="radio" class="form-check-input " name="q1" id="" value="0"></td>

                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>level of the doctors</strong>?</th>
                        <td><input type="radio" class="form-check-input " name="q1" id="" value="0"></td>

                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>calmness in the hospital</strong>?</th>
                        <td><input type="radio" class="form-check-input " name="q1" id="" value="0"></td>

                    </tr>

                </tbody>
                <thead>
                <tr>
                    <th scope="col">TOTAL REVIEW</th>
                    <th scope="col">Reviews</th>
                    
                </tr>
            </thead>
          
        </table> 
        <button class="btn btn-outline-dark form-control font-weight-bold">Result</button>

     </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>