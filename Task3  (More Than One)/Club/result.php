<?php
session_start();


// Session Validation

if (empty($_SESSION['members'])) {
    header('location:subscribe.php');
    die;
}

$table = "<table class='table bg-dark  text-white text-center'>
    <thead>
      <tr class='text-warning'>
      <th></th>
        <th>Subscriber Name</th>
        <th></th>

        <th>" . $_SESSION['subscriperName'] . "</th>
        <th></th>
      </tr>
   
      <tr class='text-white' >
        <th>Member Name</th>
        <th></th>
        <th>Games</th>
        <th></th>
        <th></th>
       
        <th>Total </th>
      </tr>
    </thead>
    <tbody>";

$totalGamesPrice = 0;
$culbGames = ['Football' => 0, 'Swimming' => 0, 'Volleyball' => 0, 'Others' => 0];


for ($i = 1; $i <= $_SESSION['familyMembers']; $i++) {


    $totalPriceOfMemberGames = 0;

    $table .= "<tr>
        <th>" . ucfirst($_SESSION['members']['member' . $i]['memberName']) . "</th>";

    if (!empty($_SESSION['members']['member' . $i]['memberSports'])) {

        foreach ($_SESSION['members']['member' . $i]['memberSports'] ?? "" as $sport => $price) {

            if ($sport == 'Football') $culbGames[$sport]++;
            elseif ($sport == 'Swimming') $culbGames[$sport]++;
            elseif ($sport == 'Volleyball') $culbGames[$sport]++;
            elseif ($sport == 'Others') $culbGames[$sport]++;

            $totalPriceOfMemberGames += $price;
            $table .=  "<td class=' fw-bold text-success '>" . $sport ?? "" . "</td>";
        }
    }
    $table .= "<td>" . $totalPriceOfMemberGames . "  EGP</td>
   </tr>";
    $totalGamesPrice += $totalPriceOfMemberGames;
}
$table .= "</tbody><tfoot class='table-dark'><tr>
      <th colspan='5'class='text-start' >Total Games Price</th>
      <td colspan='2' class=' fw-bold text-warning '>" . $totalGamesPrice . "  EGP</td>

      
   </tr></tfoot>
</tbody>";
$table .= " 
<table class='table table-striped table-dark '>
<tr>
         <th class='text-start'>Subscriber Name</th>
          <td class='fw-bold text-warning'>" . $_SESSION['subscriperName']  . "</td>
</tr>
<tr>
         <th class='text-start'>Family Members Count</th>
          <td class=' fw-bold text-warning '>" . $_SESSION['familyMembers'] . "</td>
</tr>";
foreach ($_SESSION['sports'] as $sport => $price) {
    $table .= " 
      <tr>
         <th class='text-start'>" . $sport . "</th>
          <td >" . $price * $culbGames[$sport] . " EGP </td>
      </tr>";
}
$totalSubscribtionPrice = 10000 + $_SESSION['familyMembers'] * 2500;
$table .= "<tr><th class='text-start'>Total Subscribtion Price </th> <td class='text-center fw-bold text-warning '>" . $totalSubscribtionPrice . " EGP </td></tr> 
<tr><th class='text-start'>Total Price</th><td class=' fw-bold text-warning ' >" . $totalSubscribtionPrice + $totalGamesPrice . " EGP</td></tr> 
</table>";


?>

<!doctype html>
<html lang="en">

<head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../BS5-Template/css/all.min.css" type="text/css" rel="stylesheet">
    <link href="../BS5-Template/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container py-4 my-4 bg-dark text-white text-center">
        <h2 class=" my-2 text-warning">( Your Family Members )</h2>

        <div class="row ">
            <div class=" my-3">
                <?=
                $table;
                ?>
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