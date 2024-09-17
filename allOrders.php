<?php 
include_once("header.php");
include_once("functions.php");

if(!isStaff()) header("Location: /");
?>

<form action="/functions.php?op=updateAbout" method='post'>

<div class="mb-3">
  <label for="update" class="form-label">Update About</label>
  <textarea class="form-control" name="update" id="update" rows="3"></textarea>
  <input class="buyBtn" type="submit" value="Submit">
</div>

</form>

<h1>Received Order</h1>
<h2>Your Login Email:<?php echo $_SESSION['email'];?></h2>

<?php
$orderQ = mysqli_query($dbConnection, "SELECT * FROM `order`");

while ($order = mysqli_fetch_assoc($orderQ)) {

    $coffeeQ = mysqli_query($dbConnection, 'SELECT * FROM `coffee` WHERE coffee_id='.$order['order_id']);
    $coffee = mysqli_fetch_assoc($coffeeQ);

    echo '<div class="order"><p>';
    echo 'Order Number : #'.$order['id'].'<br/>';
    echo 'Client Name : '.$order['client_name'].'<br/>';
    echo 'Client Email : '.$order['client_email'].'<br/>';
    echo 'Client Phone : '.$order['client_phone'].'<br/>';
    echo 'Order : '.$coffee['name'].' X '.$order['quantity'].'g'.'<br/>';
    echo 'Order Time : '.$order['order_time'].'<br/><br/>';

    echo 'Receiver Name : '.$order['receiver_name'].'<br/>';
    echo 'Receiver Phone : '.$order['receiver_phone'].'<br/>';
    echo 'Shipping Address : '.$order['address'].'<br/><br/>';

    echo 'Card Number : '.$order['card_number'].'<br/>';
    echo 'Name On Card : '.$order['name_on_card'].'<br/>';
    echo 'CVV : '.$order['cvv'].'<br/>';
    echo 'Expiry Date : '.$order['expiry_date'].'<br/><br/>';

    echo '</p></div>';
}
?>

<?php include_once("footer.php");?>