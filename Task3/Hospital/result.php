<?php
session_start();


$phoneNumber = $_SESSION['phoneNumber'];
$review = $_SESSION['review'];


// Review

$q;
function survay($survay)
{
    if ($survay < 3) {
        $q = "Bad";
    } else if ($survay >= 3 && $survay < 5) {
        $q = "Good";
    } else if ($survay >= 5 && $survay < 10) {
        $q = "Very Good";
    } else {
        $q = "Excellent";
    }
    return $q;
}

// Total Review 

$add = 0;
for ($i = 1; $i <= 5; $i++) {
    $add += $review['q' . $i];
}

if ($add < 25) {
    $result = 'Bad';
    $message = "<p class='alert alert-danger text-center'>
            We're very sorry about that<br> We'll contact you soon on this Phone Number :  <strong>{$phoneNumber}</strong>
            </p>";
} else {
    $result = 'Good';
    $message = "<p class='alert alert-success text-center'>
    <strong>Thank you</strong>
            </p>";
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
                        <td><?= survay($review['q1']) ?></td>

                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>service prices</strong>?</th>
                        <td><?= survay($review['q2']) ?></td>

                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>nursing service</strong>?</th>
                        <td><?= survay($review['q3']) ?></td>

                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>level of the doctors</strong>?</th>
                        <td><?= survay($review['q4']) ?></td>

                    </tr>
                    <tr>
                        <th>Are you satisfied with the <strong>calmness in the hospital</strong>?</th>
                        <td><?= survay($review['q5']) ?></td>

                    </tr>

                </tbody>
                <thead>
                    <tr>
                        <th scope="col">TOTAL REVIEW</th>
                        <th scope="col"><?= $result ?></th>

                    </tr>
                </thead>

            </table>
            <div class="form-group"> <?= $message ?> </div>


        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>