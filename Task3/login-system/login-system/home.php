<?php

$title='All Products';
$products = [
    [
    'id' => 1,
    'name' => 'laptop',
    'price' => '1,500,000',
    'image' => 'electronic-gadgets.jpeg'
],
[
    'id' => 2,
    'name' => 'Mobile',
    'price' => '11',
    'image' => 'p50-black.webp'
],

[
    'id' => 3,
    'name' => 'Iphone',
    'price' => '15,000',
    'image' => 'iPhone_12_mini(1).jpg'
],
];

include_once "layouts/header.php";
include_once "layouts/navbar.php";
include_once "middleware/guest.php";


?>
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
<h3 class="text-center display-5 mb-5">
<?= $title ?>
</h3>
        </div>
        <?php foreach ($products as $product) { ?>
            <div class="col-4">
                <div class="card " >
                    <img class="card-img-top" src="images/<?= $product['image'] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?= $product['name']  ?></h4>
                        <p class="card-text"><?= $product['price'] ?> EGP</p>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>

</div>

<?php 
include_once "layouts/footer.php";

?>