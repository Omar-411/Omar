<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female

$users = [
  (object)[
    'id' => 1,
    'name' => 'Hoda',
    "gender" => (object)[
      'gender' => 'f'
    ],
    'hobbies' => [
      'football', 'swimming'
    ],
    'activities' => [
      "school" => 'drawing',
    
    ],
    'Omar' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
  ],
  (object)[
    'id' => 1,
    'name' => 'ahmed',
    "gender" => (object)[
      'gender' => 'm'
    ],
    'hobbies' => [
      'football', 'swimming', 'running'
    ],
    'activities' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
    'Omar' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
  ],
  (object)[
    'id' => 1,
    'name' => 'ahmed',
    "gender" => (object)[
      'gender' => 'm'
    ],
    'hobbies' => [
      'football', 'swimming', 'running'
    ],
    'activities' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
    'Omar' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
  ],
  (object)[
    'id' => 1,
    'name' => 'ahmed',
    "gender" => (object)[
      'gender' => 'm'
    ],
    'hobbies' => [
      'football', 'swimming', 'running'
    ],
    'activities' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
    'Omar' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
  ],
  (object)[
    'id' => 1,
    'name' => 'ahmed',
    "gender" => (object)[
      'gender' => 'm'
    ],
    'hobbies' => [
      'football', 'swimming', 'running'
    ],
    'activities' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
    'Omar' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
  ],
  (object)[
    'id' => 1,
    'name' => 'ahmed',
    "gender" => (object)[
      'gender' => 'f'
    ],
    'hobbies' => [
      'football', 'swimming', 'running'
    ],
    'activities' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
    'Omar' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],
    
  ],

  (object)[
    'id' => 1,
    'name' => 'Omar',
    "gender" => (object)[
      'gender' => 'f'
    ],
    'hobbies' => [
      'football', 'Kick Boxing'
    ],
    'activities' => [
      "school" => 'Writing',
      'home' => 'Football'
    ],
    'Omar' => [
      "school" => 'Writing',
      'home' => 'Football'
    ],
  ],
  (object)[
    'id' => 1,
    'name' => 'Omar',
    "gender" => (object)[
      'gender' => 'f'
    ],
    'hobbies' => [
      'football', 'Kick Boxing'
    ],
    'activities' => [
      "school" => 'Writing',
      'home' => 'Football'
    ],
    'Omar' => [
      "school" => 'Writing',
      'home' => 'Football'
    ],
  ],



]

?>

<!doctype html>
<html lang="en">

<head>
  <title>Table</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  
  <link href="..//BS5-Template/css/all.min.css" type="text/css" rel="stylesheet">
    <link href="..//BS5-Template/css/bootstrap.css" type="text/css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container ">
    <table class="table table-dark table-striped">
      <tbody>

        <?php foreach ($users as  $user => $values ) { ?>
          

          <tr>
            

            <?php foreach ($values as  $value ) { ?>
            
              <td>

                <?php
                $dataType = gettype($value);

                if ($dataType == 'array' || $dataType == 'object') {

                  foreach ($value as $varNames => $varName) {

                          if($varName == 'm'){

                            echo("male");

                          }elseif($varName == 'f'){
                            echo("female");

                          }else{
                            echo ("{$varName}<br>");
                          }

                      }
                } else {

                  echo ("{$value}<br>");
                }
                
                ?>




              </td>
            <?php } ?>






          </tr>

        <?php } ?>
      </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="..//BS5-Template/css/js/bootstrap.bundle.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>