<?php include_once("header.php");?>

    <h1>All Coffees</h1>
    <h2><?php echo date("F") . " " . "Sales"?></h2>

    <div class="flex-grid">
        
    <?php

    $coffeeQ = mysqli_query($dbConnection, "SELECT * FROM `coffee`");

    while ($coffee = mysqli_fetch_assoc($coffeeQ)){
        echo '<div class="col">
        <img src="/images/' .$coffee['image'] .'" />
        <p>
        Name: '.$coffee['name'] .'<br>
        Price (per 100g):$' .$coffee['price'] .'<br>
        <a href="/order.php?coffee_id='.$coffee['coffee_id'].'"' .'
        class="buyBtn">Order' . " " .$coffee['name'] .'</a><br></div>';
    }
    ?>
    </div>

<?php include_once("footer.php");?>

